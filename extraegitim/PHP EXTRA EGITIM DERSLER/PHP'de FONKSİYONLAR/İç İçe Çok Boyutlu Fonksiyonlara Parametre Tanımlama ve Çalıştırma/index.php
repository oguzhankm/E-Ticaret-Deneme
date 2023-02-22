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
        //ÖRNEK1
        function Bir($Isim, $Soyisim){

            function Iki($Meslek, $Yas){

                echo "Yaş : " . $Yas . "<br />" .  "Meslek : " . $Meslek;
            }
           echo "İsim Soyisim: ".  $Isim . " " . $Soyisim . "<br />";

        }

        Bir("Oguzhan", "Karahan");
        Iki("Yazılım Geliştirici", 27);
        */


        //ÖRNEK2

        function Bir($Isim="Adınızı Giriniz", $Soyisim="Soyadınızı Giriniz"){

            function Iki($Meslek="Meslegi Giriniz", $Yas="Yaşınızı Giriniz"){

                return "Yaş : " . $Yas . "<br />" .  "Meslek : " . $Meslek;
            }
            return "İsim Soyisim: ".  $Isim . " " . $Soyisim . "<br />";

        }

        $IsimSoyisimBilgisi  =  Bir("Oguzhan", "Karahan");
        $YasveMeslekBilgisi  =  Iki("Yazılım Geliştirici", 27);

        echo $IsimSoyisimBilgisi;
        echo $YasveMeslekBilgisi;


        ?>

</form>
</body>
</html>









