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

        CURLOPT_FOLLOWLOCATION    : Başlatılmış bir CURL oturumunda istenilen URL adresine ait server'ın HTTP başlığının bir parçası olarak gönderdiği location başlığını izlyebilmek için kullanılır.


        */




        //ÖRNEK1
        $Oturum     = curl_init();
        curl_setopt($Oturum, CURLOPT_URL,"https://www.extraegitim.com");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($Oturum, CURLOPT_FOLLOWLOCATION,true);
        $Sonuc  =  curl_exec($Oturum);
        curl_close($Oturum);

        echo $Sonuc;











        ?>


</body>
</html>









