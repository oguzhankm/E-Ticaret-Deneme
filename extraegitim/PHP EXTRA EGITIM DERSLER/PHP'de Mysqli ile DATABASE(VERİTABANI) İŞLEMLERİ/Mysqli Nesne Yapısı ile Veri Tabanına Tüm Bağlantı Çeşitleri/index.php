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
        set_charset()       : Kendisine parametre olarak verilen değer doğrultusunda, daha öncden nesnesel yapı ile açılmış olan MySQL bağlantısına
        varsayılan istemci karakter setini atamak / tanımlamak için kullanılır.
        select_db()         : Kendisine parametre olarak verilen değer doğrultusunda, daha öncden nesnesel yapı ile açılmış olan MySQL bağlantıs üzerinden
        istenilen veritabanı bağlantısını seçmek için kullanılır.
        connect_errno()     : MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşması durumunda hata kodu değerini bularak, bulduğu değeri geriye döndürür.
        connect_error()     : MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşması durumunda hata açıklama değerini bularak, bulduğu değeri geriye döndürür
        close()             : Daha önceden nesnesel yapı ile açılmış olan MySQL bağlantısını kapatmak için kullanılır.

        */

        /*
        $VeriTabaniHostAdresi       = "localhost";
        $VeriTabaniKullaniciAdi     = "root";
        $VeriTabaniKullaniciSifresi = "";
        $VeriTabaniAdi              = "extraegitim";
        */

        /*
        $VeriTabaniBaglantisi       = new mysqli("localhost", "root", "");
        $VeriTabaniBaglantisi->set_charset("UTF8");

        if ($VeriTabaniBaglantisi->connect_errno){
            echo "Veri Tabanı Bağlantısı Oluşturulamadı.<br/>";
            echo "MySQL Hata Açıklaması : . " . $VeriTabaniBaglantisi->connect_error;
        }else{
            echo "Veri Tabanı Bağlantısı Oluşturuldu.";
            $VeriTabaniBaglantisi->select_db("extraegitim");

        }



        $VeriTabaniBaglantisi->close();
        */


        //ÖRNEK2
        $VeriTabaniBaglantisi       = new mysqli("localhost", "roeot", "", "extraegitim");
        $VeriTabaniBaglantisi->set_charset("UTF8");

        if ($VeriTabaniBaglantisi->connect_errno){


            die("Veri Tabanına Bağlanılamadı.");


            echo "Veri Tabanı Bağlantısı Oluşturulamadı.<br/>";
            echo "MySQL Hata Açıklaması : . " . $VeriTabaniBaglantisi->connect_error;
        }else{
            echo "Veri Tabanı Bağlantısı Oluşturuldu.";


        }



        $VeriTabaniBaglantisi->close();







        ?>



</body>
</html>









