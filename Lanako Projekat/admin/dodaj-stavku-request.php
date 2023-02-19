<?php
session_start();

include "../conn.php";

if(!$db) {
    echo "No conn" . mysqli_error($db);
} else {
    
    
    if(isset($_POST['potvrdi'])) {
        $korisnikId = $_SESSION['korisnik_id'];
        $table_name = "table_" . $korisnikId;

        
       
        $sql = "CREATE TABLE $table_name (
            `ArtikalId` int(11)	,
            `Kolicina` INT NOT NULL,
            `Cijena` INT NOT NULL,
            FOREIGN KEY (`ArtikalId`) REFERENCES `artikal` (`ArtikalId`)
          )";
                $result = mysqli_query($db, $sql);
        
        if ($result) {
            
        $artikl = $_POST['artikl'];
        $kolicina = $_POST['kolicina'];
        $cijena = $_POST['cijena'];

        $artikl = mysqli_real_escape_string($db , strip_tags(htmlspecialchars(trim($artikl))));
        $kolicina = mysqli_real_escape_string($db , strip_tags(htmlspecialchars(trim($kolicina))));
        $cijena = mysqli_real_escape_string($db , strip_tags(htmlspecialchars(trim($cijena))));


         $insert_query  = "INSERT INTO `$table_name`(`ArtikalId`, `Kolicina`, `Cijena`) VALUES ('$artikl','$kolicina','$cijena')";
         $result_insert_query = mysqli_query($db , $insert_query);
         if ($result_insert_query) {
             header('Location: racun-stavke.php'); 
             exit;
         } else {
             echo "Something went wrong" . mysqli_error($db);
         }
    } else {
        header("Location:racun-stavke.php");
    }}
}mysqli_close($db);


?>