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
            explode()       : Düz bir metni belirtilecek olan ayraca göre parçalayarak yeni bir dizi oluşturmak için kullanılır.
            implode()       : Diziyi birleştirerek düz bir metin içeriği oluşturmak için kullanılır.
        */

        /*
        //ÖRNEK1
        $Deger      =  "Volkan Alakent Extra Egitim";

        $Sonuc      =  explode(" ", $Deger);

        echo "Metnin ilk hali : " . $Deger . "<br>";

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre>";
        */

        /*
        //ÖRNEK2
        $Deger      =  "Fenerbahçe,Beşiktaş,Galatasaray,Trabzonspor, Bursaspor, Büyükşehir Belediye" ;

        $Sonuc      =  explode(",", $Deger);

        echo "Metnin ilk hali : " . $Deger . "<br>";

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre>";
        */




        //implode() Kullanımı




        $Isimler      =  array("Volkan","Oguzhan","Onur","Ümit","Serkan","Levent");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";

        $Sonuc  = implode(", ", $Isimler);

        echo $Sonuc;





        ?>
</body>
</html>