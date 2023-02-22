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

        CURLOPT_USERAGENT    : Başlatılmış bir CURL oturumunda istenilen URL adresie HTTP isteğinde kullanılacak olan web browser ının tanımlanmasını ve ilgili browser'dan
        erişim sağlandığını belirtmek için kullanılır.
        CURLOPT_REFERER      : Başlatılmış bir CURL oturumunda istenilen URL adresie HTTP isteğinde kullanılacak olan referabs / gönderen site URL adresini belirtmek için kullanılır.



        */


        /*
        $Oturum  = curl_init();

        curl_setopt_array($Oturum, [
                CURLOPT_URL => "http://localhost/ExtraEgitim/sayfa.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36"
            ]);



        $Sonuc    = curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;
        */



        /*
        $Oturum  = curl_init();

        curl_setopt_array($Oturum, [
            CURLOPT_URL => "https://www.sahibinden.com",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERAGENT => "Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Mobile/15E148 Safari/604.1"
        ]);
        $Sonuc    = curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;
        */


        $Oturum  = curl_init();

        curl_setopt_array($Oturum, [
            CURLOPT_URL => "http://localhost/ExtraEgitim/sayfa.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_REFERER => "http://localhost/ExtraEgitim/"
        ]);
        $Sonuc    = curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;


        ?>



</body>
</html>









