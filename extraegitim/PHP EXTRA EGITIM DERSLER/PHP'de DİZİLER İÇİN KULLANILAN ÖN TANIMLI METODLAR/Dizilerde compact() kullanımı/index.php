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

            compact()       : Dizi içerisinde bulunan elemanı anahtar gibi görerek, daha önceden aynı isimle tanımlanmış olan değişkenlerden ilgili anahtarlara değer üretmek için kullanılır.

        */

        /*
        //ÖRNEK1
        $isim = "Oguzhan";
        $soyisim = "Karahan";
        $dogumtarihi = 1995;

        $Bilgiler   =   array("isim", "soyisim", "dogumtarihi");


        echo "<pre>";
        print_r($Bilgiler);
        echo "</pre><br>";

        $Sonuc = compact($Bilgiler);

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre><br>";
        */

        //ÖRNEK2
        $isim = "Oguzhan";
        $soyisim = "Karahan";
        $dogumtarihi = 1995;

        
        $Sonuc = compact("isim", "soyisim", "dogumtarihi"); //array("isim", "soyisim", "dogumtarihi");

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre><br>";
























        ?>
</body>
</html>