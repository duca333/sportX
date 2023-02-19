
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
        
        <div class="table-wrapper-radnik">
     <table class = "tradnik">
        <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Broj Telefona</th>
            <th>Adresa</th>
            <th>Grad</th>
            <th>Email</th>
            <th>JMBG</th>
            
        </tr>
        </thead>
        <tbody>
        <?php if (!$db) {
             echo "No conn" . mysqli_error($db);
         } else {
             $query_artikli = "SELECT * FROM `radnik`";
             $result_artikli = mysqli_query($db , $query_artikli);

             if (mysqli_num_rows($result_artikli) > 0) {
                
                 while ($row = mysqli_fetch_assoc($result_artikli)) {
                        $id = $row['RadnikId'];
                    ?>
            <tr>
                <td><?php echo $row['Ime']; ?></td>
                <td><?php echo $row['prezime']; ?></td>
                <td><?php echo $row['brojTelefona']; ?></td>
                <td><?php echo $row['Adresa']; ?></td>
                <td><?php echo $row['Grad']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['JMBG']; ?></td>
                
            </tr>
            <?php 

        }
    }
}



?>
        </tbody>
        </table>
        </div>
    </div>


    </main>

    <?php

include "footer.php";






if(isset($_GET['delete-id'])) {
    $id = $_GET['delete-id'];

    $delete_radnik = "DELETE FROM `radnik` WHERE `RadnikId` = '$id'";
    $delet_radnik_result = mysqli_query($db , $delete_radnik);

    if($delet_radnik_result) {
        Header("Location:radnik.php");
    }
}mysqli_close($db);
?>
