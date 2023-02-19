
<?php

    include "head.php";


?>
   

   <?php

    include "header.php";


?>



   


<main>
  <div class="table-container">
      <button class = "dodaj-nesto-l"><a href="dodaj-lager.php">DODAJ</a></button>
  <table class="table-lager">
    <thead>
    <tr>
      <th>ID LAGER</th>
      <th>NAZIV ARTIKLA</th>
      <th>RASPOLOŽIVA KOLOČINA</th>
      <th>NAZIV LOKACIJE</th>
      <th>DELETE</th>
    <th>EDIT</th>
    </tr>
    </thead>
    <tbody>
  
  <?php

    include "../conn.php";
    if(!$db) {
        echo "no conn" . mysqli_error($db);
    } else {

        $query = "SELECT lager.LagerId, artikal.Naziv, lager.RaspolozivaKolicina, lager.Lokacija
                            FROM lager
                            JOIN artikal ON     
                        lager.ArtikalId = artikal.ArtikalId";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['LagerId'];
  ?>
    <tr>
      <td><?php echo $row['LagerId']; ?></td>
      <td><?php echo $row['Naziv']; ?></td>
      <td><?php echo $row['RaspolozivaKolicina']; ?></td>
      <td><?php echo $row['Lokacija']; ?></td>
      <td><button class="del-r"><?php echo "<a href='lager.php?delete-id=$id'"?></a>Delete</button></td>
      <td><button class="del-r"><?php echo "<a href='edit-lager.php?edit-id=$id'"?></a>Edit</button></td>
    </tr>
  <?php
        }
      }
    }

  ?>
  </table>
  </tbody>
  </div>
</main>


    <?php
include "footer.php";
?>

<?php

if(isset($_GET['delete-id'])) {
    $delete_id = $_GET['delete-id'];

    $delete_lager = "DELETE FROM `lager` WHERE `LagerId` = '$delete_id'";
    $delet_lager_result = mysqli_query($db , $delete_lager);

    if($delet_lager_result) {
        Header("Location:lager.php");
    }
}

mysqli_close($db);


?>
