<?php
session_start();


include "conn.php";

if (!$db) {
    echo "No conn";
} else {
    if (isset($_POST['login'])){
    $username_or_email = $_POST['email-or-username'];
    $sifra = $_POST['password'];

    $username_or_email = trim(htmlspecialchars($username_or_email));
    $username_or_email = mysqli_real_escape_string($db , $username_or_email);
    $username_or_email = strip_tags($username_or_email);

    $sifra = trim(htmlspecialchars($sifra));
    $sifra = mysqli_real_escape_string($db , $sifra);
    $sifra = strip_tags($sifra);

    if (filter_var($username_or_email, FILTER_VALIDATE_EMAIL)) {
        $email_query = "SELECT * FROM `korisnik` WHERE `email`='$username_or_email'";
        $email_result = mysqli_query($db , $email_query);
        if(mysqli_num_rows($email_result) > 0) {
            $row  = mysqli_fetch_assoc($email_result);
                if (password_verify($sifra , $row['Sifra'])) {
                    $role_id = $row['RolaId'];
                    if ($role_id == 1) {
                        $_SESSION['korisnik_id'] = $row['KorisnikId'];
                        $_SESSION['KorisnickoIme'] = $row['KorisnickoIme'];
                        header("Location:./admin/main.php");
                    } else if ($role_id == 3) {
                        $_SESSION['korisnik_id'] = $row['KorisnikId'];
                        $_SESSION['KorisnickoIme'] = $row['KorisnickoIme'];
                        header("Location:./main/main.php");
                    } else if ($role_id == 4) {
                        $_SESSION['korisnik_id'] = $row['KorisnikId'];
                        $_SESSION['KorisnickoIme'] = $row['KorisnickoIme'];
                        header("Location:./radnik/main.php");
                    }
                } else {
                    header("Location:./netacno/netacna-sifra.php");
                }
        } else {
            header("Location:./netacno/netacno-ime.php");
        }
    } else {
        $username_query = "SELECT * FROM `korisnik` WHERE `KorisnickoIme`='$username_or_email'";
        $username_result = mysqli_query($db , $username_query);
        if(mysqli_num_rows($username_result) > 0) {
            $row  = mysqli_fetch_assoc($username_result);
                if (password_verify($sifra , $row['Sifra'])) {
                        $role_id = $row['RolaId'];
                        if ($role_id == 1) {
                            $_SESSION['korisnik_id'] = $row['KorisnikId'];
                            $_SESSION['KorisnickoIme'] = $row['KorisnickoIme'];
                            header("Location:./admin/main.php");
                        } else if ($role_id == 3) {
                            $_SESSION['korisnik_id'] = $row['KorisnikId'];
                            $_SESSION['KorisnickoIme'] = $row['KorisnickoIme'];
                            header("Location:./radnik/main.php");
                        } else if ($role_id == 4) {
                            $_SESSION['korisnik_id'] = $row['KorisnikId'];
                            $_SESSION['KorisnickoIme'] = $row['KorisnickoIme'];
                            header("Location:./main/main.php");
                        }
                    
                } else {
                    header("Location:./netacno/netacna-sifra.php");
                }
        } else {
            header("Location:./netacno/netacno-ime.php");
        }
    }
}
}mysqli_close($db);

?>
