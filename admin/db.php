<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "shoppingcart";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
   	die ("<script type='text/javascript'>  window.location='error.php'; </script>");
}
?>

