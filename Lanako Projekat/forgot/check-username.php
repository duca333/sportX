<?php 

session_start();


include "../conn.php";

if(!$db) {
    echo "no conn" . mysqli_error($db);
} else {

if(isset($_POST['reset'])) {

    $username = $_POST['username'];
    $username = mysqli_real_escape_string($db , trim(strip_tags(htmlspecialchars($username))));

    $check_username_query = "SELECT * FROM `korisnik` WHERE `KorisnickoIme` = '$username'";
    $result_check_username_query = mysqli_query($db , $check_username_query);

    if(mysqli_num_rows($result_check_username_query) > 0){
        $row = mysqli_fetch_assoc($result_check_username_query);

        $_SESSION['korisnikid'] = $row['KorisnikId'];
        header("Location:forgot-password.php");
} else {
    header("Location:name-none.php");
}


} else {
    echo mysqli_error($db);
}}mysqli_close($db);




?>