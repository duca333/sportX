
<?php

    include "head.php";


?>
   

   <?php

    include "header.php";


?>

<?php

    include "navi.php";


?>

   


<main>
    <div class="main-container">
  <table>
    <thead>
    <tr>
      <th>ID lager</th>
      <th>Naziv artikla</th>
      <th>Raspoloziva kolicina</th>
      <th>Naziv lokacije</th>
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
include "footer.php";mysqli_close($db);
?>

