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

        $Islem = function (){
            echo "Oguzhan Karahan";                 //Anonim fonksiyonu nasıl otomatik çalıştırırız? Aşağıda
        };

        $Islem();

        echo "<br />";

        ($Islem = function (){
            echo "haydar";
        })();

        echo "<br />";

        echo ($Islem = function (){
            return "Büşra";
        })();

        echo "<br /><br /><br />";


        //Otomatik Çalışan Fonksiyonlarda Parametre Tanımlama ve Çalıştırma

        ($IslemYap = function ($Isim, $Soyisim){
            echo $Isim . " " . $Soyisim;
        })("Oguzhan", "Karahan");


        echo "<br /><br /><br />";


        ($IslemYap  =  function ($Isim="", $Soyisim="", $Yas=""){
            if ($Isim !=""){
                echo "İsim : " . $Isim . "<br />";
            }

            if ($Soyisim !=""){
                echo "Soyisim : " . $Soyisim . "<br />";
            }

            if ($Yas !=""){
                echo "Yaş : " . $Yas . "<br />";
            }


        })("Mehmet", "Karaca", 25);

        ?>

</form>
</body>
</html>









