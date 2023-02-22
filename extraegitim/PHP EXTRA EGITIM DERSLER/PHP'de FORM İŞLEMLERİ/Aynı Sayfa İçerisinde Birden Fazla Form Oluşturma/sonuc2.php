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

        $GelenAdSoyad  = $_GET["AdSoyad"];
        $GelenTelefon = $_GET["Telefon"];
        $GelenEmailAdres  = $_GET["EmailAdresi"];
        $GelenMesaj  = $_GET["Mesaj"];

        echo "Adınız Soyadınız : " . $GelenAdSoyad ."<br />";
        echo "Telefon Numaranız : " . $GelenTelefon ."<br />";
        echo "Email Adresiniz : " . $GelenEmailAdres ."<br />";
        echo "Mesajınız : " . $GelenMesaj;


        ?>



</body>
</html>









