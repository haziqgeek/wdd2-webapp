<?php
$servername = "localhost"; // default phpmyadmin host name
$username = "root"; // default phpmyadmin username
$password = ""; // kalau ada password, isikan
$dbname = "warner"; // ikut nama database anda

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>