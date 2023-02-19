<?php

    include "../conn.php";


if (!$db) {
    echo "no conn" . mysqli_error($db);
} else 

    if(isset($_POST['dodaj'])) {

    $ArtikalId = mysqli_real_escape_string($db, trim($_POST['ArtikalId']));
    $RaspolozivaKolicina = mysqli_real_escape_string($db, trim($_POST['RaspolozivaKolicina']));
    $Lokacija = mysqli_real_escape_string($db, trim($_POST['Lokacija']));


    $ArtikalId = strip_tags($ArtikalId);
    $RaspolozivaKolicina = strip_tags($RaspolozivaKolicina);
    $Lokacija = strip_tags($Lokacija);


    $query = "INSERT INTO `lager` (`ArtikalId`, `RaspolozivaKolicina`, `Lokacija`)
            VALUES ('$ArtikalId', '$RaspolozivaKolicina', '$Lokacija')";
    $result = mysqli_query($db, $query);
    if ($result)Header("Location:lager.php"); else {
        echo "Something went wrong:" . mysqli_error($db);
    }

    mysqli_close($db);mysqli_close($db);
}
?>





