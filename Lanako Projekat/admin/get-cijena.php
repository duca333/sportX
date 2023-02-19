<?php
include "../conn.php";

if (isset($_GET['artiklId'])) {
    $artiklId = $_GET['artiklId'];
    $query = "SELECT cijena FROM `artikal` WHERE `ArtikalId` = '$artiklId'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['cijena'];
    }
}

mysqli_close($db);
?>