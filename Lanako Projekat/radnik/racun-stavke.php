
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
    <div class="table-container">
        <div class="btns-racun-stavke">
        <button class="btn-racun-st"><a href="racun-stavke.php?ponisti-id=<?php echo $_SESSION['korisnik_id']; ?>">Poništi račun</a></button>

            <button class = "btn-racun-st"><a href="potvrda-request.php">Potvrdi račun</a></button>
            <button class = "btn-racun-st"><a href="dodaj-stavku-naracun.php">Dodaj stavku</a></button>
        </div>
     <table class = "table-stavke">
        <thead>
        <tr>
            <th>ARTIKAL ID</th>
            <th>NAZIV</th>
            <th>KOLIČINA</th>
            <th>CIJENA</th>
            <th>OBRIŠI STAVKU</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!$db) {
             echo "No conn" . mysqli_error($db);
         } else {
            $korisnikId = $_SESSION['korisnik_id'];
            $table_name = "table_" . $korisnikId;

            $query_artikli = "SELECT `$table_name`.`ArtikalId`, `$table_name`.`Cijena`, `$table_name`.`Kolicina` , artikal.`Naziv`
             FROM `$table_name`
             JOIN artikal ON artikal.ArtikalId = `$table_name`.ArtikalId";
             $result_artikli = mysqli_query($db , $query_artikli);

             if (mysqli_num_rows($result_artikli) > 0) {
                
                 while ($row = mysqli_fetch_assoc($result_artikli)) {
                    $id = $row['ArtikalId'];
                    ?>
            <tr>
                <td><?php echo $row['ArtikalId']; ?></td>
                <td><?php echo $row['Naziv']; ?></td>
                <td><?php echo $row['Kolicina']; ?></td>
                <td><?php echo $row['Cijena']; ?></td>
                <td><button class="del-r"><?php echo "<a href='racun-stavke.php?delete-id=$id'"?></a>Delete</button></td>
            </tr>
            <?php 

        }
    }
}



?>
        </tbody>
        </table>
        
    </div>


    </main>

    <?php



if(isset($_GET['delete-id'])) {
    $id = $_GET['delete-id'];
    
    $delete_stavka = "DELETE FROM `$table_name` WHERE `ArtikalId` = '$id'";
    $delet_stavka_result = mysqli_query($db , $delete_stavka);
    
    if($delet_stavka_result) {
        Header("Location:racun-stavke.php");
    }
}

if (isset($_GET['ponisti-id'])) {
    $ponisti_id = $_GET['ponisti-id'];
    
    $check_table_query = "SELECT COUNT(*) FROM information_schema.tables WHERE table_name = '$table_name'";
    $check_table_result = mysqli_query($db, $check_table_query);
    $table_exists = mysqli_fetch_row($check_table_result)[0];
    
    if ($table_exists) {
        $drop_table_query = "DROP TABLE $table_name";
        $drop_table_result = mysqli_query($db, $drop_table_query);
        
        if ($drop_table_result) {
            header("Location:racun.php");
        } else {
            echo "Error dropping table '$table_name': " . mysqli_error($db);
        }
    }
}mysqli_close($db);
?>



<?php

include "footer.php";
?>








