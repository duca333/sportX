
<?php

    include "head.php";


?>
   

   <?php

    include "header.php";


?>



   


    <main>
    
        <form class = "ddj" action="dodaj-artikl-request.php" method="post" enctype="multipart/form-data">
        <div>
                <input type="text" name="sifra" placeholder = "Šifra artikla...">
            </div>
            <div>
                <input type="text" name="naziv" placeholder = "Naziv">
            </div>
            <div>
                <input type="file" name="slika">
            </div>
            <div>
                <input type="number" name="cijena" placeholder = "Cijena">
            </div>
            <div>
                <textarea name="opis" id="" cols="30" rows="10" placeholder = "Opis"></textarea>
            </div>
            <div>
                <input type="text" name="barKod" placeholder = "Bar Kod">
            </div>
            <div>
                <input type="text" name="plu_kod" placeholder = "PLU KOD">
            </div>
            <div>
                <input type="submit" name="dodaj" value = "Dodaj">
            </div>
        </form>

    </main>

    <?php

include "footer.php";


?>
