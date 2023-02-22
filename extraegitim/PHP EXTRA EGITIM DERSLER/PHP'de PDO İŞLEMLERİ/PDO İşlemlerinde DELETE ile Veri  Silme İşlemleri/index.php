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



       UPDATE         : MySQL sunucundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırındaki sütun / sütunlara ait veriyi / verileri güncellemek için kullanılır.

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


        $Sil  =  $VeritabaniBaglantisi->query("DELETE FROM kisiler WHERE id='14'");
        if ($Sil){
            echo "Kayıtlar Silindi";
        }else{
            echo "Sorgu Hatası";
        }



        $VeritabaniBaglantisi = null;
*/



        //ÖRNEK 2
        try {
            $VeritabaniBaglantisi    = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $Hata->getMessage();
            die();
        }


        $Sorgu  =  $VeritabaniBaglantisi->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
        if ($Sorgu){
            $Sayi  =  $Sorgu->rowCount();
            if ($Sayi>0){
                foreach ($Sorgu as $Kayitlar){
                    echo $Kayitlar["id"] . " | " . $Kayitlar["adisoyadi"] . " | " . $Kayitlar["email"] . " | " . $Kayitlar["sifre"] . " | " . $Kayitlar["telefon"] . " | " . $Kayitlar["yas"] . " | " . $Kayitlar["adisoyadi"]
                        . " | " . $Kayitlar["cinsiyet"] . " | " . $Kayitlar["sehir"] . " | " . $Kayitlar["kayittarihi"] . "<a href='baglan.php?KayitIDsi=" . $Kayitlar["id"] . "'>SİL</a>". "<br />";

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









