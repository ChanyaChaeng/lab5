<?php
$servername = "localhost";
$username = "Chanya";
$password = "@Fang2547";
$db = "chanya";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>