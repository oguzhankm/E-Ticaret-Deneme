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
        CREATE DATABASE
        CREATE TABLE
        */


/*

        $VeriTabaniBaglantisi   =  mysqli_connect("localhost", "root", "" ,"extraegitim");
        mysqli_set_charset($VeriTabaniBaglantisi, "UTF8");

        if (mysqli_connect_errno()){
            echo "Veri Tabanı Bağlantısı Sağlanamadı" . "<br />";
            echo "Hata : " . mysqli_connect_error() . "<br />";
        }else{
            echo  "Veri Tabanı Bağlantısı Sağlandı";
        }


        $Sorgu  =  mysqli_query($VeriTabaniBaglantisi, "CREATE TABLE yenitablo LIKE kayitlar ");

        if ($Sorgu){
            echo "Tablo Oluşturuldu <br />";
            $SorguIki = mysqli_query($VeriTabaniBaglantisi, "INSERT INTO yenitablo SELECT * FROM kayitlar");
            if ($SorguIki){
                echo "Tablo İçerikleri Oluşturuldu <br />";
            }else{
                echo "Sorgu Hatası";
            }
        }else{
            echo "Sorgu Hatası";
        }


        mysqli_close($VeriTabaniBaglantisi);


        */

        //ÖRNEK 2
        $VeriTabaniBaglantisi       = new mysqli("localhost", "root", "", "extraegitim");
        $VeriTabaniBaglantisi->set_charset("UTF8");
        if ($VeriTabaniBaglantisi->connect_errno){
            echo "Bağlantı Hatası<br />";
            echo "Hata Açıklaması : " . $VeriTabaniBaglantisi->connect_error;
        }else{
            echo "Veri Tabanı Bağlantısı Sağlandı. <br />";
        }

        $Sorgu    =  $VeriTabaniBaglantisi->query( "CREATE TABLE oguzhankarahan.yenitablo LIKE  extraegitim.kayitlar");
        if ($Sorgu){
            echo "Tablo Oluşturuldu <br />";
            $SorguIki = mysqli_query($VeriTabaniBaglantisi, "INSERT INTO oguzhankarahan.yenitablo SELECT * FROM extraegitim.kayitlar");
            if ($SorguIki){
                echo "Tablo İçerikleri Oluşturuldu <br />";
            }else{
                echo "Sorgu Hatası";
            }
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi->close();

        ?>



</body>
</html>









