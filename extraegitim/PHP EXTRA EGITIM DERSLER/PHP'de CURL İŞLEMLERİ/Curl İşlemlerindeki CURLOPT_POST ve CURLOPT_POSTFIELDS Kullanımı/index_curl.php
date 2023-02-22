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

        CURLOPT_POST            : Başlatılmış bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlamak için kullanılır.

        CURLOPT_POSTFIELDS      : Başlatılmış bir CURL oturumunda istenilen URL adresine HTTP POST işleminde gönderilecek olan veri / verileri tanımlamak için kullanılır.


        */

        /*
        $Oturum   = curl_init();
        curl_setopt($Oturum, CURLOPT_URL, "http://localhost/ExtraEgitim/sonuc.php");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($Oturum, CURLOPT_POST, true);
        curl_setopt($Oturum, CURLOPT_POSTFIELDS, [
                "AdiSoyadi" => "Onur Tatlı",
                "EmailAdresi" => "onurtatli@gmail.com",
                "Telefon" => "0555 666 66 66",
                "Cinsiyet" => "Erkek",
                "Yas" => 35]);
        $Sonuc   =  curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;
        */



        //ÖRNEK 2 Dizi Halinde Yapılışı
        $Oturum   = curl_init();
        curl_setopt_array($Oturum, [
            CURLOPT_URL => "http://localhost/ExtraEgitim/sayfa.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                "AdiSoyadi" => "Onur Tatlı",
                "EmailAdresi" => "onurtatli@gmail.com",
                "Telefon" => "0555 666 66 66",
                "Cinsiyet" => "Erkek",
                "Yas" => 35
            ]
        ]);
        $Sonuc   =  curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;




        ?>





</body>
</html>









