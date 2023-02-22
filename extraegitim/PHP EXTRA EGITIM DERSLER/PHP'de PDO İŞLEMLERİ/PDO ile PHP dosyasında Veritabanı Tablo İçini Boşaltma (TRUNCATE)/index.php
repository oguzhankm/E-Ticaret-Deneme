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

       TRUNCATE          : MySQL sunucusuna yeni database içerisinde bulunan herhangi bir tablo ekleneceğişnş, herhangi bir sütunun silineceğini ve herhangi bir sütunun adının

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



        $Sorgu  =  $VeriTabaniBaglantisi->query("TRUNCATE TABLE uyeler ");
        if ($Sorgu){
            echo "Tablonun içi boşaltıldı";
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;







        ?>
</body>
</html>









