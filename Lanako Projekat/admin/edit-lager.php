
<?php

    include "head.php";


?>
   

   <?php

    include "header.php";


?>


   


<main>
    <div class="main-container">
        
    <?php


include "../conn.php";

if (!$db) {
    die ("No conn" . mysqli_error($db));
} else {
    if(isset($_GET['edit-id'])) {
        $edit_id = $_GET['edit-id'];
        $display_current_info_query = "SELECT l.*, a.Naziv AS ArtikalNaziv FROM `lager` l JOIN `artikal` a ON l.ArtikalId = a.ArtikalId WHERE l.`LagerId` = '$edit_id'";
        $display_result = mysqli_query($db , $display_current_info_query);

        if (mysqli_num_rows($display_result) > 0) {
            while($row = mysqli_fetch_assoc($display_result)) {
                ?>
            

            <form class="ddj" action="edit-lager-request.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['LagerId']; ?>">
    <input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>"> <!-- add this line -->
    <div>
        <select id="artikal_select" class="select" name="artikal_id">
            <?php
            $query = "SELECT ArtikalId, Naziv FROM artikal";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($artikal_row = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?php echo $artikal_row['ArtikalId']; ?>" <?php if ($artikal_row['ArtikalId'] == $row['ArtikalId']) echo 'selected'; ?>><?php echo $artikal_row['Naziv']; ?></option>
                    <?php
                }
            }
            ?>
        </select>
        <div>
            <input type="text" name="Lokacija" id="lokacija" />
        </div>
        <div>
            <input type="number" name="kolicina" id="kolicina" />
        </div>

        <input type="submit" name="edit" value="Edit" />
    </div>
</form>


        <?php 

        }
    }
}
}









?>

    
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
<script>
    const artikalSelect = document.getElementById('artikal_select');
    const editIdInput = document.querySelector('input[name="edit_id"]');
    const editId = editIdInput.value; // get the value of the edit_id input field

    const selectedArtikalId = artikalSelect.value;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', `get-lager-data.php?id=${editId}`); // use the edit_id value in the URL
    xhr.onload = function() {
        if (xhr.status === 200) {
            const data = JSON.parse(xhr.responseText);

            document.querySelector('input[name="Lokacija"]').value = data.Lokacija;
            document.querySelector('input[name="kolicina"]').value = data.RaspolozivaKolicina;
        }
    };
    xhr.send();
</script>



