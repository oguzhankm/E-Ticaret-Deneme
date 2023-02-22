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
        array_merge()           :  Birden fazla diziyi birleştirecek yeni bir dizi oluşturmak için kullanılır.
        array_merge_recursive   :  Birden fazla diziyi birleştirecek yeni bir dizi oluşturmak için kullanılır. (GELİŞMİŞ)
        */


        /*
        $Dizi1  =  array("Deger1"=>"Oguzhan", "Deger2"=>"Volkan", "Deger3"=>"Hakan");
        $Dizi2  =  array("Mehmet", "Deger2"=>"Serkan", "İlyas", "Büşra", "Deger1"=>"Yusuf");

        $YeniDizi       =  array_merge($Dizi1, $Dizi2);

        echo "<pre>";
        print_r($Dizi1);
        echo "</pre>";

        echo "<pre>";
        print_r($Dizi2);
        echo "</pre>";

        echo "<pre>";
        print_r($YeniDizi);
        echo "</pre>";
        */


        //ARRAY_MERGE_RECURSIVE KULLANIMI

        $Dizi1  =  array("Deger1"=>"Oguzhan", "Deger2"=>"Volkan", "Deger3"=>"Hakan");
        $Dizi2  =  array("Mehmet", "Deger2"=>"Serkan", "İlyas", "Büşra", "Deger1"=>"Yusuf");

        $YeniDizi       =  array_merge_recursive($Dizi1, $Dizi2);

        echo "<pre>";
        print_r($Dizi1);
        echo "</pre>";

        echo "<pre>";
        print_r($Dizi2);
        echo "</pre>";

        echo "<pre>";
        print_r($YeniDizi);
        echo "</pre>";








        ?>
</body>
</html>