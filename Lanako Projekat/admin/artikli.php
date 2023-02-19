
<?php

    include "head.php";


?>
   

   <?php

    include "header.php";


?>



   


    <main class = "container">
        <div class="table-container">
            <button class = "dodaj-nesto-a"><a href="dodaj-artikl.php">DODAJ</a></button>
        
            
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
    <div class="product-container">
                        <a href="prikaz-artikla.php?id=<?php echo $row['ArtikalId']; ?>">
                            <img class="product-image" src="images/<?php echo $row['slika']; ?>" alt="Product Image">
                        </a>
                        <div class="product-info">
                            <p class="product-name">Naziv:<?php echo $row['Naziv']; ?></p>
                            <p class="product-code">Kod: <?php echo $row['Sifra']; ?></p>
                            <p class="product-barcode">Barkod: <?php echo $row['Barkod']; ?></p>
                            <p class="product-price">Cijena: <?php echo $row['cijena'] . "KM"; ?></p>
                            <button class="del"><a href='edit-artikl.php?edit-id=<?php echo $id;?>'>Edit</a></button>
                        </div>
                    </div>
        
    </div>
<?php 

        }
    }
}
?>
    </div>
    </main>

<?php

include "footer.php";


?>


