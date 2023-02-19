<?php
include "head.php";
include "header.php";
include "../conn.php";
?>

<main>
    <div class="main-container">
        <form class="ddj" action="dodaj-stavku-request.php" method="post">
            <div>
                <select class="select" name="artikl" id="artikl">
                    <?php
                    $query = "SELECT * FROM `artikal`";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['ArtikalId'] . "'>" . $row['ArtikalId'] . "." . $row['Naziv'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <div>
                    <input type="number" name="kolicina" id="kolicina" placeholder="Kolicina" onchange="updateCijena()">
                </div>
                <div>
                    <input type="text" name="cijena" id="cijena" placeholder="Cijena" readonly>
                </div>
                <div>
                    <input type="submit" name="potvrdi" value="Dodaj">
                </div>
            </div>
        </form>
    </div>
</main>
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

<?php
include "footer.php";
mysqli_close($db);
?>