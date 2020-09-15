<?php
include 'conn.php'; // connecting to database
$sId = rand(0, 100); // generating random song ID
$sName = $_POST["sName"]; // song name
$aId = $_POST["aName"]; // artist ID
$sLyrics = addslashes($_POST["sLyrics"]); // song lyrics. the lyrics might have special characters that will cause issues in mySQL. addslashes() will add backslashes to make them become escape characters.

//insert a song into database
$query = "INSERT INTO songs VALUES ('$sId', '$sName', '$aId', '$sLyrics')";

if (mysqli_query($conn, $query)) {
    echo "New song has been successfully registered";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>