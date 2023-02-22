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
          return       :  Fonksiyondan değer döndürmek için kullanılır.
        */

        /*
        //ÖRNEK 1
        function Islem(){
            $IsimSoyisim  = "Oguzhan Karahan";

            return $IsimSoyisim;
        }

        $Sonuc = Islem();
        echo  $Sonuc;
        */



        /*
        //ÖRNEK 2

        function Islem(){
            $Isim  = "Oguzhan";
            $Soyisim = "Karahan";
            $Şehir = "Kahramanmaraş";
            $Yaş= 27;
            $Meslek = "Yazılım Geliştirme Uzmanı";


            return array($Isim, $Soyisim, $Şehir, $Yaş, $Meslek);         //Bir Fonksiyon içerisinde return bir defa değer dönderebilir.
        }

        $Sonuc = Islem();

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre>";


        echo "İsim : " . $Sonuc[0] . "<br />";
        echo "Soyisim : " . $Sonuc[1] . "<br />";
        echo "Şehir : " . $Sonuc[2] . "<br />";
        echo "Yaş : " . $Sonuc[3] . "<br />";
        echo "Meslek : " . $Sonuc[4];

        */


        //ÖRNEK 2 Anonim Fonksiyonda çoklu değer döndürme

        $Islem  = function (){
            $Isim  = "Oguzhan";
            $Soyisim = "Karahan";
            $Şehir = "Kahramanmaraş";
            $Yaş= 27;
            $Meslek = "Yazılım Geliştirme Uzmanı";


            return array($Isim, $Soyisim, $Şehir, $Yaş, $Meslek);         //Bir Fonksiyon içerisinde return bir defa değer dönderebilir.
        };

        $Sonuc = $Islem();

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre>";


        echo "İsim : " . $Sonuc[0] . "<br />";
        echo "Soyisim : " . $Sonuc[1] . "<br />";
        echo "Şehir : " . $Sonuc[2] . "<br />";
        echo "Yaş : " . $Sonuc[3] . "<br />";
        echo "Meslek : " . $Sonuc[4];





        ?>

</form>
</body>
</html>