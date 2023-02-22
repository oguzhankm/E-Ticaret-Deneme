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

        curl_setopt()            : Kensine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumuna seçenek eklemek için kullanılır.
        curl_setopt_array()      : Kensine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumuna dizi halinde seçenek / seçenekler eklemek için kullanılır.

                CURLOPT_URL                 : Başlatılmış bir curl oturumunda içeriğine ulaşılmak istenen URL adresini belirtmek için kullanılır.
                CURLOPT_RETURNTRANSFER      : Başlatılmış bir curl oturumunda istenilen URL'den elde edilen içeriğin doğrudan ekrana çıktılanmasını durdurarak belirtilecek olan değişkene aktarılmısını
                                              sağlamak için kullanılır.
                CURLOPT_TIMEOUT             : Başlatılmış bir curl oturumunda maksimum çalıştırılabilirlik süresini saniye cinsinden belirlemek için kullanılır.
                CURLOPT_TIMEOUT_MS          : Başlatılmış bir curl oturumunda maksimum çalıştırılabilirlik süresini milisaniye cinsinden belirlemek için kullanılır.(1sn = 1000ms)

        */



        /*
        //ÖRNEK1
        $Oturum     = curl_init();
        curl_setopt($Oturum, CURLOPT_URL,"https://www.mynet.com");
        curl_exec($Oturum);
        curl_close($Oturum);
        */


        /*
        //ÖRNEK2
        $Oturum     = curl_init();
        curl_setopt($Oturum, CURLOPT_URL,"https://www.sahibinden.com");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($Oturum, CURLOPT_TIMEOUT,90);
        $Sonuc  =   curl_exec($Oturum);
        curl_close($Oturum);

        echo $Sonuc;
        */



        //ÖRNEK1
        $Oturum     = curl_init();
        curl_setopt_array($Oturum,[CURLOPT_URL => "https://www.mynet.com", CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT =>90 ]);
        $Sonuc  = curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;








        ?>


</body>
</html>









