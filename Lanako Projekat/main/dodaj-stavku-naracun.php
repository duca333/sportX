

<?php
include "head.php";
?>

<?php
include "header.php";
?>




<main>
    <button class="btn"><a href="racun.php">Back</a></button>
    <?php
    include "../conn.php";
    ?>
    <div class="main-container">
        <form class="ddj" action="dodaj-stavku-naracun-request.php" method="post">
            <div>
                <select class = "select" name="artikl" id="artikl">
                    <?php
                    include "conn.php";
                    if (!$db) {
                        echo "No conn" . mysqli_error($db);
                    } else {
                        $query = "SELECT * FROM `artikal`";
                        $result = mysqli_query($db, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              echo "<option value='" . $row['ArtikalId'] . "'>" . $row['ArtikalId'] . "." . $row['Naziv'] . "</option>";
                            }
                          }
                    }
                    ?>
                </select>
                <div>
                    <input type="number" name="kolicina" id="kolicina" placeholder="Količina" onchange="updateCijena()">
                </div>
                <div>
                    <?php
                        $query_za_cijenu = "SELECT * FROM `artikal`";
                        $result_za_cijenu = mysqli_query($db, $query_za_cijenu);
                        if(mysqli_num_rows($result_za_cijenu)){
                        $row_za_cijenu = mysqli_fetch_assoc($result_za_cijenu);
                        $artiklId = $row_za_cijenu['ArtikalId'];
                        $query_cijena = "SELECT cijena FROM `artikal` WHERE ArtikalId = '$artiklId'";
                        $result_cijena = mysqli_query($db, $query_cijena);
                        $row_cijena = mysqli_fetch_assoc($result_cijena);
                        $cijena = $row_cijena['cijena'];
                    }
                    ?>
                    <input type="text" name="cijena" id="cijena" placeholder="Cijena" value="<?php echo $cijena; ?>">
                </div>
                <div>
                    <input type="submit" name="potvrdi" value="Dodaj">
                </div>
            </div>
        </form>
    </div>
</main>

<?php
include "footer.php";mysqli_close($db);
?>

<script>
    function updateCijena() {
        var artiklId = document.getElementById("artikl").value;
        var kolicina = document.getElementById("kolicina").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var cijena = this.responseText;
                var novaCijena = kolicina * cijena;
                document.getElementById("cijena").value = novaCijena.toFixed(2);
            }
        };
        xmlhttp.open("GET", "get-cijena.php?artiklId=" + artiklId, true);
        xmlhttp.send();
    }
</script>