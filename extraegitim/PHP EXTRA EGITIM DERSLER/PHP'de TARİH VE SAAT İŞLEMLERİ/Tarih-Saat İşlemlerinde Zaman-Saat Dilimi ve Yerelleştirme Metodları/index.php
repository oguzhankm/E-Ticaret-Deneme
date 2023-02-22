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

        date_default_timezone_get()     : Tüm tarih ve saat işlevleri tarafından kullanolan varsayılan geçerli zaman dilimini bularak, bulduğu değeri geriye döndürür.
        timezone_identifiers_list()     : Tüm zaman tanımlayıcışarı değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini döndürür.
                Degerler
                1           : Africa
                2           : America
                4           : Antartica
                8           : Arctic
                16          : Asia
                32          : Atlantic
                64          : Australia
                128         : Europe
                256         : Indian
                512         : Pacific
                2047        :  All

        date_default_timezone_set()       : Tüm tarig ve saat işlevleri tarafından varsayılan geçerli zaman dilimini belirtmek için kullanılır.
        UTC         : Cordinated Universal Time (Eş Güdümlü Evrensel Saat)
        GMT         : Greenwich Mean Time (Greenwich Ortalama Zamanı)

        setlocale() : Sistemin yerel ayarlarını belirtmek için kullanolır. (Yerel bilgi, coğrafi konum, para, zaman vb.)

        */

        /*
        //ÖRNEK1
        $Zaman   = date_default_timezone_get();

        echo "Zaman Dilimi : " . $Zaman;
        */


        /*
        //ÖRNEK 2
        $ZamanDilimleri     = timezone_identifiers_list(128);

        echo "<pre>";
        print_r($ZamanDilimleri);
        echo "</pre>";
        */


        /*
        //ÖRNEK 3
        $Zaman  = date_default_timezone_get();
        echo "Orjinal Zaman Dilimi : " . $Zaman;

        echo "<br />";

        $ZamanDegistir = date_default_timezone_set("Europe/Moscow");
        echo "Yeni Zaman Dilimi : " . $ZamanDegistir;

        echo "<br />";

        $YeniZaman      = date_default_timezone_get();
        echo "Geçerli Yeni Zaman Dilimi : " . $YeniZaman;
        */

        //ÖRNEK 4
        setlocale(LC_ALL, "tr_TR", "tr", "turkish");





        ?>




</body>
</html>









