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
            //ÖRNEK 1
            try {
                $VeritabaniBaglantisi  =  new PDO("mysql:host=localhost;dbname=extraegitim; charset=UTF8", "root", "");
            }catch (PDOException $HataMesaji){
                echo "Bağlantı Hatası<br />";
                echo "Hata Mesajı : " . $HataMesaji->getMessage();
            }


            $Sorgu  =  $VeritabaniBaglantisi->query("SELECT COUNT(id) AS ToplamSatirSayisi FROM kayitlar");
            if ($Sorgu){

                  $Kayit  =  $Sorgu->fetch();
                  echo "Kayıt Sayısı : " . $Kayit["ToplamSatirSayisi"];

            }else{
                echo "Bağlantı Hatası";
            }


            $VeritabaniBaglantisi = null
         */




/*
        //ÖRNEK 2
        try {
            $VeritabaniBaglantisi  =  new PDO("mysql:host=localhost;dbname=extraegitim; charset=UTF8", "root", "");
        }catch (PDOException $HataMesaji){
            echo "Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $HataMesaji->getMessage();
        }


        $Sorgu  =  $VeritabaniBaglantisi->query("SELECT MIN(yas) AS EnKucukYas FROM kayitlar");
        if ($Sorgu){
            $KayitSayisi  = $Sorgu->rowCount();
            if ($KayitSayisi>0){
                $Kayit  =  $Sorgu->fetch();
                echo "Siteye Kayıtlı En Küçük Yaş : " . $Kayit["EnKucukYas"];
            }else{
                echo "Kayıt Yok";
            }

        }else{
            echo "Bağlantı Hatası";
        }


        $VeritabaniBaglantisi = null
*/

/*
        //ÖRNEK 3
        try {
            $VeritabaniBaglantisi  =  new PDO("mysql:host=localhost;dbname=extraegitim; charset=UTF8", "root", "");
        }catch (PDOException $HataMesaji){
            echo "Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $HataMesaji->getMessage();
        }


        $Sorgu  =  $VeritabaniBaglantisi->query("SELECT MAX(yas) AS EnBuyukYas FROM kayitlar");
        if ($Sorgu){
            $KayitSayisi  = $Sorgu->rowCount();
            if ($KayitSayisi>0){
                $Kayit  =  $Sorgu->fetch();
                echo "Siteye Kayıtlı En Büyük Yaş : " . $Kayit["EnBuyukYas"];
            }else{
                echo "Kayıt Yok";
            }

        }else{
            echo "Bağlantı Hatası";
        }


        $VeritabaniBaglantisi = null
*/




/*
        //ÖRNEK 4
        try {
            $VeritabaniBaglantisi  =  new PDO("mysql:host=localhost;dbname=extraegitim; charset=UTF8", "root", "");
        }catch (PDOException $HataMesaji){
            echo "Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $HataMesaji->getMessage();
        }


        $Sorgu  =  $VeritabaniBaglantisi->query("SELECT SUM(yas) AS YasToplami FROM kayitlar");
        if ($Sorgu){
            $KayitSayisi  = $Sorgu->rowCount();
            if ($KayitSayisi>0){
                $Kayit  =  $Sorgu->fetch();
                echo "Siteye Kayıtlı Yaşların Toplamı : " . $Kayit["YasToplami"];
            }else{
                echo "Kayıt Yok";
            }

        }else{
            echo "Bağlantı Hatası";
        }


        $VeritabaniBaglantisi = null
*/




        //ÖRNEK 5
        try {
            $VeritabaniBaglantisi  =  new PDO("mysql:host=localhost;dbname=extraegitim; charset=UTF8", "root", "");
        }catch (PDOException $HataMesaji){
            echo "Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $HataMesaji->getMessage();
        }


        $Sorgu  =  $VeritabaniBaglantisi->query("SELECT AVG(yas) AS YasOrtamasi FROM kayitlar");
        if ($Sorgu){
            $KayitSayisi  = $Sorgu->rowCount();
            if ($KayitSayisi>0){
                $Kayit  =  $Sorgu->fetch();
                echo "Siteye Kayıtlı Yaşların Ortalaması : " . $Kayit["YasOrtamasi"];
            }else{
                echo "Kayıt Yok";
            }

        }else{
            echo "Bağlantı Hatası";
        }


        $VeritabaniBaglantisi = null



        ?>
</body>
</html>









