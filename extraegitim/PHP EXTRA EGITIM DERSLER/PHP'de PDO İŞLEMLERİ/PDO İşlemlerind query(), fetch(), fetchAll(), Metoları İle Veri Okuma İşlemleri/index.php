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

       query()          : MySQL sunucusuna PDO ile açılmış bağlantı dahilinde yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak
       oluşturduğu dizi değerlerini geriye döndürür.
       fetch()          : MySQL sunusundaki database içerisinde bulunan herhangi bir tablonun tekil veri okuma işlemi için query metodu kullanılrak hazırlanmış olan query'in verilerini okumak
       için kullanılır. Ayrıca istenirse verilere erişim şekilde belirtilir.
       fetchAll()        : MySQL sunusundaki database içerisinde bulunan herhangi bir tablonun çoğul veri okuma işlemi için query metodu kullanılrak hazırlanmış olan query'in verilerini okumak
       için kullanılır. Ayrıca istenirse verilere erişim şekilde belirtilir.

                FETCH_ASSOC     : Tablonun verilerini okuma sırasında oluşturulacak olan dizide ilgili tablonun  sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
                FETCH_NUM       : Tablonun verilerini okuma sırasında oluşturulacak olan dizide ilgili tablonun  sütun isimleri dizinin anahtarları PHP tarafından otomatik olarak tanımlanır. (0,1,2,3) ve ilili
                verilere sütun sıra numaraları ile erişilir.
                FETCH_BOTH      : Tablonun verilerini okuma sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hemde PHP tarafından otomatik olarak tanımlanır ve ilgili verilere ister sütun isimleri
                ile ister sütun sıra numaraları ile erişilir.
                FETCH_OBJ       :  Tablonun verilerini okuma sırasında oluşturulacak olan nesenede ilgili tablonun  sütun isimleri nesnenin anahtarları  olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.


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


/*
        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler");
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar){
                echo "ID : " . $Satirlar["id"] . "<br />";
                echo "İSİM : " . $Satirlar["isim"] . "<br />";
                echo "YAŞ : " . $Satirlar["yas"] . "<br />";
                echo "BECERİLER : " . $Satirlar["beceriler"] . "<br />";
                echo "BECERİ SEVİYELERİ : " . $Satirlar["beceriseviyeleri"] . "<br /><br />";

            }
        }else{
            echo "Sorgu Hatası";
        }
*/

/*
        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler");
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar){
                echo "ID : " . $Satirlar["0"] . "<br />";
                echo "İSİM : " . $Satirlar["1"] . "<br />";
                echo "YAŞ : " . $Satirlar["2"] . "<br />";
                echo "BECERİLER : " . $Satirlar["3"] . "<br />";
                echo "BECERİ SEVİYELERİ : " . $Satirlar["4"] . "<br /><br />";

            }
        }else{
            echo "Sorgu Hatası";
        }
*/

/*
        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT isim, beceriler FROM kisiler");
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar){
                echo "İSİM : " . $Satirlar["isim"] . "<br />";
                echo "BECERİLER : " . $Satirlar["beceriler"] . "<br /><br/>";

            }
        }else{
            echo "Sorgu Hatası";
        }
*/

/*
        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler", PDO::FETCH_BOTH);
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar){
                echo "ID : " . $Satirlar["id"] . "<br />";
                echo "İSİM : " . $Satirlar["isim"] . "<br />";
                echo "YAŞ : " . $Satirlar["yas"] . "<br />";
                echo "BECERİLER : " . $Satirlar["beceriler"] . "<br />";
                echo "BECERİ SEVİYELERİ : " . $Satirlar["beceriseviyeleri"] . "<br /><br />";

            }
        }else{
            echo "Sorgu Hatası";
        }
*/

/*
        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler", PDO::FETCH_ASSOC);
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar){
                echo "ID : " . $Satirlar["id"] . "<br />";
                echo "İSİM : " . $Satirlar["isim"] . "<br />";
                echo "YAŞ : " . $Satirlar["yas"] . "<br />";
                echo "BECERİLER : " . $Satirlar["beceriler"] . "<br />";
                echo "BECERİ SEVİYELERİ : " . $Satirlar["beceriseviyeleri"] . "<br /><br />";

            }
        }else{
            echo "Sorgu Hatası";
        }
*/

/*
        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler", PDO::FETCH_NUM);
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar){
                echo "ID : " . $Satirlar["0"] . "<br />";
                echo "İSİM : " . $Satirlar["1"] . "<br />";
                echo "YAŞ : " . $Satirlar["2"] . "<br />";
                echo "BECERİLER : " . $Satirlar["3"] . "<br />";
                echo "BECERİ SEVİYELERİ : " . $Satirlar["4"] . "<br /><br />";

            }
        }else{
            echo "Sorgu Hatası";
        }
*/




/*
        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler", PDO::FETCH_OBJ);
        if ($Sorgu){
            foreach ($Sorgu as $Satirlar){
                echo "ID : " . $Satirlar->id . "<br />";
                echo "İSİM : " . $Satirlar->isim . "<br />";
                echo "YAŞ : " . $Satirlar->yas . "<br />";
                echo "BECERİLER : " . $Satirlar->beceriler . "<br />";
                echo "BECERİ SEVİYELERİ : " . $Satirlar->beceriseviyeleri . "<br /><br />";

            }
        }else{
            echo "Sorgu Hatası";
        }
*/



/*
        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler")->fetch();
        if ($Sorgu){

            echo "ID : " . $Sorgu["id"] . "<br />";
            echo "İSİM : " . $Sorgu["isim"] . "<br />";
            echo "YAŞ : " . $Sorgu["yas"] . "<br />";
            echo "BECERİLER : " . $Sorgu["beceriler"] . "<br />";
            echo "BECERİ SEVİYELERİ : " . $Sorgu["beceriseviyeleri"] . "<br /><br />";

        }else{
            echo "Sorgu Hatası";
        }
*/




        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM kisiler")->fetchAll();
        if ($Sorgu){

            foreach ($Sorgu as $Satirlar){
                echo "ID : " . $Satirlar["id"] . "<br />";
                echo "İSİM : " . $Satirlar["isim"] . "<br />";
                echo "YAŞ : " . $Satirlar["yas"] . "<br />";
                echo "BECERİLER : " . $Satirlar["beceriler"] . "<br />";
                echo "BECERİ SEVİYELERİ : " . $Satirlar["beceriseviyeleri"] . "<br /><br />";

            }

        }else{
            echo "Sorgu Hatası";
        }




        $VeriTabaniBaglantisi  = null;







        ?>
</body>
</html>









