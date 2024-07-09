<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Password is blank
$dbname = "pramukhdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection


// if (isset($_POST["submit"])) {
// //     $name = $_POST['name'];
// //     $email = $_POST['email'];
// //     $mobile = $_POST['mobile'];
// //     $address = $_POST['address'];
// //     $pincode = $_POST['pincode'];
// //     $city = $_POST['selectCity'];
// // //$KW = $_POST['selectKW'];
//     $request = " INSERT INTO pramukhtbl (name,mobile,email,address,city,pincode,kw) VALUES ('$name','$mobile','$email','$address','$city','$pincode','$KW')";
//     mysqli_query($conn, $request);
//     header('location:index.php');
// } else {
//     echo 'something went wrong please try again!';
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['data'])) {
        $selected_name = $_POST['data'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $city = $_POST['selectCity'];

        // Prepare the SQL statement with placeholders
        $sql = "INSERT INTO pramukhtbl (name, mobile, email, address, city, pincode, kw) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        // Bind the parameters
        $stmt->bind_param("sssssss", $name, $mobile, $email, $address, $city, $pincode, $selected_name);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
            header("Location:index.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "No data selected.";
    }
}
$conn->close();


?>