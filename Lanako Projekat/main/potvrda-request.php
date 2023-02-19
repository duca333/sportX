<?php
session_start();

include "../conn.php";

if(!$db) {
    echo "No conn" . mysqli_error($db);
} else {
    
    
    $korisnikId = $_SESSION['korisnik_id'];
    $table_name = "table_" . $korisnikId;
        
    $get_items_query = "SELECT * FROM `$table_name`";
    $get_items_query_result = mysqli_query($db , $get_items_query);
    
    if ($get_items_query_result) {
        $radnik_izdao_query = "SELECT * FROM `radnik` WHERE `RadnikId` = 5";
        $radnik_izdao_query_result = mysqli_query($db , $radnik_izdao_query);
        if ($radnik_izdao_query_result) {
            $radnik_row = mysqli_fetch_assoc($radnik_izdao_query_result);
            $radnik_izdao = $radnik_row['RadnikId'];
            $current_timestamp = time(); 
            $datum_racuna = date('Y-m-d H:i:s', $current_timestamp);
            $broj_racuna = rand(111111,999999);
            $iznosbezpdv = 0;
            while ($item_row = mysqli_fetch_assoc($get_items_query_result)) {
                $iznosbezpdv += $item_row['Cijena'];
            }
            $iznospdv = $iznosbezpdv * 0.17;
            $iznospdv = round($iznospdv , 0);
            $ukupniIznos = $iznosbezpdv + $iznospdv;  
                
                $insert_query_racun = "INSERT INTO `racun`(`RacunIzdao`, `KorisnikId`, `DatumRacuna`, `BrojRacuna`, `UkupniIznos`, `IznosPDV`, `IznosBezPDV`) 
                                                            VALUES 
                                                        ('$radnik_izdao','$korisnikId','$datum_racuna','$broj_racuna','$ukupniIznos','$iznospdv','$iznosbezpdv')";
                $result_insert_query_racun = mysqli_query($db , $insert_query_racun);

                if ($result_insert_query_racun) {
                    
                    $racunId = mysqli_insert_id($db);
                    
                    $get_items_query_again = "SELECT * FROM `$table_name`";
                    $get_items_query_again_result = mysqli_query($db , $get_items_query_again);
                    if($get_items_query_again_result){
                        while($item_row_again = mysqli_fetch_assoc($get_items_query_again_result)){
                    $artikl = $item_row_again['ArtikalId'];
                    $kolicina = $item_row_again['Kolicina'];
                    $cijena = $item_row_again['Cijena'];

                    $insert_query_stavka  = "INSERT INTO `racunstavka`(`RacunId`, `ArtikalId`, `Kolicina`, `Cijena`) VALUES ('$racunId','$artikl','$kolicina','$cijena')";
                    $result_insert_query_stavka = mysqli_query($db , $insert_query_stavka);}
                    if ($result_insert_query_stavka) {
                        $check_table_query = "SELECT COUNT(*) FROM information_schema.tables WHERE table_name = '$table_name'";
                        $check_table_result = mysqli_query($db, $check_table_query);
                        $table_exists = mysqli_fetch_row($check_table_result)[0];

                        if ($table_exists) {
                            $drop_table_query = "DROP TABLE $table_name";
                            $drop_table_result = mysqli_query($db, $drop_table_query);

                            if ($drop_table_result) {
                                header("Location:racun.php");
                            } else {
                                echo "Error dropping table '$table_name': " . mysqli_error($db);
                            }
                        }
                    } else {
                        echo "Error executing query: " . mysqli_error($db);
                    }
} else {
    echo "Error executing query: " . mysqli_error($db);
}
                } else {
                    echo "Error executing query: " . mysqli_error($db);
        }}
        }
    }mysqli_close($db);
