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

        $GelenDosya     = $_FILES["Dosya"];

        $DosyaninAdi            = $_FILES["Dosya"]["name"];
        $DosyaninTuru           = $_FILES["Dosya"]["type"];
        $DosyaninTempAdi        = $_FILES["Dosya"]["tmp_name"];
        $DosyaninHataDurumu     = $_FILES["Dosya"]["error"];
        $DosyaninBoyutu         = $_FILES["Dosya"]["size"];


        $Yol         =      "Resimler/";

        $DosyaninYoluVeAdi  = $Yol.$DosyaninAdi;





        if (move_uploaded_file($DosyaninTempAdi, $DosyaninYoluVeAdi)){
                echo "Dosyanız Başarıyla Yüklendi. <br />";
                echo "Dosyanın Adı: " . $DosyaninAdi . "<br/>";
                echo "Dosyanın Türü : " . $DosyaninTuru . "<br/>";
                echo "Dosyanın Geçici Dizini ve Adı : " . $DosyaninTempAdi . "<br/>";
                echo "Dosyanın Hata Durumu : " . $DosyaninHataDurumu . "<br/>";
                echo "Dosyanın Boyutu : " . $DosyaninBoyutu . "<br/>";
                echo "<img src= '{$DosyaninYoluVeAdi}' >";
        }else{
            echo "HATA!! Dosya Yükleme Esnasında Bir Sorun Oluştu! <br />";
        }


        ?>



</body>
</html>









