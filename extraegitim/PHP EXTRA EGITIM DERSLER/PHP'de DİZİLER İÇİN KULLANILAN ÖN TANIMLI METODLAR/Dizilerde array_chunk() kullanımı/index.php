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

            array_chunk()       : Dizinin belli bölümlerini parçalayarak yeni bir çok boyutlu dizi olulturur.

        */


        /*
        //ÖRNEK1
        $Isimler  =  array("Volkan", "Oguzhan", "Hakan", "Serkan", "Levent", "Ümit", "Eray", "Mehmet", "Ayşe","Fatma", "Hayriye", "Büşra", "Gizem", "Merve");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        $Sonuc  = array_chunk($Isimler, 3 );

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre><br>";
        */

        //ÖRNEK2
        $Isimler  =  array("A0"=>"Volkan", "A1"=>"Oguzhan", "A2"=>"Hakan", "A3"=>"Serkan", "A4"=>"Levent", "A5"=>"Ümit", "A6"=>"Eray", "A7"=>"Mehmet", "A8"=>"Ayşe", "A9"=>"Fatma", "A10"=>"Hayriye", "A11"=>"Büşra", "A12"=>"Gizem", "A13"=>"Merve");


        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        $Sonuc  = array_chunk($Isimler, 3, true); //true dersek key'ler korunur.

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre><br>";























        ?>
</body>
</html>