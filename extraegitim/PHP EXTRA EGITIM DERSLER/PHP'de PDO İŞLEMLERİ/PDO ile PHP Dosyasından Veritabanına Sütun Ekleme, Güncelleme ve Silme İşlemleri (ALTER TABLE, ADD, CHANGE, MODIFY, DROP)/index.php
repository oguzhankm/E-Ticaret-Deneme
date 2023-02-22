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

       ALTER TABLE          : MySQL sunucusuna yeni database içerisinde bulunan herhangi bir tablo ekleneceğişnş, herhangi bir sütunun silineceğini ve herhangi bir sütunun adının
       yada yapısının değiştirileceğini belirtmek için kullanılır.
       ADD / ADD COLUMN     : MySQL sunucundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun eklemek için kullanılır.
            FIRST           : MySQL sunucundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni sütunun diğer sütunların en başına eklenmesini belirtmek için kullanır
            AFTER           : MySQL sunucundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni sütunun belirtilecek olan sütundan sonra eklenmesini belirtmek için kullanır
       CHANGE / CHANGE COLUMN  : MySQL sunucundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun adını yada yapısını değiştirmek için kullanılır.
       MODIFY / MODIFY COLUMN  : MySQL sunucundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun yapısını değiştirmek için kullanılır.
       DROP / DROP COLUMN      : MySQL sunucundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunu silmek için kullanılır.

       */

/*
        //ÖRNEK 1
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Sağlandı<br />";
        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("ALTER TABLE uyeler ADD dogumtarihi int(4) NOT NULL AFTER yas");
        if ($Sorgu){
            echo "Sütun Başarıyla Eklendi";
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;
*/




/*
        //ÖRNEK 2
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Sağlandı<br />";
        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("ALTER TABLE uyeler CHANGE dogumtarihiniz dogumtarihi smallint(5) NOT NULL");
        if ($Sorgu){
            echo "Sütun Güncellendi";
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;
*/

        /*
        //ÖRNEK 3
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Sağlandı<br />";
        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("ALTER TABLE uyeler MODIFY dogumtarihi int(10) NOT NULL");
        if ($Sorgu){
            echo "Sütun  Yapısı Güncellendi";
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;
        */


        //ÖRNEK 3
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Sağlandı<br />";
        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("ALTER TABLE uyeler DROP dogumtarihi");
        if ($Sorgu){
            echo "Sütun Silindi";
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;







        ?>
</body>
</html>









