
<?php

    include "head.php";


?>
   

   <?php

    include "header.php";


?>


<main>
    
    <form class = "ddj" action="dodaj-lager-request.php" method="post">
        <select class = "select" id="ArtikalId" name="ArtikalId">
    <?php
        include "../conn.php";
        $query_artikli = "SELECT ArtikalId, Naziv FROM `artikal`";
        $result_artikli = mysqli_query($db , $query_artikli);

        if (mysqli_num_rows($result_artikli) > 0) {
            while ($row = mysqli_fetch_assoc($result_artikli)) {
                $id = $row['ArtikalId'];
                $naziv = $row['Naziv'];
                echo "<option value=\"$id\">$id - $naziv</option>";
            }
        }
    ?>
</select><br><br>
        <input type="text" id="RaspolozivaKolicina" name="RaspolozivaKolicina"  placeholder = "RaspolozivaKolicina"><br><br>
        <input type="text" id="Lokacija" name="Lokacija" placeholder = "Lokacija"><br><br>
        <input type="submit" name = "dodaj" value="Dodaj">
    </form>
</main>


    <?php

include "footer.php";
mysqli_close($db);

?>
