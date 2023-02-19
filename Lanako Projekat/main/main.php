<?php

    include "head.php";

?>

<?php

    include "header.php";

?>


 <div class="overlay-container">
  <div class="img-1">
  <div class="overlay-text">
    <h1 style = "font-size:80px;margin-top:3%;color:white;"><b>NOVA KOLEKCIJA</b></h1>
  </div>
  </div>
</div> 
<main class = "container"> 

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
                            <img class="product-image" src="../admin/images/<?php echo $row['slika']; ?>" alt="Product Image">
                        </a>
                        <div class="product-info">
                            <p class="product-name">Naziv:<?php echo $row['Naziv']; ?></p>
                            <p class="product-price">Cijena: <?php echo $row['cijena'] . "KM"; ?></p>
                        </div>
                    </div>

<?php 
            }
        }
        
    }

?>

</main>

<div class="kontaktirajte-nas">
        <div class="razmak"></div>
        <h1 id="kontakt" class="naslov-kontaktirajte-nas">KONTAKTIRAJTE NAS!</h1>
        <div class="podvuceno"></div>
<div class="icons-gap">
        <div class="forma">
        <form id="usform">
                <input class="ime"  placeholder="VAŠE IME*" type="text" id="fname"><br>
                <input class="ime"  placeholder="VAŠ MAIL*" type="email" id="mail"><br>
                <textarea name="comment" form="usform"></textarea><br>
                <a href="#"><input class="dugmence" type="submit" value="POSALJI!"></a>
            </form>
            
            
            <div class="ikonice-kontaktirajte-nas">
                <div class="info1">
                    <i class="fa-sharp fa-solid fa-location-dot text-danger5"></i><span class="adress-info">
                        <h4>ADRESA</h4>
                        Cara Urosa 35 , BN<br>
                        BL Prvo Krajiskog , BL <br>
                    </span>

                </div>
                <div class="info1">
                    <i class="fa-regular fa-envelope text-danger6"></i><span class="mail-info">
                        <h4>EMAIL</h4>
                        incongnito@gmail.com<br>
                        office@bcreative.com<br>
                    </span>


                </div>
                <div class="info1">
                    <i class="fa-sharp fa-solid fa-phone text-danger7"></i><span class="tel-info">
                        <h4>TELEFON</h4>
                        +387 611 112 22<br>
                        +387 32 222 333
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
  <div class="footer-content">
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
    <p>&copy; 2023 SportX. All rights reserved.</p>
  </div>
</footer>




  
<?php

include "footer.php";

   


mysqli_close($db);
?>