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
        mysqli_query()    : MySQL sunucusuna açılmıl olan bir bağlantı dahilinde yeni bir sorgu yapmak için kullanılır. Ayrıca istenirse sorgu işlemi ile alakalı
        tüm bilgileri bulur ve bulguğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
        query()           : MySQL sunucusuna nesnesel yapı ile açılmış olan bir bağlantı dahilinde yeni bir sorgu yapmak için kullanılır. Ayrıca istenirse sorgu işlemi ile alakalı
        tüm bilgileri bulur ve bulguğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
         */

        /*
        //ÖRNEK 1
        $VeriTabaniBaglantisi       = mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeriTabaniBaglantisi, "UTF8");
        if (mysqli_connect_errno()){
            echo "Bağlantı Hatası<br />";
            echo "Hata Açıklaması : " . mysqli_connect_error();
        }else{
            echo "Veri Tabanı Bağlantısı Sağlandı.";
        }

        $Sorgu  =  mysqli_query($VeriTabaniBaglantisi, "SELECT * FROM kayitlar");
        if ($Sorgu){
            echo "<pre>";
            print_r($Sorgu);
            echo "</pre>";
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

        $Sorgu    =  $VeriTabaniBaglantisi->query("SELECT * FROM  kayitlar");
        if ($Sorgu){
            echo "<pre>";
            print_r($Sorgu);
            echo "</pre>";
        }else{
            echo "Sorgu Hatası";
        }


        $VeriTabaniBaglantisi->close();

        ?>



</body>
</html>









