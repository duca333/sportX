<?php

include "../conn.php";


if(!$db) {
    echo "no conn" . mysqli_error();
} else {
    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $artikal_id = $_POST['artikal_id'];
        $lokacija = $_POST['Lokacija'];
        $kolicina = $_POST['kolicina'];

        $id = mysqli_real_escape_string($db , strip_tags(trim(htmlspecialchars($id))));
        $artikal_id = mysqli_real_escape_string($db , strip_tags(trim(htmlspecialchars($artikal_id))));
        $lokacija = mysqli_real_escape_string($db , strip_tags(trim(htmlspecialchars($lokacija))));
        $kolicina = mysqli_real_escape_string($db , strip_tags(trim(htmlspecialchars($kolicina))));

        $update_query = "UPDATE `lager` SET `ArtikalId` = '$artikal_id', `Lokacija` = '$lokacija' , `RaspolozivaKolicina` = '$kolicina' WHERE `LagerId` = '$id'";
        $update_result = mysqli_query($db, $update_query);
        
        if($update_result){
          header('Location:lager.php');
        } else {
           echo "something went wrong" . mysqli_error($db);
        }
      }
}


mysqli_close($db);


?>