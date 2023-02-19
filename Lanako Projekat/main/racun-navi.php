<?php

  session_start();

  $id = $_SESSION['korisnik_id'];


?>

<nav>
        <div class="nav-container">
          <ul>
            <li><button class = "add-btn"><a class = "add-a" <?php echo "<a href='dodaj-stavku.php?korisnikid=$id'"?>>Dodaj</a></button></li>
            <li><a href="artikli.php">ARTIKLI</a></li>
            <li><a href="lager.php">LAGER</a></li>
            <li><a href="racun.php">RACUN</a></li>
          </ul>
        </div>
  </nav>