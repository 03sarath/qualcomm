<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workbench";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE data SET misting=1 WHERE num=1";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: http://192.168.7.21/"); /* Redirect browser */
exit();

$conn->close();
?>