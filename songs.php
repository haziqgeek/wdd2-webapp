<?php
function songsList() {
    include 'conn.php'; // connecting to database
    $query = "SELECT name, id FROM artists"; // display artist name and ID
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<option value=".$row['id'].">".$row['name']."</option>";
        }
        } else {
            echo "<option>0 results</option>";
        }
        

        mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Web App</title>
</head>
<body>
    <form name="songs" method="POST" action="processSongs.php">
        <label for="sName">Song Name: </label>
        <input type="text" name="sName" />
        <label for="aName">Artist Name: </label>
        <select name="aName">
            <?php songsList(); ?>
        </select>
        <label for="sLyrics">Song Lyrics: </label>
        <textarea wrap="hard" name="sLyrics"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>