
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
            <h4 style = "color:red;"> * Invalid Email *</h4>
            <div>
                <input type="number" name="JMBG" placeholder = "JMBG" max ="13" min = "13">
            </div>
            <div>
                <input type="number" name="roleid" value = "3">
            </div>
            <div>
                <input type="submit" name="dodaj" value = "Dodaj">
            </div>
        </form>

    </main>

    <?php

include "footer.php";


?>
