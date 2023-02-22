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


        function IslemYap($Isim, $Soyisim, $DogumTarihi, $Yas, $Sehir, $Meslek, $Cinsiyet){

            $GelenIsim          = $Isim;
            $GelenSoyisim       = $Soyisim;
            $GelenDogumTarigi   = $DogumTarihi;
            $GelenYas           = $Yas;
            $GelenSehir         = $Sehir;
            $GelenMeslek        = $Meslek;
            $GelenCinsiyet        = $Cinsiyet;

            $KisiKarti      = "Adınız  : " . $GelenIsim . "<br />" . "Soyadınız  : " . $GelenSoyisim . "<br />" .  "Doğum Tarihiniz  : " . $GelenDogumTarigi . "<br />" .  "Yaşınız  : " . $GelenYas . "<br />" .
            "Şehriniz  : " . $GelenSehir . "<br />" .  "Mesleğiniz  : " . $GelenMeslek . "<br />" .  "Cinsiyetiniz  : " . $GelenCinsiyet;


            return $KisiKarti;


        }

        $Islem1    =  IslemYap("Oguzhan", "Karahan", "05.07.1995", 27, "Kahramanmaraş",  "Yazılım Geliştirme Uzmanı", "Erkek");
        $Islem2    =  IslemYap("Büşra", "Karahan", "11.01.1998", 24, "Mersin",  "Banka Çalışanı", "Kadın");
        $Islem3    =  IslemYap("Ramazan", "Tunçbilek", "01.01.1992", 30, "Mersin",  "Çevre Mühendisi", "Erkek");


        echo $Islem2 . "<br /><br />";
        echo $Islem1 . "<br /><br />";
        echo $Islem3 ;



        ?>

</form>
</body>
</html>









