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

        CURLOPT_FILE        : Başlatılmış bir CURL oturumunda istenilen URL adresinden elde edilen içeriğin aktarılacağı dosyayı tanımlamak için kullanılır.


        */

        /*
         //ÖRNEK 1
        $Dosya  =  fopen("Deneme.txt", "w");
        $Oturum  = curl_init();
        curl_setopt($Oturum, CURLOPT_URL, "https://www.mynet.com");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($Oturum, CURLOPT_FILE, $Dosya);
        $Sonuc  =  curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;
        if ($Sonuc == 1){
            echo "Dosya Başarıyla İndirildi";
        }else{
            echo "Dosya İndirilirken Bir Hata Oluştu";
        }
        */



        //ÖRNEK 2
        $Dosya  =  fopen("Resim.jpg", "w");
        $Oturum  = curl_init();
        curl_setopt($Oturum, CURLOPT_URL, "https://cdn.pixabay.com/photo/2017/12/23/23/37/flag-of-turkey-3036191_960_720.jpg");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($Oturum, CURLOPT_FILE, $Dosya);
        $Sonuc  =  curl_exec($Oturum);
        curl_close($Oturum);
        echo $Sonuc;
        if ($Sonuc == 1){
            echo "Dosya Başarıyla İndirildi";
        }else{
            echo "Dosya İndirilirken Bir Hata Oluştu";
        }


        ?>

</body>
</html>









