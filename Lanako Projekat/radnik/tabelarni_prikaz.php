<?php
    include "head.php";
?>

<?php
    include "header.php";
?>



<main>
    <?php 
        include "../conn.php";
    ?>

    <div class="table-container-trenutni">
        <button class="dodaj-nesto-prikaz"><a href="racun.php">Nazad</a></button>
        <h1 style = "color:black;margin: auto; text-align:center;margin-bottom:7%;margin-top:3%;">VAŠ RAČUN:</h1>
        <div class="trenutni_racun_naslov">
        <?php if (!$db) {
                        echo "No conn" . mysqli_error($db);
                    } else {
                        if (isset($_GET['racunid'])) {
                            $id = $_GET['racunid'];
                            $query_racun_header = "SELECT
                            racunstavka.StavkaId,
                            racun.RacunId,
                            artikal.ArtikalId,
                            artikal.Naziv,
                            racun.UkupniIznos,
                            radnik.RadnikId,
                            radnik.Ime,
                            racun.RacunIzdao,
                            racun.DatumRacuna,
                            racun.BrojRacuna,
                            racun.IznosPDV,
                            racun.IznosBezPDV,
                            racunstavka.Kolicina,
                            racunstavka.Cijena
                        FROM
                            racunstavka
                        JOIN racun ON racunstavka.RacunId = racun.RacunId
                        JOIN artikal ON racunstavka.ArtikalId = artikal.ArtikalId
                        JOIN radnik ON racun.RacunIzdao = radnik.RadnikId
                                WHERE racun.RacunId = '$id'";   
                            $result_racun_header = mysqli_query($db, $query_racun_header);

                            if (mysqli_num_rows($result_racun_header) > 0) {
                                $row1 = mysqli_fetch_assoc($result_racun_header);
                        
                                    $radnik = $row1['Ime'];
                                    $datum = $row1['DatumRacuna'];
                                    $broj = $row1['BrojRacuna'];
                                    $ukupno = $row1['UkupniIznos'];
                                    
                ?>
                                    <h2>Broj Računa: <?php echo $broj; ?></h2>
                                    <h3>Datum: <?php echo $datum; ?></h3>
                                    <h3>Izdao: <?php echo $radnik; ?></h3>
                                    
                <?php 
                                
                            }
                        }
                    }
                ?>
                
            </div>
            <div class="table-wrapper">
        <table class="trenutni_racun_tabela" id="tabela">
                <thead>
                    <tr>
                        <th>Naziv Artikla</th>
                        <th>Kolicina</th>
                        <th>Cijena</th>
                        
                        
                    </tr>
                </thead>
            <tbody>
            <?php
                    if (!$db) {
                        echo "No conn" . mysqli_error($db);
                    } else {
                        if (isset($_GET['racunid'])) {
                            $id = $_GET['racunid'];
                            $query_racun = "SELECT
                            racunstavka.StavkaId,
                            racun.RacunId,
                            artikal.ArtikalId,
                            artikal.Naziv,
                            racun.UkupniIznos,
                            radnik.RadnikId,
                            radnik.Ime,
                            racun.RacunIzdao,
                            racun.DatumRacuna,
                            racun.BrojRacuna,
                            racun.IznosPDV,
                            racun.IznosBezPDV,
                            racunstavka.Kolicina,
                            racunstavka.Cijena
                        FROM
                            racunstavka
                        JOIN racun ON racunstavka.RacunId = racun.RacunId
                        JOIN artikal ON racunstavka.ArtikalId = artikal.ArtikalId
                        JOIN radnik ON racun.RacunIzdao = radnik.RadnikId
                                WHERE racun.RacunId = '$id'";   
                            $result_racun = mysqli_query($db, $query_racun);

                            if (mysqli_num_rows($result_racun) > 0) {
                                while ($row = mysqli_fetch_assoc($result_racun)) {
                                    $stavke = $row['Naziv'];
                                   
                                    $kolicina = $row['Kolicina'];
                                    
                                    
                                    $cijena = $row['Cijena'];
                                    $pdv = $row['IznosPDV'];
                                    $bez = $row['IznosBezPDV'];
                ?>
                                    <tr>
                                        <td><?php echo $stavke ?></td>
                                        <td><?php echo $kolicina ?></td>
                                        <td><?php echo $cijena ?></td>
                                        
                                        
                                    </tr>
                <?php 
                                }
                            }
                        }
                    }
                ?>
                
            </tbody>
        </table>
        </div>
        <h3>PDV: <?php echo $pdv; ?> KM</h3>
        <h3>Cijena bez PDV-a: <?php echo $bez; ?> KM</h3>
        <h3>Ukupna cijena: <?php echo $ukupno; ?> KM</h3>
    </div>
</main>

<?php
    include "footer.php";
    mysqli_close($db);
?>