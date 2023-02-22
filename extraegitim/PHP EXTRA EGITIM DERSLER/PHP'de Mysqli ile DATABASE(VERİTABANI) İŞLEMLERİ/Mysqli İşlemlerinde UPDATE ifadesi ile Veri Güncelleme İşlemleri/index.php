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

        UPDATE          :	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir  kaydını içeren satırdaki sütun / sütunlara ait veriyi /verileri güncellemek için kullanılır.


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


        $Guncelle   =  mysqli_query($VeritabaniBaglantisi, "UPDATE uyeler SET adisoyadi='A1', sifre='A3' ");
        //Dikkat koşul belirtilmediği sürece tablonun tüm değerleri güncellenecektir.
        if ($Guncelle){
            echo "Kayıtlar Güncellendi";
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


        $Guncelle   =  mysqli_query($VeritabaniBaglantisi, "UPDATE uyeler SET adisoyadi='İlyas Bombacı', sifre='555222',
        email='saksafoncu@ilyas.com', telefon='05545454545', yas='35', cinsiyet='Erkek', sehir='Muğla' WHERE id=12");
        if ($Guncelle){
            echo "Kayıtlar Güncellendi";
        }else{
            echo "Sorgu Hatası";
        }


        mysqli_close($VeritabaniBaglantisi);

*/


        //ÖRNEK3 Form Aracılığıyla Yapılan Örnek
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }


        $Sorgu   =  mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler");
        if ($Sorgu){
            $KayitSayisi  = mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){
                while ($Kayitlar=mysqli_fetch_assoc($Sorgu)){

                    echo $Kayitlar["id"] . " | " . $Kayitlar["adisoyadi"] . " | " . $Kayitlar["email"] . " | " . $Kayitlar["sifre"] . " | " . $Kayitlar["telefon"] . " | " . $Kayitlar["yas"] . " | " .
                        $Kayitlar["cinsiyet"] . " | " . $Kayitlar["sehir"] . " | " . $Kayitlar["kayittarihi"] . " | <a href='guncelle.php?id=". $Kayitlar["id"] ."'>Güncelle</a><br />";

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









