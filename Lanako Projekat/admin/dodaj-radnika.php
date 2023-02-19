
<?php

    include "head.php";


?>
   

   <?php

    include "header.php";


?>

<?php

    include "radnik-navi.php";


?>

   


    <main>
    
        <form class= "ddj" action="dodaj-radnika-request.php" method="post">
            <div>
                <input type="text" name="ime" placeholder = "Ime">
            </div>
            <div>
                <input type="text" name="prezime" placeholder = "Prezime">
            </div>
            <div>
                <input type="number" name="brojTelefona" placeholder = "Broj Telefona">
            </div>
            <div>
                <input type="text" name="Adresa" placeholder = "Adresa">
            </div>
            <div>
                <input type="text" name="Grad" placeholder = "Grad">
            </div>
            <div>
                <input type="email" name="Email" placeholder = "Email">
            </div>
            <div>
                <input type="number" name="JMBG" placeholder = "JMBG" >
            </div>
            <div>
                <input type="submit" name="dodaj" value = "Dodaj">
            </div>
        </form>

    </main>

    <?php

include "footer.php";


?>
