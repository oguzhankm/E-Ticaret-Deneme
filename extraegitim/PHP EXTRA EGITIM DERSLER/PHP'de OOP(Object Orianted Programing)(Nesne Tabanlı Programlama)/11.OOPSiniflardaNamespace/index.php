<?php

require_once("11.OOPSiniflardaNamespace/Siniflar/VolkanAlakent.php");
require_once("11.OOPSiniflardaNamespace/Siniflar/OguzhanKarahan.php");
require_once("11.OOPSiniflardaNamespace/Siniflar/OnurTatli.php");


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
         namespace()     : Sınıflar için özel isim alanları / küme tanımlamak için kullanılır.
         */

        /*
        //ÖRNEK 1
        class Deneme{ //Hata kodu Döndürür. Çünkü aynı isimde Deneme sınıfı birden fazla kez kullanılmıştır..

        }

        class Deneme{

        }
        */


        $Bir  = new VolkaninSiniflari\Deneme;

        echo $Bir->Isim . "<br />";


        $Iki  = new OguzhaninSiniflari\Deneme;

        echo $Iki->Isim . "<br />";


        $Uc  = new OnurunSiniflari\Deneme;

        echo $Uc->Isim . "<br />";
        



        ?>


</body>
</html>









