<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Extra Eğitim</title>
</head>

<body>

        <?php

       /*

       PDO()            : Kendisine verilen parametreler doğrultusunda MySQL sunucusuna yeni bir bağlantı açmak için kullanılır.
       PDOException     : MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşması durumunda hatayı yakalamak için kullanılır.
       getMessage()     : MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşması durumunda hata açıklama değerini bularak bulduğu değeri geriye döndürür.

       */


/*
        //ÖRNEK 1
        $VeriTabaniBaglantisi  =  new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "roott", "");

        if ($VeriTabaniBaglantisi){ // Kontroller Bu şekilde kullanılmamalıdır.
            echo "Veri Tabanı Bağlantı Kuruldu";
        }else{
            echo "VeriTabanı Bağlantısı Kurulamadı";
        }

        $VeriTabaniBaglantisi  = null;

*/

        /*
        //ÖRNEK 2 Doğru Kullanım Hataları Daha Net Görebilmek için try-catch yapısını kullan.
        try {
            $VeriTabaniBaglantisi  =  new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "123456");
            echo "Veritabanı Bağlantısı Kuruldu";

        }catch (PDOException $HataMesaji) {
            echo "Veritabanı Bağlantı Hatası<br />";
            echo "Hata Açıklaması : " . $HataMesaji->getMessage();
            die();

        }

        $VeriTabaniBaglantisi  = null;
        */


        //ÖRNEK 3 (exec Kullanımı)
        try {
            $VeriTabaniBaglantisi  =  new PDO("mysql:host=localhost; dbname=extraegitim;", "root", "");
            $VeriTabaniBaglantisi->exec("SET CHARACTER SET UTF8");
            echo "Veritabanı Bağlantısı Kuruldu";

        }catch (PDOException $HataMesaji) {
            echo "Veritabanı Bağlantı Hatası<br />";
            echo "Hata Açıklaması : " . $HataMesaji->getMessage();
            die();

        }

        $VeriTabaniBaglantisi  = null;

        ?>
</body>
</html>









