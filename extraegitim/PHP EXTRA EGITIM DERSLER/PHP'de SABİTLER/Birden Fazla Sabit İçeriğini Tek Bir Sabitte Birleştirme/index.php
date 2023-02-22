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
        //ÖRNEK 1
        define("ISIM", "Oguzhan");
        define("SOYISIM", "Karahan");

        define("SONUC", ISIM . " " . SOYISIM);

        echo SONUC;
        */
        /*
        //ÖRNEK 2
        const ISIM    =  "Oguzhan";
        const SOYISIM =  "Karahan";

        const SONUC   = ISIM . " " . SOYISIM;

        echo SONUC;
        */
        /*
        //ÖRNEK 3
        define("ISIM", "Oguzhan");
        const SOYISIM = "Karahan";

        define("SONUC", ISIM . " " . SOYISIM);

        echo SONUC;
        */

        /*
        //ÖRNEK 4
        define("ISIM", "Oguzhan");
        const SOYISIM =  "Karahan";

        const SONUC   = ISIM . " " . SOYISIM;

        echo SONUC;
        */

        //ÖRNEK 5
        define("ISIM", "Oguzhan");
        const SOYISIM = "Karahan";
        $FirmaAdi     = "KARAHAN A.Ş.";

        define("SONUC", $FirmaAdi . " ".  ISIM . " " . SOYISIM);

        echo SONUC;


        ?>
</body>
</html>