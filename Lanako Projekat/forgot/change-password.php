<?php 

session_start();


include "../conn.php";

if(!$db) {
    echo "no conn" . mysqli_error($db);
} else {

if(isset($_POST['reset'])) {
    $id =  $_SESSION['korisnikid'];
    $newpass = $_POST['newpass'];
    $newpass = mysqli_real_escape_string($db , trim(strip_tags(htmlspecialchars($newpass))));


    $newpass = password_hash($newpass , PASSWORD_DEFAULT);
    $check_newpass_query = "UPDATE `korisnik` SET `Sifra` = '$newpass' WHERE `KorisnikId` = '$id'";
    $result_check_newpass_query = mysqli_query($db , $check_newpass_query);

    if($result_check_newpass_query){
        $_SESSION = array();


        session_destroy();
        
        header("location:../index.php");
        
} else {
    echo "something went wrong" . mysqli_error($db);
}


}}mysqli_close($db);




?>