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
        //ÖRNEK 1

         foreach   :   Diziler için döngü işlemi başlatır.

        Yapısı:
        foreach(Dizi Değişkeni as Anahtar Atanacak Değişken Eleman Atanacak Değişken){

                Kod Blokları

        }

        */

        /*
        $renkler  =     array("Mavi", "Sarı", "Siyah", "Kırmızı", "Beyaz", "Gri", "Yeşil");

        print_r($renkler);


        echo "<br><br>";


        echo $renkler[0] . "<br />";
        echo $renkler[1] . "<br />";
        echo $renkler[2] . "<br />";                            // UZUN HALİ
        echo $renkler[3] . "<br />";
        echo $renkler[0] . "<br />";
        echo $renkler[4] . "<br />";
        echo $renkler[5] . "<br />";
        echo $renkler[6] . "<br />";



        echo "<br><br>";


        foreach ($renkler as $renk){                                        //KISA HALİ foreach döngüsü.
            echo $renk . "<br />";
        }
        */


        //ÖRNEK 2

        $renkler  =     array("Renk1"=>"Mavi", "Renk2"=>"Sarı", "Renk3"=>"Siyah", "Renk4"=>"Kırmızı", "Renk5"=>"Beyaz", "Renk6"=>"Gri", "Renk7"=>"Yeşil");

        foreach ($renkler as $AnahtarDegeri => $Yenirenk){
            echo "Anahtar İçeriği Değeri : <strong>" . $AnahtarDegeri . "</strong> Eleman İçeriği Değeri : <strong>" . $Yenirenk . "</strong><br />";
        }




        ?>

</form>
</body>
</html>