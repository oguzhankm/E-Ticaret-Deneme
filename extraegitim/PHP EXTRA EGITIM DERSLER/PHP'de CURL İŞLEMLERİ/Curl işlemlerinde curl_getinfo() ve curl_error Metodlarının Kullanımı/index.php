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

        curl_getinfo    : Kensine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunun tüm bağlantı bilgilerini bulur ve bulduğu değerlerden
        yen, bir dizi oluşturarak, olulturduğu dizi değerini geriye döndürür
        curl_error      : Kensine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunun olası bir hata ile karşılaşması durumunda hata değerini bulur ve bulduğu değerlerden
        değeri geriye döndürür
        */


        /*
        //ÖRNEK1
        $Oturum     = curl_init("https://www.extraegitim.com");
        curl_exec($Oturum);
        $Bilgiler   = curl_getinfo($Oturum);
        echo  "<pre>";
        print_r($Bilgiler);
        echo  "</pre>";

        curl_close($Oturum);
        */


        //ÖRNEK 2
        $Oturum     = curl_init("https://www.extraegitim15151.com");
        curl_exec($Oturum);
        $Hata   = curl_error($Oturum);
        echo  $Hata;
        curl_close($Oturum);






        ?>


</body>
</html>









