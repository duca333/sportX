<?php 

    include "../conn.php";

    if(!$db) {
        echo "No conn" . mysqli_error();
    } else {
        if(isset($_POST['dodaj'])){
        $sifra = $_POST['sifra'];
        $naziv = $_POST['naziv'];
        $image = $_FILES['slika']['name'];
        $temp_image = $_FILES['slika']['tmp_name'];
        $barKod = $_POST['barKod'];
        $plu_kod = $_POST['plu_kod'];
        $plu_kod = $_POST['cijena'];
        $opis = $_POST['opis'];

        $sifra = trim(htmlspecialchars(strip_tags($_POST['sifra'])));
        $naziv = trim(htmlspecialchars(strip_tags($_POST['naziv'])));
        $jedinica = trim(htmlspecialchars(strip_tags($_POST['velicina'])));
        $barKod = trim(htmlspecialchars(strip_tags($_POST['barKod'])));
        $plu_kod = trim(htmlspecialchars(strip_tags($_POST['plu_kod'])));
        $cijena = trim(htmlspecialchars(strip_tags($_POST['cijena'])));
        $opis = trim(htmlspecialchars(strip_tags($_POST['opis'])));
        

        $sifra = mysqli_real_escape_string($db, $sifra);
        $naziv = mysqli_real_escape_string($db, $naziv);
        $jedinica = mysqli_real_escape_string($db, $jedinica);
        $barKod = mysqli_real_escape_string($db, $barKod);
        $plu_kod = mysqli_real_escape_string($db, $plu_kod);
        $cijena = mysqli_real_escape_string($db, $cijena);
        $opis = mysqli_real_escape_string($db, $opis);

        
        $insert_query = "INSERT INTO `artikal`(`Sifra`, `Naziv`, `slika`, `opis` , `Cijena` , `Barkod`, `PLU_KOD`)
        VALUES ('$sifra', '$naziv', '$image', '$opis' ,'$cijena' , '$barKod', '$plu_kod')";
        $result = mysqli_query($db, $insert_query);
        if ($result) {
        move_uploaded_file($temp_image, "images/$image");
        header("Location:artikli.php");}

    }}mysqli_close($db);






?>