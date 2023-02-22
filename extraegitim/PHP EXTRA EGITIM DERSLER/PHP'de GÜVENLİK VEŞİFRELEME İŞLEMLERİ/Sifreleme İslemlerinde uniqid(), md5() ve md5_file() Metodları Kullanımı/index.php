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

        uniqid()        : Mikrosaniye cinsinden geçerli zamana dayalı olarak belirtilen örnek ile benzersiz / eşsiz bir değer üreterek geriye döndürür.
        md5()           : Belirtilecek olan içeriğin md5 özetinin hesaplayıp bularak bulduğu değeri geriye döndürür.
        md5_file()      : Belirtilecek olan dosyanın md5 özetinin hesaplayıp bularak bulduğu değeri geriye döndürür.


        */


        /*
        //ÖRNEK 1
        $Deger      = "Volkan Alakent";
        $Olustur    =  uniqid($Deger, true);

        echo $Olustur;
        */


        /*
        //ÖRNEK 2
        $Sifre     = "123456";
        $Olustur    =  md5($Sifre);

        echo $Olustur;
        */

        /*
        //ÖRNEK 3
        $Dosya      = "VYSL3890 kopya.jpg";
        $Olustur    =  md5($Dosya);

        echo $Olustur;
        */



        //ÖRNEK 3

        $Olustur    =  md5(uniqid(mt_rand())); // Asla tekrarlanmayan bulunamayacak şifreleme

        echo $Olustur;




        ?>


</body>
</html>









