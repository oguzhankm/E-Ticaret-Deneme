<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <title>Ekstra Egitim</title>
</head>
<body>

        <?php
/*
        $DBHostAdresi       =  "localhost";
        $DBKullaniciAdi     =  "root";
        $DBKullaniciSifre   =  "";
        $DBAdi              = "extraegitim";

        $DBBaglantisi       = mysqli_connect($DBHostAdresi, $DBKullaniciAdi, $DBKullaniciSifre, $DBAdi);


        echo "<pre>";
        print_r($DBBaglantisi);
        echo "</pre>";





        mysqli_close($DBBaglantisi);
*/



        $DBBaglantisi       = mysqli_connect("localhost", "root", "", "extraegitim");

        if ($DBBaglantisi){

            echo "Veri Tabanına Bağlanıldı";

        }else{
            echo "Veri Tabanına Bağlanılamadı.";

        }







        mysqli_close($DBBaglantisi);
        ?>



</body>
</html>









