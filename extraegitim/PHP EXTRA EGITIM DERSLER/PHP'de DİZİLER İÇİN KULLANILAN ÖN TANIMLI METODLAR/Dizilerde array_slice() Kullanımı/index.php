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
        array_slice()           : Dizinin belli bölümlerini alarak yeni bir dizi oluşturmak için kullanılır.
        */



        /*
        //ÖRNEK1
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";

        $Sonuc  =  array_slice($Isimler, 3, 3);  //3.indisten başla 3 tane al

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre><br>";
        */



        /*
        //ÖRNEK2
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";

        $Sonuc  =  array_slice($Isimler, -4, 3); //Sondan 4.den başla 3 tane al

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre><br>";
        */

        /*
        //ÖRNEK3
        $Isimler  =  array("A1"=>"Volkan", "A2"=>"Oguzhan", "A3"=>"Hakan", "A4"=>"Serkan", "A5"=>"Levent", "A6"=>"Ümit", "A7"=>"Eray", "A8"=>"Mehmet");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";

        $Sonuc  =  array_slice($Isimler, 2, 4); //Alfanumerik anahtar değerleri girersek bu anahtarlar korunur.

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre><br>";
        */


        /*
        //ÖRNEK4
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";

        $Sonuc  =  array_slice($Isimler, 3, 3, true); //true yazılması anahtarların korunması anlamına gelir.

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre><br>";
        */

        //ÖRNEK4
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";

        $Sonuc  =  array_slice($Isimler, 3, count($Isimler), true); //Sonuna kadar yazdıracaksan count() fonksiyonu kullan.

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre><br>";















        ?>
</body>
</html>