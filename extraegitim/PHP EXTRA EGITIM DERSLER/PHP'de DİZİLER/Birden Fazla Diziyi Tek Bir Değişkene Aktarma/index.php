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
        $Isimler  =   array("Oguzhan", "Volkan");
        $Renkler  =  array("Mavi", "Beyaz", "Siyah");


        echo  "<pre>";
        print_r($Isimler);
        echo "</pre><br><br>";

        echo  "<pre>";
        print_r($Renkler);
        echo "</pre><br><br>";


        $Sonuc  =  $Isimler + $Renkler;

        echo  "<pre>";
        print_r($Sonuc);
        echo "</pre><br><br>";

        echo $Sonuc[0] . "<br>";
        echo $Sonuc[1] . "<br>";
        echo $Sonuc[2] . "<br>";
        */


        /*
        //ÖRNEK 2
        $Isimler  =   array("PHP"=>"Oguzhan", "HTML"=>"Volkan");
        $Renkler  =  array("Bir"=>"Mavi", "Iki"=>"Beyaz", "Uc"=>"Siyah");
        //En doğru kullanım değerlerin hepsine anahtar vermektir.

        echo  "<pre>";
        print_r($Isimler);
        echo "</pre><br><br>";

        echo  "<pre>";
        print_r($Renkler);
        echo "</pre><br><br>";


        $Sonuc  =  $Isimler + $Renkler;

        echo  "<pre>";
        print_r($Sonuc);
        echo "</pre><br><br>";

        echo $Sonuc["PHP"] . "<br>";
        echo $Sonuc["HTML"] . "<br>";
        echo $Sonuc["Bir"] . "<br>";
        echo $Sonuc["Iki"] . "<br>";
        echo $Sonuc["Uc"];
        */


        //ÖRNEK 3
        $Isimler  =   array("DegerBir"=>"Oguzhan", "DegerIki"=>"Volkan");
        $Renkler  =  array("DegerUc"=>"Mavi", "DegerDort"=>"Beyaz", "DegerBes"=>"Siyah");
        $Araclar  =  array("DegerAltı"=>"Gemi", "DegerYedi"=>"Tren", "DegerSekiz"=>"Araba");
        $Esyalar  =  array("DegerDokuz"=>"Sandalye", "DegerOn"=>"Masa", "DegerOnBir"=>"Televizyon");


        echo  "<pre>";
        print_r($Isimler);
        echo "</pre><br><br>";

        echo  "<pre>";
        print_r($Renkler);
        echo "</pre><br><br>";

        echo  "<pre>";
        print_r($Araclar);
        echo "</pre><br><br>";

        echo  "<pre>";
        print_r($Esyalar);
        echo "</pre><br><br>";


        $Sonuc  =  $Isimler + $Renkler + $Araclar + $Esyalar;

        echo  "<pre>";
        print_r($Sonuc);
        echo "</pre><br><br>";

        echo $Sonuc["DegerBir"] . "<br>";
        echo $Sonuc["DegerIki"] . "<br>";
        echo $Sonuc["DegerUc"] . "<br>";
        echo $Sonuc["DegerDort"] . "<br>";
        echo $Sonuc["DegerBes"] . "<br>";
        echo $Sonuc["DegerAltı"] . "<br>";
        echo $Sonuc["DegerYedi"] . "<br>";
        echo $Sonuc["DegerSekiz"] . "<br>";
        echo $Sonuc["DegerDokuz"] . "<br>";
        echo $Sonuc["DegerOn"] . "<br>";
        echo $Sonuc["DegerOnBir"];



        ?>
</body>
</html>