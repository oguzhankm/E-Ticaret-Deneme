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



      LIMIT          : MySQL sunucundaki database içerisinde bulunan herhangi bir tablonun işlem esnasındaki verilerini işlemek yerine sadece belirtilen adet veya aralıklar kadar işlemek
       istenildiğini belirtmek için kullanılır.
      ORDER BY       : MySQL sunucundaki database içerisinde bulunan herhangi bir tablonun verilerine işlem esnasında hangi sıra ve ya sıralar dahilinde erişilmek istenildiğini belirtmek için kullanılır.


       */


/*
        //ÖRNEK 1
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");

        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler LIMIT 5, 5", PDO::FETCH_ASSOC);
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar) {
                echo $Satirlar["id"] . " | " .  $Satirlar["isim"] . " | " .  $Satirlar["yas"] . " | " .  $Satirlar["beceriler"] . " | " .  $Satirlar["beceriseviyeleri"] . "<br /><br />";
                }
        }else{
            echo "Sorgu Hatası";
        }





        $VeriTabaniBaglantisi  = null;
*/




        //ÖRNEK 1
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");

        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler ORDER BY yas ASC", PDO::FETCH_ASSOC);
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar) {
                echo $Satirlar["id"] . " | " .  $Satirlar["isim"] . " | " .  $Satirlar["yas"] . " | " .  $Satirlar["beceriler"] . " | " .  $Satirlar["beceriseviyeleri"] . "<br /><br />";
            }
        }else{
            echo "Sorgu Hatası";
        }





        $VeriTabaniBaglantisi  = null;






        ?>
</body>
</html>









