<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <title>Ekstra Egitim</title>
</head>
<body>
        <?php


        /*

            range()       : Belirtilecek olan değer aralıkları doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.

        */

        /*
        //ÖRNEK 1
        $Sayilar   =   array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        echo "<pre>";
        print_r($Sayilar);
        echo "</pre><br>";

        $Islem  =  range(1, 100);

        echo "<pre>";
        print_r($Islem);
        echo "</pre><br>";
        */


        //ÖRNEK 1

        $Islem  =  range(1, 100, 10); //Birden başla yüze kadar on'ar artarak oluşturulur.

        echo "<pre>";
        print_r($Islem);
        echo "</pre><br>";






















        ?>
</body>
</html>