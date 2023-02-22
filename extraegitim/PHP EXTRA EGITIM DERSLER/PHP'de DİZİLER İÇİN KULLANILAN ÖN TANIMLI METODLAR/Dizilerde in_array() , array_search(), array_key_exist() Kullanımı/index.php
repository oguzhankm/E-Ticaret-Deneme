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

            array_search()      = Dizi içerisinde bulunan eleman / elemanlar dahilinde belirtilecek olan elemanı aramak ve ilgili elemanın anahtarını bulmak için kullanılır.
            array_key_exist     = Dizi içerisinde bulunan anahtar / anahtarlar dahilinde belirtilecek olan anahtarın olup olmadığını kontrol etmek için kullanılır.
            in_array            = Dizi içerisinde bulunan eleman / elemanlar dahilinde belirtilecek olan anahtarın olup olmadığını kontrol etmek için kullanılır.
        */


        /*
        //ÖRNEK1
        $Degerler   =   array("A1"=>"Volkan", "A2"=>"Hakan", "A3"=>"Oguzhan", "A4"=>"Onur", "A5"=>"Levent");

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br>";

        $Sonuc  = array_search("Onur", $Degerler);

        echo "Aranılan elemanın anahtar değeri: " . $Sonuc;
        */


        /*
        //ÖRNEK2
        $Degerler   =   array("A1"=>"5", "A2"=>5, "A3"=>"10", "A4"=>10);

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br>";

        $Sonuc  = array_search(5, $Degerler, true);  //Veri türünüde kontrol ettirmek istiyorsan true yazılacak.

        echo "Aranılan elemanın anahtar değeri: " . $Sonuc;
        */

        /*
        //ÖRNEK3
        $Degerler   =   array("A1"=>"Volkan", "A2"=>"Hakan", "A3"=>"Oguzhan", "A4"=>"Onur", "A5"=>"Levent");

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br>";

        $Sonuc  = array_key_exists("A3", $Degerler);

        echo "Sonuc: " . $Sonuc;
        */

        //ÖRNEK3
        $Degerler   =   array("A1"=>"Volkan", "A2"=>"Hakan", "A3"=>"Oguzhan", "A4"=>"Onur", "A5"=>"Levent");

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br>";

        $Sonuc  = in_array("Oguzhan", $Degerler);

        echo "Sonuc: " . $Sonuc;

























        ?>
</body>
</html>