<?php
echo "Welcome to the stage where you were ready to connect to the database.<br>";

$servername = "localhost";
$username = "root";
$password = "";
$db_name="prj1";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if ($conn) {
    echo "Your database connection was successful!";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
