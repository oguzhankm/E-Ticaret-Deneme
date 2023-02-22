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

        CURLFile()        : Başlatılmış bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlandıktan sonra, CURLOPT_POSTFIELDS dahilinde karşı server'a dosya yüklemek için kullanılır.


        */


        $Oturum  = curl_init();
        curl_setopt($Oturum, CURLOPT_URL, "http://localhost/ExtraEgitim/sayfa.php");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($Oturum, CURLOPT_POST, true);
        curl_setopt($Oturum, CURLOPT_POSTFIELDS, [
                "Dosya"  => new CURLFile(__DIR__ . "/Yuklenecekler/Oğuzhan Resmi1.jpg", "img/jpg")
        ]);
        $Sonuc  =  curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;


        ?>




</body>
</html>









