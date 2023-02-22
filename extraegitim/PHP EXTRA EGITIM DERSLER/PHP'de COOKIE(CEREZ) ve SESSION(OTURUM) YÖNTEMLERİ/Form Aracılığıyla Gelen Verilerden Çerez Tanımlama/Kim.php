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

        $Isim   = $_COOKIE["KullaniciAdi"];
        $Soyisim = $_COOKIE["KullaniciSoyadi"];

        echo "Merhaba " . $Isim . " " . $Soyisim . " nasılsın?";


        ?>

        <a href="index.php">Forma Geri Dön</a>



</body>
</html>
