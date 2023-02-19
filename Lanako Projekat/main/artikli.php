
<?php

    include "head.php";


?>
   

   <?php

    include "header.php";


?>

<?php

    include "navi.php";


?>

   


    <main>
        <button><a href=""></a></button>
 <?php 
         include "../conn.php";

         if (!$db) {
             echo "No conn" . mysqli_error($db);
         } else {
             $query_artikli = "SELECT * FROM `artikal`";
             $result_artikli = mysqli_query($db , $query_artikli);

             if (mysqli_num_rows($result_artikli) > 0) {
                
                 while ($row = mysqli_fetch_assoc($result_artikli)) {
                        $id = $row['ArtikalId'];
                    ?>
    <div class="main-container">
     <img class="image" src="../admin/images/<?php echo $row['slika']; ?>" alt="Product Image">
        <div class="info">
            <p>Naziv: <?php echo $row['Naziv']; ?></p>
            <p>Sifra:<?php echo $row['Sifra']; ?> </p>
            <p>Bar_Kod:<?php echo $row['Barkod']; ?> </p>
            <p>Jedinica Mjere: <?php echo $row['JedinicaMjere']; ?></p>
            <p>Cijena: <?php echo $row['Cijena'] . "KM"; ?></p>
        </div>
    </div>
<?php 

        }
    }
}



?>

    </main>

    <?php

include "footer.php";


?>


<?php 
    mysqli_close($db);
?>