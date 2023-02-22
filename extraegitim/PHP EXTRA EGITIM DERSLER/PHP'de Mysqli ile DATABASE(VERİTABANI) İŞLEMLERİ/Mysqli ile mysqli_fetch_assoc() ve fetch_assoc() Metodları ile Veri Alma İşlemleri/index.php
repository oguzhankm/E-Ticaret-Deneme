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
        mysqli_fetch_assoc()	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini ilişkisel bir dizi halinde okumak için kullanılır.
        fetch_assoc()			:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile tüm verilerini ilişkisel bir dizi halinde okumak için kullanılır.
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

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler");
        if($Sorgu){

            $Kayit	=	mysqli_fetch_assoc($Sorgu);

            echo "<pre>";
            print_r($Kayit);
            echo "</pre>";

        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);
        */

        /*
        //ÖRNEK2
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler");
        if($Sorgu){

            while ($Kayit	=	mysqli_fetch_assoc($Sorgu)){


                echo "Kayıt ID'si : " . $Kayit["id"] ."<br />";
                echo "Kayıt İsmi : " . $Kayit["isim"] ."<br />";
                echo "Kayıt Yaşı : " . $Kayit["yas"] ."<br />";
                echo "Kayıt Becerileri : " . $Kayit["beceriler"] ."<br />";
                echo "Kayıt Beceri Seviyeleri : " . $Kayit["beceriseviyeleri"] ."<br /><br />";



            }

        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);
        */



        //ÖRNEK3
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT isim AS KullaniciAdi, beceriler AS Yetenekleri FROM kisiler");
        if($Sorgu){

            while ($Kayit	=	mysqli_fetch_assoc($Sorgu)){


                echo "Kayıt İsmi : " . $Kayit["KullaniciAdi"] ."<br />";
                echo "Kayıt Becerileri : " . $Kayit["Yetenekleri"] ."<br /><br />";



            }

        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);




        ?>
</body>
</html>









