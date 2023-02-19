<?php


include "conn.php";

if (!$db) {
    echo "No conn";
} else {
    if (isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $sifra = $_POST['password'];
    $sq = $_POST['sq'];
    $sanswer = $_POST['sanswer'];

    
    $username = trim(htmlspecialchars($username));
    $email = trim(htmlspecialchars($email));
    $sifra = trim(htmlspecialchars($sifra));

    $username = mysqli_real_escape_string($db , $username);
    $email = mysqli_real_escape_string($db , $email);
    $sifra = mysqli_real_escape_string($db , $sifra);

    $username = strip_tags($username);
    $email = strip_tags($email);
    $sifra = strip_tags($sifra);

    $sq = mysqli_real_escape_string($db , trim(strip_tags(htmlspecialchars($sq))));
    $sanswer = mysqli_real_escape_string($db , trim(strip_tags(htmlspecialchars($sanswer))));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:./netacno/invalid-email.php");
    } else {
        $exist_query = "SELECT * FROM `korisnik` WHERE '$username' = `KorisnickoIme` OR '$email' = `email`";
        $exist_result = mysqli_query($db , $exist_query);

        if (mysqli_num_rows($exist_result) > 0) {
            header("Location:./netacno/username-taken.php");
        } else {
       $sifra = password_hash($sifra , PASSWORD_DEFAULT);

        $query = "INSERT INTO `korisnik`(`KorisnickoIme`, `email`, `Sifra`, `SecretQ`, `SecretA`) VALUES
                                ('$username','$email','$sifra','$sq','$sanswer')";
        $result = mysqli_query($db , $query);
        if($result){
        session_start();
        $_SESSION['korisnik_id'] = $row['KorisnikId'];
        $_SESSION['KorisnickoIme'] = $row['KorisnickoIme'];
        header("Location:./main/main.php");
        } else {
            echo mysqli_error($db);
        }
    }
}
}
}mysqli_close($db);
?>

