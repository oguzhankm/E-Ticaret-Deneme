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

        REPLACE          :	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir  kaydını içeren satırdaki sütun / sütunlara ait veriyi /verileri tam veya kısmi olarak değiştirmek için kullanılır.


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


        $Guncelle   =  mysqli_query($VeritabaniBaglantisi, "UPDATE yorumlar SET yorummetni=REPLACE(yorummetni, '<br />', '\n' ) ");

        if ($Guncelle){
            echo "Kayıtlar Başarıyla Güncellendi";
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


        $Guncelle   =  mysqli_query($VeritabaniBaglantisi, "UPDATE yorumlar SET yorummetni=REPLACE(yorummetni, 'ğ', 'g' ) WHERE id=2 ");

        if ($Guncelle){
            echo "Kayıtlar Başarıyla Güncellendi";
        }else{
            echo "Sorgu Hatası";
        }


        mysqli_close($VeritabaniBaglantisi);




        ?>
</body>
</html>









