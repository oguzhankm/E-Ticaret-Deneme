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

        curl_init       : Yeni bir curl oturumu başlatmak / tanımlamak için kullanılır.
        curl_exec       : Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan CURL oturumunu çalıştırmak için kullanılır.
        curl_close      : Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan CURL oturumunu sonlandırmak için kullanılır.

        */


        $ch      = curl_init("https://www.mynet.com/");
        curl_exec($ch);
        curl_close($ch);




        ?>


</body>
</html>









