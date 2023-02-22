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



       DISTINCT            : MySQL sunucundaki database içerisinde bulunan herhangibir tablonun verilerini okuma sırasında belirtilecek olan sütun/ sütunlara ait tekrar eden verilerin işleme dahil edere
       diğerlerinin işlem dışında bırakılmasını sağlamak için kullanılır.
       HAVING              :  MySQL sunucundaki database içerisinde bulunan herhangibir tablonun verilerini okuma sırasında belirtilecek olan sütun/ sütunlara ait tekrar eden verilerin gruplandırılmasını sağlamak için kullanılır.
       GROUP BY            :  MySQL sunucundaki database içerisinde bulunan herhangibir tablonun verilerini okuma sırasında belirtilecek olan sütun/ sütunlara ait tekrar eden verilerin GROUP BY
       ifadesi ile gruplandırılması sırasında koşul / koşullar tanımlamak / belirtmek için kullanılır.
       */

/*
        //ÖRNEK 1
        try {
            $VeritabaniBaglantisi  = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası <br />";
            echo "Hata Mesajı: " . $Hata->getMessage();
            die();
        }

        $Sorgu  = $VeritabaniBaglantisi->query("SELECT DISTINCT sehir FROM kayitlar", PDO::FETCH_ASSOC);
        if ($Sorgu){
            $KayitSayisi = $Sorgu->rowCount();
            if ($KayitSayisi>0){
                foreach ($Sorgu as $Satirlar){
                        echo $Satirlar["sehir"] . "<br />";
                }



            }else{
                echo "Kayıt Yok";
            }
        }else{
            echo "Bağlantı Hatası";
        }

        $VeritabaniBaglantisi = null;
*/

/*
        //ÖRNEK 2 DISTINCT Kullanımları
        try {
            $VeritabaniBaglantisi  = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası <br />";
            echo "Hata Mesajı: " . $Hata->getMessage();
            die();
        }

        $SorguA  = $VeritabaniBaglantisi->query("SELECT DISTINCT sehir FROM kayitlar", PDO::FETCH_ASSOC);
        if ($SorguA){
            $KayitSayisiA = $SorguA->rowCount();
            if ($KayitSayisiA>0){
                foreach ($SorguA as $SatirlarA){
                    echo $SatirlarA["sehir"] . "<br />";
                    $SorguB  = $VeritabaniBaglantisi->query("SELECT * FROM kayitlar WHERE sehir='" . $SatirlarA["sehir"]. "'", PDO::FETCH_ASSOC);

                        if ($SorguB){
                            $KayitSayisiB = $SorguB->rowCount();
                            if ($KayitSayisiB>0){
                                foreach ($SorguB as $SatirlarB){
                                    echo $SatirlarB["adisoyadi"] .  "<br />";
                                }
                            }else{
                                echo "Kayıt Yok";
                            }
                        }else{
                            echo "Sorgu Hatası";
                        }
                    echo "<br/>";


                }



            }else{
                echo "Kayıt Yok";
            }
        }else{
            echo "Bağlantı Hatası";
        }

        $VeritabaniBaglantisi = null;
*/


/*
        //ÖRNEK 3 GROUP BY Kullanımı
        try {
            $VeritabaniBaglantisi  = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası <br />";
            echo "Hata Mesajı: " . $Hata->getMessage();
            die();
        }

        $Sorgu  = $VeritabaniBaglantisi->query("SELECT * FROM kayitlar GROUP BY sehir", PDO::FETCH_ASSOC);
        if ($Sorgu){
            $KayitSayisi = $Sorgu->rowCount();
            if ($KayitSayisi>0){
                foreach ($Sorgu as $Satirlar){
                    echo $Satirlar["sehir"] . "<br />";
                    echo $Satirlar["yas"] . "<br />";
                }



            }else{
                echo "Kayıt Yok";
            }
        }else{
            echo "Bağlantı Hatası";
        }

        $VeritabaniBaglantisi = null;
*/


/*

        //ÖRNEK 4 GROUP BY Kullanımı
        try {
            $VeritabaniBaglantisi  = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası <br />";
            echo "Hata Mesajı: " . $Hata->getMessage();
            die();
        }

        $Sorgu  = $VeritabaniBaglantisi->query("SELECT sehir, SUM(siparistoplamtutari) AS ToplamTutar FROM kayitlar GROUP BY sehir", PDO::FETCH_ASSOC);
        if ($Sorgu){
            $KayitSayisi = $Sorgu->rowCount();
            if ($KayitSayisi>0){
                foreach ($Sorgu as $Satirlar){
                    echo $Satirlar["sehir"] . " : " . $Satirlar["ToplamTutar"] . "<br />";

                }



            }else{
                echo "Kayıt Yok";
            }
        }else{
            echo "Bağlantı Hatası";
        }

        $VeritabaniBaglantisi = null;
*/




        //ÖRNEK 4 HAVING Kullanımı
        try {
            $VeritabaniBaglantisi  = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası <br />";
            echo "Hata Mesajı: " . $Hata->getMessage();
            die();
        }

        $Sorgu  = $VeritabaniBaglantisi->query("SELECT sehir, SUM(siparistoplamtutari) AS ToplamTutar FROM kayitlar GROUP BY sehir HAVING ToplamTutar<6000", PDO::FETCH_ASSOC);
        if ($Sorgu){
            $KayitSayisi = $Sorgu->rowCount();
            if ($KayitSayisi>0){
                foreach ($Sorgu as $Satirlar){
                    echo $Satirlar["sehir"] . " : " . $Satirlar["ToplamTutar"] . "<br />";

                }



            }else{
                echo "Kayıt Yok";
            }
        }else{
            echo "Bağlantı Hatası";
        }

        $VeritabaniBaglantisi = null;



        ?>
</body>
</html>









