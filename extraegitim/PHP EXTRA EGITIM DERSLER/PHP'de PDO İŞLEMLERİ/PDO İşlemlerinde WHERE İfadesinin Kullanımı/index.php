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



      WHERE          : MySQL sunucundaki database içerisinde bulunan herhangi bir tablonun işlem esnasındaki verilerini işlemek yerine sadece koşula bağlı verilerin işlemek istenildiğini
       belirtmek için kullanılır.



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



        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler WHERE id>= 2  and id<=6", PDO::FETCH_ASSOC);
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar) {
                echo $Satirlar["id"] . " | " .  $Satirlar["isim"] . " | " .  $Satirlar["yas"] . " | " .  $Satirlar["beceriler"] . " | " .  $Satirlar["beceriseviyeleri"] . "<br /><br />";
                }
        }else{
            echo "Sorgu Hatası";
        }





        $VeriTabaniBaglantisi  = null;
*/




/*

        //ÖRNEK 2
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");

        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler WHERE isim LIKE '%han'", PDO::FETCH_ASSOC);
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar) {
                echo $Satirlar["id"] . " | " .  $Satirlar["isim"] . " | " .  $Satirlar["yas"] . " | " .  $Satirlar["beceriler"] . " | " .  $Satirlar["beceriseviyeleri"] . "<br /><br />";
            }
        }else{
            echo "Sorgu Hatası";
        }


        $VeriTabaniBaglantisi  = null;

*/




        //ÖRNEK 2
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");

        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler WHERE FIND_IN_SET('java', beceriler) ", PDO::FETCH_ASSOC);
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









