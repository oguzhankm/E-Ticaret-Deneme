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

       exec()            : MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işleminde etkilenen kayıt sayısını bulmak için kullanılır.
       query()           :  MySQL sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu işlemi sonucunda dönen tüm veri değerlerini bulur ve bulduğu
       değerlerden yeni bir dizi oluştururak, oluşturduğu dizi değerini geriye döndürür.
                 FETCH_ASSOC       : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarı olarak tanımlanır ve ilgili verilere sütun isimleri ile  erişilir.
                 FETCH_NUM         : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik tanımlanır (0,1,2,3) verilere sütun sıra numaraları ile ulaşılır.
                 FETCH_BOTH        : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anhtarları hem iligili tablonun sütun isimleri hemde PHP tarafından otomatik tanımlanır.
                 FETCH_OBJ         : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanumlanır ve ilgiili verilere sütun isimleri ile erilşilir.

       */


/*
        //ÖRNEK 1

        try {
            $VeriTabaniBaglantisi  =  new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Oluşturuldu<br />";
        }catch (PDOException $Hata){
            echo "Veri Tabanı Bağlantı Hatası";
            echo "Hata Açıklaması : " . $Hata->getMessage();
            die();
        }

        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($Sorgu);
        echo "</pre>";

        $VeriTabaniBaglantisi  = null;
*/


        //ÖRNEK 1

        try {
            $VeriTabaniBaglantisi  =  new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");
            echo  "Veritabanı Bağlantısı Oluşturuldu<br />";
        }catch (PDOException $Hata){
            echo "Veri Tabanı Bağlantı Hatası";
            echo "Hata Açıklaması : " . $Hata->getMessage();
            die();
        }

        $Sorgu  =  $VeriTabaniBaglantisi->exec("SELECT * FROM uyeler");// exec() metodu SELECT işlemlerinde kullanılmamalıdır.

        echo "İşlemde Etkilenen Kayıt Sayısı : " . $Sorgu;


        $VeriTabaniBaglantisi  = null;



        ?>
</body>
</html>









