<?php

session_start();

?>


<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <title>Ekstra Egitim</title>
</head>
<body>

        <?php

        /*
        $_SESSION["Kullanici"]       = array("Adi"=>"Oguzhan", "Soyadi"=>"Karahan", "EmailAdresi"=>"oguzhankm@gmail.com", "Telefonu"=>"0543 880 36 10");
        $_SESSION["Sepet"]       = array("ID"=>"10", "Tutari"=>"1250", "ParaBirimi"=>"TL", "OdemeTuru"=>"Havale");

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        */



        /*

         $_SESSION["Kullanici"]       = array("Adi"=>"Oguzhan", "Soyadi"=>"Karahan", "EmailAdresi"=>"oguzhankm@gmail.com", "Telefonu"=>"0543 880 36 10");
        $_SESSION["Sepet"]       = array("ID"=>"10", "Tutari"=>"1250", "ParaBirimi"=>"TL", "OdemeTuru"=>"Havale");

        echo "<pre>";
        print_r($_SESSION["Sepet"]);
        echo "</pre>";

        */


        $_SESSION["Kullanici"]       = array("Adi"=>"Oguzhan", "Soyadi"=>"Karahan", "EmailAdresi"=>"oguzhankm@gmail.com", "Telefonu"=>"0543 880 36 10");
        $_SESSION["Sepet"]       = array("ID"=>"10", "Tutari"=>"1250", "ParaBirimi"=>"TL", "OdemeTuru"=>"Havale");

        echo "<pre>";
        print_r($_SESSION["Sepet"]["Tutari"]);
        echo "</pre>";

        ?>




</body>
</html>









