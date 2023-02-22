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

        CURLOPT_SSL_VERIFYHOST    : Başlatılmış bir CURL oturumunda istenilen URL ile veri alışverişi sırasında SSL eş sertifikasını tanımlamak için kullanılır.
                            0     : Ortak bir isim özelliği değeri aranmaz
                            1     : SSL eş sertifikasında ortak bir isim varlığına bakılır.
                            2     : SSL eş sertifikasında ortak bir ismin varlığı ile birlikte server'ın ana bilgisayar adının da eşleşmesine bakılır.
        CURLOPT_SSL_VERYPEER      : Başlatılmış bir CURL oturumunda istenilen URL ile veri alışverişi sırasında SSL eş sertifikasını doğrulamak için kullanılır.
        CURLOPT_SSL_VERSION       : Başlatılmış bir CURL oturumunda istenilen URL ile veri alışverişi sırasında SSL eş sertifikasının sürümünü belirtmek için kullanılır.
                            0     : Default
                            1     : TLSv1
                            2     : SSLv2
                            3     : SSLv3
                            4     : TLSv1_0
                            5     : TLSv1_1
                            6     : TLSv1_2


        */


        //Sadece Sanal pos uygulamasında bunlar kullanılıcak.
        
        $Oturum   =   curl_init();
        curl_setopt($Oturum, CURLOPT_URL, "https://www.hepsiburada.com");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($Oturum, CURLOPT_SSL_VERIFYHOST, 1);
        curl_setopt($Oturum, CURLOPT_SSLVERSION, 3);
        curl_setopt($Oturum, CURLOPT_SSL_VERIFYPEER, 0);
        $Sonuc   = curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;


        ?>



</body>
</html>









