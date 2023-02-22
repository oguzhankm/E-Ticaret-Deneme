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



        prepare()               : MySQL sunucundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre query hazırlamak için kullanılır.
        binParam()              : MySQL sunucundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre prepare()m metodu kullanılarak hazırlanmış olan query'i derlemek için kullanılır.
        bindValue()             : MySQL sunucundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre prepare()m metodu kullanılarak hazırlanmış olan query'i derlemek için kullanılır.
            PDO::PARAM_BOOL     : Boolean
            PDO::PARAM_NULL     : Null
            PDO::PARAM_INT      : Integer
            PDO::PARAM_STR      : String
        execute()               : MySQL sunucundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre prepare()m metodu kullanılarak hazırlanmış olan query'i çalıştırmak için kullanılır.
        fetch()                 : MySQL sunucundaki database içerisinde bulunan herhangi bir tablonun tekil veri okuma işlemi için prepare() ile hazırlanmış execute kullanılarak çalıştırılmış
        ve sonucları alınmış query'nin verilerini okumak için kullanılır. Ayrıca istenirse verilere erişim şeklide belirtilebilir.
        fetchAll()              : MySQL sunucundaki database içerisinde bulunan herhangi bir tablonun çoğul veri okuma işlemi için prepare() ile hazırlanmış execute kullanılarak çalıştırılmış
        ve sonucları alınmış query'nin verilerini okumak için kullanılır. Ayrıca istenirse verilere erişim şeklide belirtilebilir.
            FETCH_ASSOC         : İlgili verilerilere sütunun adı ile ulaşılır.
            FETCH_NUM           : Dizinin Anahtarları PHP tarafında tanımlanır (0,1,2,3)
            FETCH_BOTH          : İlgili verilere hem sütun adı ile hemde PHP tarafından oluşturulan anahtarlar ile ulaşılır
            FETCH_OBJ           : İlgili tablonun sütun isimleri nesene özellikleri ile erişilir.
        */

/*
        //ÖRNEK 1
        try {
            $VeritabaniBaglantisi    = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $Hata->getMessage();
            die();
        }


        $Sorgu  =  $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler");
        $Sorgu->execute();
        if ($Sorgu){
            $KayitSayisi  =  $Sorgu->rowCount();
            if ($KayitSayisi>0){
                foreach ($Sorgu as $Satirlar) {
                    echo $Satirlar["id"] . " | " . $Satirlar["adisoyadi"] . " | " . $Satirlar["email"] . " | " . $Satirlar["sifre"] . " | " . $Satirlar["telefon"] . " | " . $Satirlar["yas"] . " | " . $Satirlar["cinsiyet"]
                        . " | " . $Satirlar["sehir"] . " | " . $Satirlar["kayittarihi"] . " <br/> ";
                }

            }else{
                echo "Kayıt Yok";
            }




        }else{
            echo "Sorgu Hatası";
        }



        $VeritabaniBaglantisi = null;
*/


/*
        //ÖRNEK 2
        try {
            $VeritabaniBaglantisi    = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $Hata->getMessage();
            die();
        }


        $Sorgu  =  $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler", array(PDO::FETCH_ASSOC));
        $Sorgu->execute();
        if ($Sorgu){
            $KayitSayisi  =  $Sorgu->rowCount();
            if ($KayitSayisi>0){
                foreach ($Sorgu as $Satirlar) {
                    echo $Satirlar["id"] . " | " . $Satirlar["adisoyadi"] . " | " . $Satirlar["email"] . " | " . $Satirlar["sifre"] . " | " . $Satirlar["telefon"] . " | " . $Satirlar["yas"] . " | " . $Satirlar["cinsiyet"]
                        . " | " . $Satirlar["sehir"] . " | " . $Satirlar["kayittarihi"] . " <br/> ";
                }

            }else{
                echo "Kayıt Yok";
            }




        }else{
            echo "Sorgu Hatası";
        }



        $VeritabaniBaglantisi = null;
*/



/*
        //ÖRNEK 3
        try {
            $VeritabaniBaglantisi    = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $Hata->getMessage();
            die();
        }


        $Sorgu  =  $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler");
        $Sorgu->execute();
        if ($Sorgu){
            $KayitSayisi  =  $Sorgu->rowCount();
            if ($KayitSayisi>0){
                $Kayit = $Sorgu->fetch(PDO::FETCH_ASSOC);

                    echo $Kayit["id"] . " | " . $Kayit["adisoyadi"] . " | " . $Kayit["email"] . " | " . $Kayit["sifre"] . " | " . $Kayit["telefon"] . " | " . $Kayit["yas"] . " | " . $Kayit["cinsiyet"]
                        . " | " . $Kayit["sehir"] . " | " . $Kayit["kayittarihi"] . " <br/> ";


            }else{
                echo "Kayıt Yok";
            }




        }else{
            echo "Sorgu Hatası";
        }



        $VeritabaniBaglantisi = null;
*/




        //ÖRNEK 4
        try {
            $VeritabaniBaglantisi    = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $Hata->getMessage();
            die();
        }


        $Sorgu  =  $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler");
        $Sorgu->execute();
        if ($Sorgu){
            $KayitSayisi  =  $Sorgu->rowCount();
            if ($KayitSayisi>0){
                $Kayitlar = $Sorgu->fetchAll(PDO::FETCH_OBJ);
                foreach ($Kayitlar as $Kayit) {

                    echo $Kayit->id . " | " . $Kayit->adisoyadi . " | " . $Kayit->email . " | " . $Kayit->sifre . " | " . $Kayit->telefon . " | " . $Kayit->yas . " | " . $Kayit->cinsiyet
                        . " | " . $Kayit->sehir . " | " . $Kayit->kayittarihi . " <br/> ";
                }

            }else{
                echo "Kayıt Yok";
            }




        }else{
            echo "Sorgu Hatası";
        }



        $VeritabaniBaglantisi = null;




        ?>
</body>
</html>









