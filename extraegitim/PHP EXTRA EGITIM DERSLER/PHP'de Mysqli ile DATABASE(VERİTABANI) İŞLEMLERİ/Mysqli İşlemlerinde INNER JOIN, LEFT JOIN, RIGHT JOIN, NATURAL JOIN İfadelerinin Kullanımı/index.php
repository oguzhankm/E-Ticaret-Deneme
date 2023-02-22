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

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler INNER JOIN istatistikler ON uyeler.id = istatistikler.id INNER JOIN siparisler ON uyeler.id  = siparisler.id");
        if($Sorgu){

            $KayitSayisi = mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){
                while ($Kayitlar=mysqli_fetch_assoc($Sorgu)){


                    echo "Üyenin ID Değeri : " . $Kayitlar["id"] . "<br />";
                    echo "Üyenin İsim Soyisim Değeri : " . $Kayitlar["adisoyadi"] . "<br />";
                    echo "Üyenin Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
                    echo "Üyenin Şehir Değeri : " . $Kayitlar["sehir"] . "<br />";
                    echo "Üyenin Siteye Giriş Sayısı : " . $Kayitlar["siteyegirissayisi"] . "<br />";
                    echo "Üyenin Sipariş Sayısı Değeri : " . $Kayitlar["siparissayisi"] . "<br />";
                    echo "Üyenin Aldığı Ürün Değeri : " . $Kayitlar["urunadi"] . "<br />";
                    echo "Üyenin Aldığı Ürün Fiyatı Değeri : " . $Kayitlar["urunfiyati"] . "<br /><br />";


                }
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

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT uyeler.id AS UyeID, uyeler.adisoyadi AS UyeAdSoyad, uyeler.yas AS UyeYas, uyeler.sehir AS UyeSehir,
       istatistikler.id AS IstatistiklerID, istatistikler.uyeid AS IstatistiklerUyeID, istatistikler.siteyegirissayisi AS IstatistikGirisSayisi, istatistikler.siparissayisi AS IstatistikSiparisSayisi,
       siparisler.id AS SiparisID, siparisler.uyeid AS SiparisUyeID, siparisler.urunadi AS SiparisUrunAdi, siparisler.urunfiyati AS SiparisUrunFiyati FROM uyeler INNER JOIN istatistikler ON uyeler.id = istatistikler.uyeid INNER JOIN siparisler ON uyeler.id  = siparisler.uyeid");
        if($Sorgu){

            $KayitSayisi = mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){
                while ($Kayitlar=mysqli_fetch_assoc($Sorgu)){

                    echo "Üyenin ID Değeri : " . $Kayitlar["UyeID"] . "<br />";
                    echo "Üyenin İsim Soyisim Değeri : " . $Kayitlar["UyeAdSoyad"] . "<br />";
                    echo "Üyenin Yaş Değeri : " . $Kayitlar["UyeYas"] . "<br />";
                    echo "Üyenin Şehir Değeri : " . $Kayitlar["UyeSehir"] . "<br />";
                    echo "Üyenin Siteye Giriş Sayısı : " . $Kayitlar["IstatistikGirisSayisi"] . "<br />";
                    echo "Üyenin Sipariş Sayısı Değeri : " . $Kayitlar["IstatistikSiparisSayisi"] . "<br />";
                    echo "Üyenin Aldığı Ürün Değeri : " . $Kayitlar["SiparisUrunAdi"] . "<br />";
                    echo "Üyenin Aldığı Ürün Fiyatı Değeri : " . $Kayitlar["SiparisUrunFiyati"] . "<br /><br />";


                }
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









