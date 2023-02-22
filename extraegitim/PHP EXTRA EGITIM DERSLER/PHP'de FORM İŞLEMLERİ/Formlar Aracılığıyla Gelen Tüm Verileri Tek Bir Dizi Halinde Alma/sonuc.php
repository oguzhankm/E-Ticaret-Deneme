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
        $GelenIsimDegeri    = $_GET["Isim"];
        $GelenSoyisimDegeri    = $_GET["Soyisim"];
        $GelenEmailDegeri    = $_GET["EmailAdresi"];
        $GelenTelefonDegeri    = $_GET["Telefon"];


        echo "Adınız : " . $GelenIsimDegeri . "<br />";
        echo "Soyadınız : " . $GelenSoyisimDegeri . "<br />";
        echo "E-Mail Adresiniz : " . $GelenEmailDegeri . "<br />";
        echo "Telefonunuz : " . $GelenTelefonDegeri;


        $GelenTumDegerler   = $_GET;

        echo "<pre>";
        print_r($GelenTumDegerler);
        echo "</pre>";

        foreach ($GelenTumDegerler as $Anahtar => $Icerik){
            echo $Anahtar . " : " . $Icerik . "<br />";
        }
        */




        //ÖRNEK 2
        $GelenIsimDegeri    = $_POST["Isim"];
        $GelenSoyisimDegeri    = $_POST["Soyisim"];
        $GelenEmailDegeri    = $_POST["EmailAdresi"];
        $GelenTelefonDegeri    = $_POST["Telefon"];
        $GelenResimDegeri   = $_FILES["Resim"];


        echo "Adınız : " . $GelenIsimDegeri . "<br />";
        echo "Soyadınız : " . $GelenSoyisimDegeri . "<br />";
        echo "E-Mail Adresiniz : " . $GelenEmailDegeri . "<br />";
        echo "Telefonunuz : " . $GelenTelefonDegeri;


        $GelenTumDegerler   = $_POST;

        echo "<pre>";
        print_r($GelenTumDegerler);
        echo "</pre>";

        foreach ($GelenTumDegerler as $Anahtar => $Icerik){
            echo $Anahtar . " : " . $Icerik . "<br />";
        }

        echo "<br /><br /><br />";

        foreach ($GelenResimDegeri as $ResimAnahtar => $ResimIcerik){
            echo $ResimAnahtar . " : " . $ResimIcerik . "<br />";
        }


        ?>



</body>
</html>









