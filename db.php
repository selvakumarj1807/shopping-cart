<?php
$servername = "127.0.0.1";// localhost
$username = "root";
$password = "";
$dbname = "userAuthentication";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
