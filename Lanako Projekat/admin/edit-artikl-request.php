<?php 

    include "../conn.php";

    if(!$db) {
        echo "No conn" . mysqli_error();
    } else {
        if(isset($_POST['edit'])){
        $editid = $_POST['id'];
        $sifra = $_POST['sifra'];
        $naziv = $_POST['naziv'];
        $image = $_FILES['slika']['name'];
        $temp_image = $_FILES['slika']['tmp_name'];
        $velicina = $_POST['velicina'];
        $cijena = $_POST['cijena'];
        $opis = $_POST['opis'];
        $barKod = $_POST['barKod'];
        $plu_kod = $_POST['plu_kod'];

        $sifra = trim(htmlspecialchars(strip_tags($_POST['sifra'])));
        $naziv = trim(htmlspecialchars(strip_tags($_POST['naziv'])));
        $jedinica = trim(htmlspecialchars(strip_tags($_POST['jedinicaMjere'])));
        $barKod = trim(htmlspecialchars(strip_tags($_POST['barKod'])));
        $plu_kod = trim(htmlspecialchars(strip_tags($_POST['plu_kod'])));
        $cijena = mysqli_real_escape_string($db,trim(htmlspecialchars(strip_tags($_POST['cijena']))));
        $opis =   mysqli_real_escape_string($db,trim(htmlspecialchars(strip_tags($_POST['opis']))));
        $velicina =  mysqli_real_escape_string($db,trim(htmlspecialchars(strip_tags($_POST['velicina']))));





        $sifra = mysqli_real_escape_string($db, $sifra);
        $naziv = mysqli_real_escape_string($db, $naziv);
        $jedinica = mysqli_real_escape_string($db, $jedinica);
        $barKod = mysqli_real_escape_string($db, $barKod);
        $plu_kod = mysqli_real_escape_string($db, $plu_kod);

        
            $select_image_query = "SELECT `slika` FROM `artikal` WHERE `ArtikalId` = '$editid'";
            $select_image_result = mysqli_query($db, $select_image_query);
            $row = mysqli_fetch_assoc($select_image_result);
            $old_image = $row['slika'];
        
            if (!empty($_FILES['slika']['name'])) {
                $image = $_FILES['slika']['name'];
                $temp_image = $_FILES['slika']['tmp_name'];
                move_uploaded_file($temp_image, "images/$image");
            } else {
                $image = $old_image;
            }

        $update_query = "UPDATE `artikal` SET `Sifra`='$sifra', `Naziv`='$naziv', `slika`='$image', `opis`='$opis',`Cijena`='$cijena',`velicina`='$velicina', `Barkod`='$barKod', `PLU_KOD`='$plu_kod' WHERE $editid=`ArtikalId`";
        $result_query = mysqli_query($db , $update_query);
        if ($result_query)
        header("Location:artikli.php"); else {
            echo mysqli_error($db);
        };



    }}






?>