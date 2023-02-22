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
        array_combine()           :  İki farklı diziyi ilişkisel olarak birleştirerek yeni bir dizi oluşturmak için kullanılır.
        */


        /*
        //ÖRNEK1
        $Dizi1  =  array("Mavi", "Beyaz", "Kirmizi");
        $Dizi2  =  array("Araba", "Perde", "Bayrak");

        $YeniDizi       =  array_combine($Dizi1, $Dizi2);

        echo "<pre>";
        print_r($Dizi1);
        echo "</pre><br>";

        echo "<pre>";
        print_r($Dizi2);
        echo "</pre>";

        echo "<pre>";
        print_r($YeniDizi);
        echo "</pre>";
        */


        /*
        //ÖRNEK2
        $Dizi1  =  array("Renk1"=>"Mavi", "Renk2"=>"Beyaz", "Renk3"=>"Kirmizi");
        $Dizi2  =  array("Deger1"=>"Araba", "Deger2"=>"Perde", "Deger3"=>"Bayrak");

        $YeniDizi       =  array_combine($Dizi1, $Dizi2);

        echo "<pre>";
        print_r($Dizi1);
        echo "</pre><br>";

        echo "<pre>";
        print_r($Dizi2);
        echo "</pre>";

        echo "<pre>";
        print_r($YeniDizi);
        echo "</pre>";
        */

        //ÖRNEK3
        $Dizi1  =  array("Araclar", "Esya", "Isimler");
        $Dizi2  =  array(array("Gemi", "Araba", "Ucak"), "Masa", array("Mehmet", "Oguz"));

        $Sonuc       =  array_combine($Dizi1, $Dizi2);

        echo "<pre>";
        print_r($Dizi1);
        echo "</pre><br>";

        echo "<pre>";
        print_r($Dizi2);
        echo "</pre>";

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre>";










        ?>
</body>
</html>