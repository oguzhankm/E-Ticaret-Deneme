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

        $Deger = "Oguzhan Karahan";

        $Sonuc = gettype($Deger);

        echo $Deger . "<br/>";

        echo "Veri Türü : " . $Sonuc;

        echo "<br/><br/>";


        $Deger2 = 8.22;

        $Sonuc2 = gettype($Deger2);

        echo $Deger2 . "<br/>";

        echo "Veri Türü : " . $Sonuc2;



        echo "<br/><br/>";


        $Deger3 = true;

        $Sonuc3 = gettype($Deger3);

        echo $Deger3 . "<br/>";

        echo "Veri Türü : " . $Sonuc3;


        echo "<br/><br/>";


        $Deger4 = array("Volkan", 23, 9.5, true);

        $Sonuc4 = gettype($Deger4);

        echo "<pre>";
        print_r($Deger4);
        echo "</pre>";

        echo "Veri Türü : " . $Sonuc4;


        echo "<br/><br/>";


        class Deneme{
            public $Isim = "Oguzhan Karahan";
        }

        $Islem = new Deneme;

        $Sonuc5 = gettype($Islem);

        echo $Islem->Isim . "<br/>";

        echo "Veri Türü : " . $Sonuc5;

        ?>

</form>
</body>
</html>









