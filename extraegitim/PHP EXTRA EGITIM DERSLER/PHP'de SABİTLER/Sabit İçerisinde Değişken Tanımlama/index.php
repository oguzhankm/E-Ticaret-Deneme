<?php
session_start();
?>


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
//Örnek 1
        $Deger   =  "Büşra Karahan";

        define("ISIM", "$Deger");

        echo ISIM;
*/
/*
//Örnek 2
        $Deger   =  "Büşra Karahan";

        const ISIM = $Deger; // Hata, Sabit define() fonksiyonu tanımlanmadığı sürece sabit içerisinde değişken kullanılamaz.


        echo ISIM;
*/

//Örnek 3
        $DegerBir   =  "Büşra Karahan";
        $DegerIki   =  "Oguzhan Karahan";

        define("CIKTI", $DegerBir ." - " . $DegerIki);

        echo CIKTI;


?>
</body>
</html>