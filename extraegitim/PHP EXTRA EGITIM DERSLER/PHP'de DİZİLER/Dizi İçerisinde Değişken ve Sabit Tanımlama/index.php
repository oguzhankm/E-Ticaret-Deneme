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
        //ÖRNEK1
        $Isim    =  "Volkan";
        $SoyIsim =  "Alakent";

        define("ESYA",  "Masa");
        define("ARAC", "Vapur");

        const RENK     =  "Mavi";
        const YAZILIMDILI  =  "PHP";

        $Degerler  =  array($Isim, $SoyIsim, ESYA, ARAC, RENK, YAZILIMDILI, "Sinema");

        echo "<pre>";
        print_r($Degerler);
        echo "<pre/>";
        */



        //ÖRNEK2
        $Isim    =  "Volkan";
        $SoyIsim =  "Alakent";

        define("ESYA",  "Masa");
        define("ARAC", "Vapur");

        const RENK     =  "Mavi";
        const YAZILIMDILI  =  "PHP";

        $Degerler  =  array($Isim, "Soyadi"=>$SoyIsim, ESYA, ARAC, "Renk"=>RENK, YAZILIMDILI, "Aktivite"=>"Sinema");

        echo "<pre>";
        print_r($Degerler);
        echo "<pre/>";



        ?>
</body>
</html>