<?php
declare(strict_types=1);
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
        // var_dump()    : Herhangi bir değişkene ait tüm yapıya ve bilgilere ulaşmak için kullanılır.

        //ÖRNEK 1
        $Deger   = "Oguzhan karahan";

        var_dump($Deger);

        echo "<br/><br/>";

        $Ornek = array("Oguzhan", 25, true, 6655.55,);

        var_dump($Ornek);
        */


        /*

        serialize()         : Herhangi bir değeri saklanabilir bir veri türüne dönüştürerek, dönüştürdüğü değeri geriye döndürür
        unserialize()       : serialize() metodu kullanılarak üretilmiş olan herhangi bir saklanabilir veri türündeki değeri eski orjinal haline dönüştürerek, dönüştürdüğü değeri geriye döndürür

        */

        /*
        //ÖRNEK1
        $Bilgiler  =   array("Isim"=>"Oguzhan", "Soyisim"=>"Karahan", "Yas"=> 25, "Sehir"=>"Kahramanmaraş" );

        echo "<pre>";
        print_r($Bilgiler);
        echo "</pre><br><br>";
        $Sonuc  = serialize($Bilgiler);

        echo $Sonuc;
        */




        //ÖRNEK2
        $Bilgiler  =  'a:4:{s:4:"Isim";s:7:"Oguzhan";s:7:"Soyisim";s:7:"Karahan";s:3:"Yas";i:25;s:5:"Sehir";s:14:"Kahramanmaraş";}';


        echo $Bilgiler . "<br/><br/>";

        $Sonuc  = unserialize($Bilgiler);

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre>";




        ?>

</form>
</body>
</html>









