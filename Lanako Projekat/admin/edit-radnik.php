

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
        $display_current_info_query = "SELECT * FROM `radnik` WHERE `RadnikId` = '$edit_id'";
        $display_result = mysqli_query($db , $display_current_info_query);

        if (mysqli_num_rows($display_result) > 0) {
            while($row = mysqli_fetch_assoc($display_result)) {
                
                ?>
            
                <form class= "ddj" action="edit-radnika-request.php" method="post">
                <div>
                    <input type="hidden" name="id" value = "<?php echo $row['RadnikId'] ?>">
                </div>
                <div>
                    <input type="text" name="ime" value = "<?php echo $row['Ime'] ?>">
                </div>
                <div>
                    <input type="text" name="prezime" value = "<?php echo $row['prezime'] ?>">
                </div>
                <div>
                    <input type="number" name="brojTelefona" value = "<?php echo $row['brojTelefona'] ?>">
                </div>
                <div>
                    <input type="text" name="Adresa" value = "<?php echo $row['Adresa'] ?>">
                </div>
                <div>
                    <input type="text" name="Grad" value = "<?php echo $row['Grad'] ?>">
                </div>
                <div>
                    <input type="email" name="Email" value = "<?php echo $row['Email'] ?>">
                </div>
                <div>
                    <input type="number" name="JMBG" value = "<?php echo $row['JMBG'] ?>" >
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

include "footer.php";
mysqli_close($db);

?>
