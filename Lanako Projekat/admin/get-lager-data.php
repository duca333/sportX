<?php

include "../conn.php";

if (!$db) {
    die ("No conn" . mysqli_error($db));
} else {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $display_current_info_query = "SELECT * FROM `lager` WHERE `LagerId` = '$id'";
        $display_result = mysqli_query($db, $display_current_info_query);

        if (mysqli_num_rows($display_result) > 0) {
            $row = mysqli_fetch_assoc($display_result);
            echo json_encode($row);
        }
    }
}

mysqli_close($db);