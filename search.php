<?php
function getSearch()
{
    include 'conn.php'; // connecting to database
    if (isset($_GET["query"]))
    {
        $q = $_GET["query"]; //
        $query = "SELECT artists.name, songs.song_name, songs.lyrics FROM artists INNER JOIN songs ON artists.id = songs.artist_id WHERE songs.lyrics = '$q' OR songs.song_name = '$q'";
        $result = mysqli_query($conn, $query);
        echo $query;

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['song_name']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['lyrics']."</td>";
            echo "</tr>";
        }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    }
}
include 'searchform.php'; // search form
?>
<table>
    <tr>
        <th>Song Title</th>
        <th>Artist</th>
        <th>Lyrics</th>
    </tr>
    <?php getSearch(); ?>
</table>