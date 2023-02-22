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

        ?:          =       Ternary operatörü üçlü operatör.

        Yapısı  :

        (Koşul ve ya Koşullar)  ?  Geçerli İfade  :  Geçersiz İfade

        */


        /*
        //ÖRNEK 1 Ternary üçlü operatörler değişken içerisinde kullanılabilir.

        $Deger      =  "Volkan";

        $Sonuc      =  ($Deger = "Volkan")  ?  "Dogru" : "Yanlış" ;

        echo $Sonuc;
        */


        /*
        //ÖRNEK2
        $Deger      =  "Volkan";

        echo  ($Deger=="Volkan")  ? "Dogru" : "Yanlış" ;
        */


        /*
        //Örnek3
        $Deger      =  1;

        $Mesaj1  = "Merhaba Oğuzhan Nasılsın?";
        $Mesaj2  = "Merhaba Batuhan Nasılsın?";

        echo  ($Deger== 1 )  ? $Mesaj1 : $Mesaj2 ;
        */


        $Deger1      =  10;
        $Deger2      =  20;
        $Deger3      =  30;

        $Dogru   = "Tüm Değerler Eşleşiyor";
        $Yanliş  = "Değer ve ya Değerler Eşleşmedi";

        $Sonuc      =   (($Deger1 == 10) and ($Deger2==20) and ($Deger3==30) )  ? $Dogru : $Yanliş ;

        echo  $Sonuc;


        ?>
</body>
</html>