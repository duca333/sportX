<?php
include "head.php";
?>

<?php
include "header.php";
?>


<main class="container-prikaz">

    <?php
    include "../conn.php";

    if (!$db) {
        echo "no conn" . mysqli_error($db);
    } else {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM `artikal` WHERE `ArtikalId` = '$id'";
            $result = mysqli_query($db, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
    ?>

                    <div class="product-container">
                        
                            <img class="product-image" src="../admin/images/<?php echo $row['slika']; ?>" alt="product Image">
                        
                        <div class="product-info">
                            <p class="product-name"><?php echo $row['Naziv']; ?></p>
                            <p class="product-code">Kod: <?php echo $row['Sifra']; ?></p>
                            <p class="product-barcode">Bar Kod: <?php echo $row['Barkod']; ?></p>
                            <p class="product-price">Cijena: <?php echo $row['cijena'] . "KM"; ?></p>
                        </div>
                    </div>
                    <p  class="product-opis"><b style = "font-size:31px;letter-spacing:1px;">OPIS</b>: <br> <br><b style = "font-size:20px;letter-spacing:1px;"><?php echo $row['opis']; ?></b></p>
                    
    <?php 
                }
            }
        }
    }
    mysqli_close($db);
    ?>

</main>

<?php
include "footer.php";
?>