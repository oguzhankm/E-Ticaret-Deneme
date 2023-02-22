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

        CURLOPT_NOBODY    : Başlatılmış bir CURL oturumunda istenilen URL adresinden elde edilen içeriğin body yada gövde alanının alınmasını ve çıktılanmasını kullanmak
        için kullanır.
        CURLOPT_HEADER    : Başlatılmış bir CURL oturumunda istenilen URL adresinden elde edilen içerik ile birlikte HTTP üst bilgisinde bulunması / alınnması gerektiğini belirtmek için kullanılır.
        CURLOPT_HTTPHEADER: Başlatılmış olan bir CURL oturumunda istenilen URL adresine  HTTP üst bilgisi göndermek için kullanılır.


        */

        /*
        //ÖRNEK1
        $Oturum     = curl_init();
        curl_setopt($Oturum, CURLOPT_URL,"https://www.mynet.com");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($Oturum, CURLOPT_NOBODY,true);
        curl_setopt($Oturum, CURLOPT_HEADER, true);
        $Sonuc  =  curl_exec($Oturum);
        curl_close($Oturum);

        echo nl2br($Sonuc);
        */

        /*
        //ÖRNEK2
        $Oturum     = curl_init();
        curl_setopt($Oturum, CURLOPT_URL,"http://localhost/ExtraEgitim/ornek.php");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($Oturum, CURLOPT_NOBODY,true);
        curl_setopt($Oturum, CURLOPT_HEADER, true);
        curl_setopt($Oturum, CURLOPT_HTTPHEADER, ["Güvenlik Kodu : 12345678ABCDEFG"]);

        $Sonuc  =  curl_exec($Oturum);
        curl_close($Oturum);

        $Parcala  =  explode("\n", $Sonuc);

       foreach ($Parcala as $Deger){
           echo $Deger . "<br />";
       }
        */


        //ÖRNEK3
        $Oturum     = curl_init();

        curl_setopt_array($Oturum,[
            CURLOPT_URL =>"http://localhost/ExtraEgitim/ornek.php",
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_HTTPHEADER => [
                "GuvenlikKodu: 12345678ABCDEFG"
                ]
            ]);

        $Sonuc  =  curl_exec($Oturum);
        curl_close($Oturum);

        echo nl2br($Sonuc);












        ?>


</body>
</html>









