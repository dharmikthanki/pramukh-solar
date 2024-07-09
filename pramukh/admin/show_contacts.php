<?php
require('auth.php');
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Password is blank
$dbname = "pramukhdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sel_query = "SELECT * FROM pramukhtbl ORDER BY id DESC;";
$result = mysqli_query($conn, $sel_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/contact.css" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Pramukh Solar Services</h1>
<table>
  <h2 align="center">Contacted</h2>
  <thead>
    <tr> 
    <th style="width: 2%;" scope="col" class="header">No</th>
      <th style="width: 20%;" scope="col" class="header">Name</th>
      <th style="width: 10%;" scope="col" class="header">Mobile</th>
      <th style="width: 20%;" scope="col" class="header">Email</th>
      <th style="width: 15%;" scope="col" class="header">Address</th>
      <th style="width: 20%;" scope="col"  class="header">City</th>
      <th style="width: 8%;" scope="col" class="header">Pincode</th>
      <th style="width: 10%;" scope="col" class="header">KW</th>
      <th style="width: 8%;" scope="col" class="header">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $count = 1;
  while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td data-label="No"><?php echo htmlspecialchars($row["id"]); ?></td>
      <td data-label="Name"><?php echo htmlspecialchars($row["name"]); ?></td>
      <td data-label="Mobile"><?php echo htmlspecialchars($row["mobile"]); ?></td>
      <td data-label="Email"><?php echo htmlspecialchars($row["email"]); ?></td>
      <td data-label="Address"><?php echo htmlspecialchars($row["address"]); ?></td>
      <td data-label="City"><?php echo htmlspecialchars($row["city"]); ?></td>
      <td data-label="Pincode"><?php echo htmlspecialchars($row["pincode"]); ?></td>
      <td data-label="KW"><?php echo htmlspecialchars($row["kw"]); ?></td>
      <td align="center"><a href="delete_contact.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
    </tr>
  <?php 
    $count++;
  } ?>
  </tbody>
</table>
</body>
</html>
<?php
mysqli_close($conn);
?>
