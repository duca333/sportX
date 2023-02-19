<?php 

session_start();


include "../conn.php";

if(!$db) {
    echo "no conn" . mysqli_error($db);
} else {

if(isset($_POST['reset'])) {

    $id = $_SESSION['korisnikid'];
    $sq = $_POST['sq'];
    $sa = $_POST['sa'];
    $sq = mysqli_real_escape_string($db , trim(strip_tags(htmlspecialchars($sq))));
    $sa = mysqli_real_escape_string($db , trim(strip_tags(htmlspecialchars($sa))));

    $check_question_query = "SELECT `KorisnikId`, `SecretQ`, `SecretA` FROM `korisnik` WHERE `KorisnikId` = '$id' AND `SecretQ` = '$sq' AND  `SecretA` = '$sa'";
    $result_check_question_query = mysqli_query($db , $check_question_query);

    if($result_check_question_query){
        
        header("Location:change-request.php");
} else {
    header("Location:netacan-odgovor.php");
} 


} else {
    echo "Something went wrong" . mysqli_error($db);
}


} mysqli_close($db);




?>