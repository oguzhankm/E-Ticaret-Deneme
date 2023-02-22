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
        //ÖRNEK 1
        $VeriTabaniBaglantisi       = new mysqli("localhost", "root", "");
        mysqli_set_charset($VeriTabaniBaglantisi, "UTF8");
        if (mysqli_connect_errno()){
            echo "Veri Tabanı Bağlantısı Sağlanamadı";
        }else{
            echo "Veri Tabanı Bağlantısı Sağlandı.";
        }

        $SorguBir    =  mysqli_query($VeriTabaniBaglantisi, "SELECT * FROM extraegitim.kayitlar");
        $SorguIki    =  mysqli_query($VeriTabaniBaglantisi, "SELECT * FROM oguzhankarahan.uyeler");



        mysqli_close($VeriTabaniBaglantisi);
        */


        //ÖRNEK 2
        $VeriTabaniBaglantisi       = new mysqli("localhost", "root", "");
        $VeriTabaniBaglantisi->set_charset("UTF8");
        if ($VeriTabaniBaglantisi->connect_errno){
            echo "Veri Tabanı Bağlantısı Sağlanamadı";
            echo "Hata : " . $VeriTabaniBaglantisi->connect_error . "<br/>";
        }else{
            echo "Veri Tabanı Bağlantısı Sağlandı. <br />";
        }

        $SorguBir    =  $VeriTabaniBaglantisi->query("SELECT * FROM extraegitim.kayitlar");
        $SorguIki    =   $VeriTabaniBaglantisi->query("SELECT * FROM oguzhankarahan.uyeler");



        mysqli_close($VeriTabaniBaglantisi);

        ?>



</body>
</html>









