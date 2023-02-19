<?php

include "../conn.php";

if (!$db) {
    echo "no conn" . mysqli_error($db);
} else {
if(isset($_POST['id'])) {
    $editid = $_POST['id'];
    $ime = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['ime'])));
    $prezime = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['prezime'])));
    $brojTelefona = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['brojTelefona'])));
    $Adresa = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['Adresa'])));
    $Grad = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['Grad'])));
    $Email = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['Email'])));
    $JMBG = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['JMBG'])));
  
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        echo "invalid email";
    } else {
        $update_query = "UPDATE `Radnik` SET `Ime`='$ime', `prezime`='$prezime', `brojTelefona`='$brojTelefona', `Adresa`='$Adresa', `Grad`='$Grad', `Email`='$Email', `JMBG`='$JMBG' WHERE $editid=`RadnikId`";
        $result_query = mysqli_query($db , $update_query);
        if($result_query)Header("Location:radnik.php");
    }
  }
}mysqli_close($db);
  ?>





