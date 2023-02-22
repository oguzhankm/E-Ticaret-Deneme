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

        // count()         :     Dizi içerisindeki elaman sayısını bulmak için kullanılır.
        // sizeof()        :     Dizi içerisindeki elaman sayısını bulmak için kullanılır.
        // COUNT_RECURSİVE :     Çok boyutlu dizilerde, tüm boyutlar içeriindeki elemanlarda sayma işlemine sahil edilir.

        /*
        //ÖRNEK1
        $Isimler        =       array("Volkan", "Hakan", "Onur", array("Banu", "Busra", "Aslı", "Ece"), "Oguzhan", "Levent");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";



        $DizininElamanSayisi    =     count($Isimler);

        echo  "<h2>Dizi İçerisindeki Elaman Sayısı : $DizininElamanSayisi</h2>" ;
        */


        /*
        //ÖRNEK2
        $Isimler        =       array("Volkan", "Hakan", "Onur", array("Banu", "Busra", "Aslı", "Ece"), "Oguzhan", "Levent");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";



        $DizininElamanSayisi    =     count($Isimler, COUNT_RECURSIVE);

        echo  "<h2>Dizi İçerisindeki Elaman Sayısı : $DizininElamanSayisi</h2>" ;
        */

        /*
        //ÖRNEK3
        $Isimler        =       array("Volkan", "Hakan", "Onur", array("Banu", "Busra", array("Mavi", "Kırmızı","Siyah"), "Aslı", "Ece"), "Oguzhan", "Levent");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";



        $DizininElamanSayisi    =     count($Isimler, COUNT_RECURSIVE);

        echo  "<h2>Dizi İçerisindeki Elaman Sayısı : $DizininElamanSayisi</h2>" ;
        */


        //ÖRNEK4
        $Isimler        =       array("Volkan", "Hakan", "Onur", array("Banu", "Busra", array("Mavi", "Kırmızı","Siyah"), "Aslı", "Ece"), "Oguzhan", "Levent");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";



        $DizininElamanSayisi    =     count($Isimler[3], COUNT_RECURSIVE);

        echo  "<h2>Dizi İçerisindeki Elaman Sayısı : $DizininElamanSayisi</h2>" ;






        ?>
</body>
</html>