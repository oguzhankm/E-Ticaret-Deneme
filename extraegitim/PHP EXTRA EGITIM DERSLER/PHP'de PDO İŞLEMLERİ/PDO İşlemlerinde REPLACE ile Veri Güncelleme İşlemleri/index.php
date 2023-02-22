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


        //ÖRNEK 1
        try {
            $VeritabaniBaglantisi    = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası<br />";
            echo "Hata Mesajı : " . $Hata->getMessage();
            die();
        }


        $Degistir  =  $VeritabaniBaglantisi->query("UPDATE kisiler SET isim=REPLACE(isim, 'Sermin ÇAYIROĞLU', 'Sermin') WHERE id='14'");
        if ($Degistir){
            echo "Değerler Değiştirildi";
        }else{
            echo "Sorgu Hatası";
        }



        $VeritabaniBaglantisi = null;


        ?>
</body>
</html>









