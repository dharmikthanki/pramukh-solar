<?php
include('db.php');
require('auth.php');
$action = isset($_POST['action']) ? $_POST['action'] : '';
if ($action == 'create') {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['kw'];
        $currentDateTime = date('Y-m-d H:i:s');  // Current datetime

        // Prepare and bind the SQL statement
        $stmt = $con->prepare("INSERT INTO kw (kw, tr_date) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $currentDateTime);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to the same page to avoid resubmission
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error: " . $con->error;
        }
    }
} elseif ($action == 'update') {
    if (isset($_POST['id']) && isset($_POST['kw'])) {
        $id = $_POST['id'];
        $kw = $_POST['kw'];
        // $email = $_POST['email'];

        $sql = "UPDATE kw SET kw = ? WHERE id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('si', $kw, $id); // 's' for string (kw), 'i' for integer (id)
        $stmt->execute();
    } else {
        // Handle the error, for example:
        echo "Missing 'id' or 'kw' in POST data";
    }
} elseif ($action == 'delete') {
    $id = $_POST['id'];

    $sql = "DELETE FROM kw WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('i', $id); // 'i' for integer (id)
    $stmt->execute();
}

// Fetch all records
$sql = "SELECT * FROM kw";
$result = $con->query($sql);
$users = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Insert KW</title>
    <link rel="stylesheet" href="css/insert.css" </head>

<body>

    <center><h1 style="background: #757F9A; border-radius: 25px; width:30%; color:white;">Enter KW</h1></center>
    <form method="post" action="">
        <div class="input-field">
            <input type="hidden" name="action" value="create">
            <input type="text" name="kw" required>
            <label>Enter KW:</label>
        </div><br>
        <button class="btn btn-10" type="submit">Insert</button>
    </form><br><br><br>
    <table>
        <tr>
            <th style="width:10%" class="header" >ID</th>
            <th class="header">KW</th>
            <th style="width:30%" class="header">Actions</th>
            <th class="header" style="width:50%">Date and Time</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['kw']; ?></td>
                <td>
                    <form method="post" action="" style="display:inline;">

                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">


                    </form>
                    <form method="post" action="" style="display:inline;">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <button class="btn btn-1" type="submit">Delete</button>
                    </form>
                </td>
                <td><?php echo $user['tr_date']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>