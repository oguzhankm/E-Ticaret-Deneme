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
        //array_unshift()       :  Dizinin en başına yeni elaman eklemek için kullanılır. Aynı zamanda eklenecek olan eleman ve elemanların diziye dahil edilmesiyle
        dizi içeriğinin toplam eleman sayısını geriye döndürür.
        //array_push()          :  Dizinin en sonuna yeni eleman eklemek için kullanılır. Aynı zamanda eklenecek olan eleman ve elemanların diziye dahil edilmesiyle
        dizi içeriğinin toplam eleman sayısını geriye döndürür.

        */


        /*
        //ÖRNEK1
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";

        array_unshift($Isimler, "Levent", "Serkan");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        */


        /*
        //ÖRNEK2
        $Isimler  =  array("Bir"=>"Volkan", "Oguzhan", "Iki"=>"Hakan");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";

        array_unshift($Isimler, "Levent", "Serkan");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        */


        /*
        //ÖRNEK3
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";

        array_unshift($Isimler, "Levent", "Serkan");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";

        $Islem   =   array_unshift($Isimler, "Ümit", "Ahmet");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";

        echo "Islem isimli değişkenin içerdiği veri: " . $Islem;
        */

        /*
        //ÖRNEK4
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", array("Hale", "Büşra", "Aslı", "Derya"), "Onur");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";

        $Islem  =  array_unshift($Isimler[3], "Levent", "Serkan");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre> <br>";

        echo "Islem isimli değişkenin içerisindeki 3 anahtarına sahip dizinin içerdiği veri: " . $Islem;
        */


        //ÖRNEK4
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Onur");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";

        array_push($Isimler, "Levent", "Serkan");  //array_unshift() ve ya array_push() fonksiyonlarında elemanşara anahtar(key) ekleme yapılamaz.

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";




        ?>
</body>
</html>