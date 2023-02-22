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
        $Degerler     =     array();
        $Degerler[]   =     "Volkan";
        $Degerler[]   =     "Hakan";
        $Degerler[]   =     "Onur";

        echo "<pre>";
        print_r($Degerler);
        echo "<pre/>";
        */


        /*
        //ÖRNEK2
        $Degerler     =     [];  //Yapısal Bir Hatadır
        $Degerler[]   =     "Volkan";
        $Degerler[]   =     "Hakan";
        $Degerler[]   =     "Onur";

        echo "<pre>";
        print_r($Degerler);
        echo "<pre/>";
        */


        //ÖRNEK3
        $Degerler            =     array();
        $Degerler["Isim1"]   =     "Volkan";
        $Degerler[]          =     "Hakan";
        $Degerler["Isim2"]   =     "Onur";
        $Degerler[]   =     "Oguzhan";
        $Degerler["SonIsim"]   =     "Busra";

        echo "<pre>";
        print_r($Degerler);
        echo "<pre/><br><br>";


        echo $Degerler[0] . "<br/>";
        echo $Degerler["Isim1"] . "<br/>";
        echo $Degerler[1] . "<br/>";
        echo $Degerler["Isim2"] . "<br/>";
        echo $Degerler["SonIsim"];


        ?>
</body>
</html>