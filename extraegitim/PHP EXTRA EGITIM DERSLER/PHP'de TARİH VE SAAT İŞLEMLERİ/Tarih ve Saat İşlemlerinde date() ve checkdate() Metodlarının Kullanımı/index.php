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

        date()          : Tarih ve saat bilgilerini bularak bulduğu değeri geriye döndürür. Ayrıca bu bilgileri istege bağlı olarak biçinlendirmek içinde kullanılır.
        checkdate()     : Belirtilecek olan zamanı Gregoryen(Miladi) takvime göre doğrulamasını yaparak, doğrulama sonucunu boolean(mantıksal) veri olarak döndürmek için kullanılır.


        */

        $Tarih  = date("d.m.Y  H:i:s");
        echo  $Tarih ."<br />";

        $Tarih2   = date("d F Y l");
        echo  $Tarih2 . "<br />";

        $ZamanDamgasi  = 1664716008;
        $Zaman3 = date("d.m.Y H.i.s", $ZamanDamgasi);
        echo "Zaman ( " .  $ZamanDamgasi . " ) " . $Zaman3;

        $Deger  = checkdate(12, 8, 1980);//1. Deger Ay, 2. Deger Gün(0'sız)

        if ($Deger==1){
            echo "Girilen Tarih Değeri (12.8.1980), Geçerlidir.";
        }else{
            echo "Girilen Tarih, Geçerli Değildir.";
        }



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









