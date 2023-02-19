

<?php

    include "head.php";


?>
   

   <?php

    include "header.php";


?>


<?php


include "../conn.php";

if (!$db) {
    die ("No conn" . mysqli_error($db));
} else {
    if(isset($_GET['edit-id'])) {
        $edit_id = $_GET['edit-id'];
        $display_current_info_query = "SELECT * FROM `artikal` WHERE `ArtikalId` = '$edit_id'";
        $display_result = mysqli_query($db , $display_current_info_query);

        if (mysqli_num_rows($display_result) > 0) {
            while($row = mysqli_fetch_assoc($display_result)) {
                ?>
            

            <form class= "ddj" action="edit-artikl-request.php" method="post" enctype="multipart/form-data">
                <div>
                    <input type="hidden" name="id" value = "<?php echo $row['ArtikalId'] ?>">
                </div>
                <div>
                    <input type="text" name="sifra" value = "<?php echo $row['Sifra'] ?>">
                </div>
                <div>
                    <input type="text" name="naziv" value = "<?php echo $row['Naziv'] ?>">
                </div>
                <div>
                    <input type="file" name="slika" value = "<?php echo $row['slika'] ?>">
                </div>
                <div>
                    <textarea name="opis" id="" cols="30" rows="10"><?php echo $row['opis'] ?>"</textarea>
                </div>
                <div>
                    <input type="text" name="cijena" value = "<?php echo $row['cijena'] ?>">
                </div>
                <div>
                    <input type="text" name="velicina" value = "<?php echo $row['velicina'] ?>">
                </div>
                <div>
                    <input type="text" name="barKod" value = "<?php echo $row['Barkod'] ?>">
                </div>
                <div>
                    <input type="text" name="plu_kod" value = "<?php echo $row['PLU_KOD'] ?>">
                </div>
                <div>
                    <input type="submit" name="edit" value = "Izmjeni">
                </div>
        </form>

        <?php 

        }
    }
}
}









?>


<?php
mysqli_close($db);
include "footer.php";


?>
