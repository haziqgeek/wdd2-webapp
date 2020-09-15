<?php
include 'conn.php'; // connecting to database
$aId = rand(0, 100); // generating random artist ID
$aName = $_POST["aName"]; // artist name
$aAge = $_POST["aAge"]; // artist age
// insert artist into database
$query = "INSERT INTO artists VALUES ('$aId', '$aName', '$aAge')";

if (mysqli_query($conn, $query)) {
    echo "New artist has been successfully registered";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>