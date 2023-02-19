<?php

    include "head.php";


?>
   

   <?php

    include "header.php";


?>


    <main class = "container">

    <?php 
        include "../conn.php";
        
                if (!$db) {
                    echo "No conn" . mysqli_error($db);
                } else {

                    if(isset($_POST['glass'])) {
                        $ime = $_POST['ime'];
                        $ime = trim(htmlspecialchars($ime));
                        $ime = mysqli_real_escape_string($db , $ime);
                        $ime = strip_tags($ime);

                        
                        $query = "SELECT * FROM `artikal` WHERE `Naziv` LIKE '%$ime%' LIMIT 5";
                        $result = mysqli_query($db, $query);
                      
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                    ?>
   <div class="product-container">
                        <a href="prikaz-artikla.php?id=<?php echo $row['ArtikalId']; ?>">
                            <img class="product-image" src="../admin/images/<?php echo $row['slika']; ?>" alt="Product Image">
                        </a>
                        <div class="product-info">
                            <p class="product-name">Naziv:<?php echo $row['Naziv']; ?></p>
                            <p class="product-price">Cijena: <?php echo $row['cijena'] . "KM"; ?></p>
                        </div>
                    </div>
<?php 

        } 
    } else {
        header("Location:no-such-artikl.php");
    }
}}



?>

    </main>

    <?php

include "footer.php";mysqli_close($db);


?>









