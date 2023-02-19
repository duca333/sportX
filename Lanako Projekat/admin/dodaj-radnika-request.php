<?php

include "../conn.php";

if (!$db) {
    echo "no conn" . mysqli_error($db);
} else {
if(isset($_POST['dodaj'])) {
    $ime = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['ime'])));
    $prezime = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['prezime'])));
    $brojTelefona = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['brojTelefona'])));
    $Adresa = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['Adresa'])));
    $Grad = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['Grad'])));
    $Email = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['Email'])));
    $JMBG = mysqli_real_escape_string($db, trim(htmlspecialchars($_POST['JMBG'])));
  
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      Header("Location:invalid-email.php");
    } else {
      $query = "INSERT INTO `radnik` (`ime`, `prezime`, `brojTelefona`, `Adresa`, `Grad`, `Email`, `JMBG`)
                VALUES ('$ime', '$prezime', '$brojTelefona', '$Adresa', '$Grad', '$Email', '$JMBG')";
      if (mysqli_query($db, $query)) {
        Header("Location:radnik.php");
      } else {
        echo "Something went wrong: " . mysqli_error($db);
      }
    }
  }
}mysqli_close($db);
  ?>





