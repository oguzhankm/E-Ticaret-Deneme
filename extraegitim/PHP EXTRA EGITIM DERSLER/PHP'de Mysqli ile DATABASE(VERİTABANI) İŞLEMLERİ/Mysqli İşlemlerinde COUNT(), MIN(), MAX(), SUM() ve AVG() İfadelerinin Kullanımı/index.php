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
        INNER JOIN          :	MySQL sunucusundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun eşleşen değerlerinin birbirleri ile ilişkilendirilmesi için kullanılır.
        LEFT JOIN           :   MySQL sunucusundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun soldaki tabloya göre birbirleri ile ilişkilendirilmesi için kullanılır.
        RIGHT JOIN          :   MySQL sunucusundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun sağdaki tabloya göre birbirleri ile ilişkilendirilmesi için kullanılır.
        NATURAL JOIN        :   MySQL sunucusundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun eşleşen değerlerin birbirleri ile ilişkilendirilmesi için kullanılır.

        USING               :   MySQL sunucusundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun eşleşen değerlerin birbirleri ile ilişkilendirilmesi sırasında ortak sütun koşulunu
        tanımlamak / belirtmek için kullanılır.
        ON                  :    MySQL sunucusundaki database içerisinde bulunan herhangi iki ve ya daha fazla tablonun eşleşen değerlerin birbirleri ile ilişkilendirilmesi sırasında sütun koşulunu
        tanımlamak / belirtmek için kullanılır.


        */



/*
        //ÖRNEK1
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT COUNT(siparissayisi) AS ToplamSatir FROM kayitlar ");
        if($Sorgu){

            $KayitSayisi   =  mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){

                $Kayitlar  = mysqli_fetch_assoc($Sorgu);



                echo "Kayıt Sayısı  : " . $Kayitlar["ToplamSatir"] . "<br />";
            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);

        */

/*
        //ÖRNEK1
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT MIN(sehir) AS ToplamSatir FROM kayitlar ");
        if($Sorgu){

            $KayitSayisi   =  mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){

                $Kayitlar  = mysqli_fetch_assoc($Sorgu);



                echo "En küçük Değer  : " . $Kayitlar["ToplamSatir"] . "<br />";
            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);
*/

/*
        //ÖRNEK1
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT SUM(siparistoplamtutari) AS ToplamSatir FROM kayitlar ");
        if($Sorgu){

            $KayitSayisi   =  mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){

                $Kayitlar  = mysqli_fetch_assoc($Sorgu);



                echo "Toplam Sipariş Tutarı  : " . $Kayitlar["ToplamSatir"] . "<br />";
            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);
*/

        //ÖRNEK1
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT COUNT(yas) AS KisiSayisi, SUM(yas) AS ToplamYas, AVG(yas) AS ToplamSatir FROM kayitlar ");
        if($Sorgu){

            $KayitSayisi   =  mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){

                $Kayitlar  = mysqli_fetch_assoc($Sorgu);



                echo "Yaş Ortalaması  : " . $Kayitlar["ToplamSatir"] . "<br />";
                echo "Yaş Toplamı     : " . $Kayitlar["ToplamYas"] . "<br />";
                echo "Toplam Kişi     : " . $Kayitlar["KisiSayisi"] . "<br />";
                
            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);


        ?>
</body>
</html>









