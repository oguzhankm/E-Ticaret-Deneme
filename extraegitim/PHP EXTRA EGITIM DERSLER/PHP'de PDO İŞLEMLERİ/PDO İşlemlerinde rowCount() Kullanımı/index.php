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



       rowCount()          : MySQL sunucundaki database içerisinde bulunan herhangi bir tablonun toplam kayıt sayısını bulmak veya işlem yapıldığında etkilenen kayıt sayısını belirtmek için kullanılır.



       */



        //ÖRNEK 1
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");

        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM uyeler WHERE sehir='Ankara' ", PDO::FETCH_ASSOC);
        if ($Sorgu){
            $KayitSayisi  =  $Sorgu->rowCount();
            echo "Üyeler tablo içerisinde bulunan kayıt sayısı : " . $KayitSayisi . "<br />";
        }else{
            echo "Sorgu Hatası";
        }





        $VeriTabaniBaglantisi  = null;





        ?>
</body>
</html>









