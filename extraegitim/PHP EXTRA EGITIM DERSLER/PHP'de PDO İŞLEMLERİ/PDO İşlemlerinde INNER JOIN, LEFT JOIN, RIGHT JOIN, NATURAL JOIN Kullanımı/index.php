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



       INNER JOIN          : MySQL sunucundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun eşleşen değerlerinin birbiri ile ilişkilendirilmesi için kullanılır.
       LEFT JOIN           : MySQL sunucundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun soldaki tabloya göre birbiri ile ilişkilendirilmesi için kullanılır.
       RIGHT JOIN          : MySQL sunucundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun sağdaki tabloya göre birbiri ile ilişkilendirilmesi için kullanılır.
       NATURAL JOIN        : MySQL sunucundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun eşleşen değerlerini tabloya göre birbiri ile otomatik ilişkilendirilmesi için kullanılır.
       USING               : MySQL sunucundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun birbirleri ile ilişkilendirilmesi sırasında ortak sütun koşulunu tanımlamak / belirtmek için kullanılır.
       ON                  : MySQL sunucundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun birbirleri ile ilişkilendirilmesi sırasında sütun koşulunu tanımlamak / belirtmek için kullanılır.
       */


/*
        //ÖRNEK 1 INNER JOIN KULLANMADAN ZORLU İLİŞKİLENDİRME
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");

        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $SorguA  =  $VeriTabaniBaglantisi->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);
        if ($SorguA){
                $KayitSayisi = $SorguA->rowCount();
                if ($KayitSayisi>0){
                    foreach ($SorguA as $SatirlarA){

                        $SorguB = $VeriTabaniBaglantisi->query("SELECT * FROM siparisler WHERE uyeid=" . $SatirlarA["id"],PDO::FETCH_ASSOC);
                            if ($SorguB){

                                $KayitSayisiB = $SorguB->rowCount();
                                if ($KayitSayisiB>0){
                                    foreach ($SorguB as $SatirlarB){
                                        echo $SatirlarA["id"] . " | " . $SatirlarA["adisoyadi"]  . " | " . $SatirlarA["email"]  . " | " . $SatirlarA["sifre"]  . " | " . $SatirlarA["telefon"] . " | " . $SatirlarA["yas"]
                                            . " | " . $SatirlarA["cinsiyet"]  . " | " . $SatirlarA["sehir"]  . " | " . $SatirlarA["kayittarihi"] . "<br/>";

                                        echo $SatirlarB["urunadi"] . " | " . $SatirlarB["urunfiyati"] . "<br />";
                                    }
                                }


                            }else{
                                echo "Sorgu Hatası B";
                            }


                    }
                }else{
                    echo "Kayıt Yok";
                }
        }else{
            echo "Sorgu Hatası";
        }

        $VeriTabaniBaglantisi  = null;
*/



        //ÖRNEK 1 INNER JOIN KULLANMADAN ZORLU İLİŞKİLENDİRME
        try {
            $VeriTabaniBaglantisi       = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");

        }catch (PDOException  $HataMesaji){
            echo "Veritabanı Bağlantı Hatası";
            echo "Hata Mesajı : " . $VeriTabaniBaglantisi->getMessage();
            die();
        }



        $Sorgu  =  $VeriTabaniBaglantisi->query("SELECT * FROM uyeler INNER JOIN siparisler ON uyeler.id = siparisler.uyeid INNER JOIN istatistikler ON uyeler.id = istatistikler.uyeid", PDO::FETCH_ASSOC);
        if ($Sorgu){
            $KayitSayisi = $Sorgu->rowCount();
            if ($KayitSayisi>0){
                foreach ($Sorgu as $Satirlar){
                    echo $Satirlar["id"] . " | " . $Satirlar["adisoyadi"]  . " | " . $Satirlar["email"]  . " | " . $Satirlar["sifre"]  . " | " . $Satirlar["telefon"] . " | " . $Satirlar["yas"]
                        . " | " . $Satirlar["cinsiyet"]  . " | " . $Satirlar["sehir"]  . " | " . $Satirlar["kayittarihi"] . " | " . $Satirlar["uyeid"] . " | " . $Satirlar["urunadi"] . " | " .
                        $Satirlar["urunfiyati"] . " | " . $Satirlar["siteyegirissayisi"]  . " | " . $Satirlar["siparissayisi"] . "<br/>";

                }


            }else{
                echo "Kayıt Yok";
            }
        }else{
            echo "Sorgu Hatası";
        }


        $VeriTabaniBaglantisi  = null;







        ?>
</body>
</html>









