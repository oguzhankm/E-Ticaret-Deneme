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

        function Bir(){
            $Sayi = 0;
            $Sayi = $Sayi + 1;

            echo "Sayı Değeri : " . $Sayi .  "<br />";
        }
        Bir();
        Bir();
        Bir();
        Bir();
        Bir();


        echo  "<br /><br />";


        function Iki(){
            static $Rakam = 0;  //static ile sayı her zaman arttığı sayı olarak baz alınır oluşan değeri kabul edip kendine aktarır ve döndürür.
            $Rakam = $Rakam + 1;

            echo "Sayı Değeri : " . $Rakam . "<br/>";
        }
        Iki();
        Iki();
        Iki();
        Iki();
        Iki();


        ?>

</form>
</body>
</html>









