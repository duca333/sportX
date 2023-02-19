
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
    
        <h1 style = "color:#66FF00;margin-bottom:3%">VAŠI RAČUNI:</h1>
     <table class = "racun-klasa" id = "tabela">
        <thead>
        <tr>
            <th>RAČUN ID</th>

            
        </tr>
        </thead>
        <tbody>
        <?php if (!$db) {
             echo "No conn" . mysqli_error($db);
         } else {
            $id = $_SESSION['korisnik_id'];
             $query_artikli = "SELECT * FROM `racun` WHERE `KorisnikId` = '$id'";
             $result_artikli = mysqli_query($db , $query_artikli);

             if (mysqli_num_rows($result_artikli) > 0) {
                
                 while ($row = mysqli_fetch_assoc($result_artikli)) {
                        $racun = $row['RacunId'];
                        $datum = $row['DatumRacuna'];
                    ?>
             <tr data-racunid="<?php echo $racun; ?>">
                <td><?php echo $racun .". " .$datum?></td>
            </tr>
            <?php 

        }
    }
}



?>
        </tbody>
        </table>
        <button class = "dodaj-nesto-racun"><a class = "add-a" <?php echo "<a href='dodaj-stavku.php?korisnikid=$id'"?>>Dodaj</a></button>
    </div>


    </main>

    <?php

include "footer.php";
mysqli_close($db);
?>

<script>
  const table = document.getElementById("tabela");
table.addEventListener("dblclick", function(event) {
  const target = event.target;
  const row = target.parentNode;
  let racunid = row.getAttribute("data-racunid");
  window.location.href = "tabelarni_prikaz.php?racunid=" + encodeURIComponent(racunid);
});
</script>


