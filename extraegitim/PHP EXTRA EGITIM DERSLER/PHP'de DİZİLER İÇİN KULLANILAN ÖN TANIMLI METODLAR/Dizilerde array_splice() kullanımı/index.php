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
        array_splice()           : Dizinin belli bölümlerini alarak, belli bölümlerini silip, eğer belirtilirse yeni elemanlarda ekleyerek yeni bir dizi oluşturmak için kullanılır.
        */


        /*
        //ÖRNEK1
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        array_splice($Isimler, 4); // Bir değişkene atanmadığı sürece belirtilen kadar değer alır ve yeni dizi oluşturur.

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";
        */

        /*
        //ÖRNEK2
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        $YeniDizi    =      array_splice($Isimler, 4); // Bir değişkene atanırsa kalan değerleri alır geri kalanı yeni dizi yapar.

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";

        echo "<pre>";
        print_r($YeniDizi);
        echo "</pre><br>";
        */



        /*
        //ÖRNEK3
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        array_splice($Isimler, 1,-1);//Baştan bir eleman al, biteceğin yerden bir eleman al aradakileri sil.

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";
        */


        /*
        //ÖRNEK4
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        array_splice($Isimler, 2,count($Isimler), "RECEP");//Baştan iki eleman al, aradakileri pas geç, sonra RECEP ekle.

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";
        */


        /*
        //ÖRNEK5
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        array_splice($Isimler, 1, 3, "RECEP");//Baştan bir eleman al, aradakileri üc tanesini sil, sonra RECEP ekle, sonra devam et.

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";
        */


        //ÖRNEK6
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet");
        $EkIsimler  = array("RECEP", "ALİ", "BERK");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        array_splice($Isimler, 1, 5, $EkIsimler);//Baştan bir eleman al, aradakileri üc tanesini sil, sonra RECEP ekle, sonra devam et.

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";























        ?>
</body>
</html>