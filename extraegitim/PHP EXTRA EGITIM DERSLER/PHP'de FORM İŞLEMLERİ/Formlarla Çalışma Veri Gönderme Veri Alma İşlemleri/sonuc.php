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
        //ÖRNEK 1 $_GET[] ile form bilgileri çekme işlemi
        $GelenAdSoyadDegeri  =  $_GET["AdSoyad"];
        $GelenEmailAdresiDegeri = $_GET["EmailAdresi"];
        $GelenTelefonDegeri = $_GET["Telefon"];
        $GelenCinsiyetDegeri = $_GET["Cinsiyet"];
        $GelenYasDegeri = $_GET["Yas"];

        echo  "Adınız Soyadınız : " . $GelenAdSoyadDegeri ."<br />";
        echo  "E-Mail Adresiniz : " . $GelenEmailAdresiDegeri ."<br />";
        echo  "Telefonunuz : " . $GelenTelefonDegeri ."<br />";
        echo  "Cinsiyetiniz : " . $GelenCinsiyetDegeri ."<br />";
        echo  "Yaşınız : " . $GelenYasDegeri;
        */




        //ÖRNEK 2 $_POST[] ile form bilgileri çekme işlemi
        $GelenAdSoyadDegeri  =  $_POST["AdSoyad"];
        $GelenEmailAdresiDegeri = $_POST["EmailAdresi"];
        $GelenTelefonDegeri = $_POST["Telefon"];
        $GelenCinsiyetDegeri = $_POST["Cinsiyet"];
        $GelenYasDegeri = $_POST["Yas"];

        echo  "Adınız Soyadınız : " . $GelenAdSoyadDegeri ."<br />";
        echo  "E-Mail Adresiniz : " . $GelenEmailAdresiDegeri ."<br />";
        echo  "Telefonunuz : " . $GelenTelefonDegeri ."<br />";
        echo  "Cinsiyetiniz : " . $GelenCinsiyetDegeri ."<br />";
        echo  "Yaşınız : " . $GelenYasDegeri;




        ?>



</body>
</html>









