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


        //ÖRNEK 1
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=test; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Sağlandı<br />";
        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("RENAME TABLE ornek TO oguzhan");
        if ($Sorgu !== false){
            echo "Tablo Adı Başarıyla Oluşturuldu";
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;







        ?>
</body>
</html>









