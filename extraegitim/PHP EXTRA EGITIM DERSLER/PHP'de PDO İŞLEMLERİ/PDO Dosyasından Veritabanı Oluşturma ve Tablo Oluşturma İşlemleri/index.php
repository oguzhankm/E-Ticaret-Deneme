<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Extra Eğitim</title>
</head>

<body>

        <?php

       /*

       CREATE DATABASE      : MySQL sunucusuna yeni database ekleme işlemi yapmak için kullanılır.
       CREATE TABLE         : MySQL sunucusundaki database içerisine yeni bir tablo eklemek için kullanılır.

       */

        /*
        //ÖRNEK 1
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Sağlandı<br />";
        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("CREATE DATABASE deneme CHARACTER SET UTF8 COLLATE utf8_general_ci");
        if ($Sorgu !== false){
            echo "Database Başarıyla Oluşturuldu";
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;
        */



        /*
        //ÖRNEK 2
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=test; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Sağlandı<br />";
        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("CREATE TABLE ornek (
        
        id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
        adi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
        email varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE KEY,
        durumu tinyint(1) UNSIGNED NOT NULL,
        kayittarihi timestamp NOT NULL DEFAULT current_timestamp,
        yoneticiaciklamasi text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
        )
        
        ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
        if ($Sorgu){
            echo "Database Başarıyla Oluşturuldu";
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;
        */




        /*
        //ÖRNEK 3
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=test; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Sağlandı<br />";
        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->exec("CREATE TABLE ornekiki (
        
        id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
        adi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
        soyadi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
        email varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE KEY,
        durumu tinyint(1) UNSIGNED NOT NULL,
        kayittarihi timestamp NOT NULL DEFAULT current_timestamp,
        yoneticiaciklamasi text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
        )
        
        ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
        if ($Sorgu !== false){
            echo "Database Başarıyla Oluşturuldu";
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;
*/


        /*
        //ÖRNEK 4 Tablo Oluşturma ve İçeriğiyle Birlikte Kopyalama
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=test; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Sağlandı<br />";
        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $SorguA  =  $VeriTabaniBaglantisi->query("CREATE TABLE ornekyedek LIKE ornek");
        if ($SorguA){
            echo "Tablo Başarıyla Oluşturuldu<br />";

            $SorguB  =  $VeriTabaniBaglantisi->query("INSERT INTO ornekyedek SELECT * FROM ornek");
            if ($SorguB){
                echo "Kayıtlar Alındı<br />";
            }else{
                echo "Sorgu Hatası";
            }



        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;

        */




        //ÖRNEK 5 Tabloyu Başka Bir Veri Tabanına İçeriğiyle Birlikte Kopyalama
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Sağlandı<br />";
        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $SorguA  =  $VeriTabaniBaglantisi->query("CREATE TABLE extraegitim.ornekyedek LIKE test.ornek");
        if ($SorguA){
            echo "Tablo Başarıyla Oluşturuldu<br />";

            $SorguB  =  $VeriTabaniBaglantisi->query("INSERT INTO extraegitim.ornekyedek SELECT * FROM test.ornek");
            if ($SorguB){
                echo "Kayıtlar Alındı<br />";
            }else{
                echo "Sorgu Hatası";
            }



        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;






        ?>
</body>
</html>









