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


        $GelenAdiSoyadi         =  $_GET["AdSoyad"];
        $GelenHobiler        =  $_GET["Hobiler"];

        echo "Adınız Soyadınız : " . $GelenAdiSoyadi . "<br />";
        echo "Hobileriniz : " . "<br />";
        foreach ($GelenHobiler as $Hobileriniz){

                echo $Hobileriniz . "<br />";

        }

        








        ?>



</body>
</html>









