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

              CURLOPT_COOKIE        : Başlatılmış bir CURL oturumunda istenilen URL adresine HTTP isteğinde kullanılacak olan yeni cookie / cookieler oluşturmak için kullanılır.
              CURLOPT_COOKIEJAR     : Başlatılmış bir CURL oturumu sonlandırıldığında /kapatıldığında daha önceden oluşmuş olan cookilerin çerezlerin kaydedildiği dosyayı tanımlamak için kullanılır.
              CURLOPT_COOKIEFILE    : Başlatılmış bir CURL oturumunda istenilen URL adresinde kullanılacak olan cookie'lerin tutulduğu dosyayı belirtmek ve içeriğindeki değerleri karşı server'a iletmek için kullanılır.

        */

        $Oturum  = curl_init();
        curl_setopt($Oturum, CURLOPT_URL, "http://localhost/ExtraEgitim/sonuc.php");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($Oturum, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($Oturum, CURLOPT_POST, true);
        curl_setopt($Oturum, CURLOPT_POSTFIELDS, ["KullaniciAdi" => "Volkan", "KullaniciSifre" => "12345" ]);
        curl_setopt($Oturum, CURLOPT_COOKIE, "Kullanici=Volkan");
        curl_setopt($Oturum, CURLOPT_COOKIEJAR, __DIR__ . "/cerez.txt");



        $Sonuc  =  curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;


        ?>



</body>
</html>









