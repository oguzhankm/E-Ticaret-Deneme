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


        $Saat  =  12;


        if (($Saat>=0) and ($Saat<=6)){

            if ($Saat==0){
                echo "İyi Geceler. Saat Şu Anda  00:00";
            }elseif ($Saat==1){
                echo "İyi Geceler. Saat Şu Anda  01:00";
            }elseif ($Saat==2){
                echo "İyi Geceler. Saat Şu Anda  02:00";
            }elseif ($Saat==3){
                echo "İyi Geceler. Saat Şu Anda  03:00";
            }elseif ($Saat==4){
                echo "İyi Geceler. Saat Şu Anda  04:00";
            }elseif ($Saat==5){
                echo "İyi Geceler. Saat Şu Anda  05:00";
            }elseif ($Saat==6){
                echo "İyi Geceler. Saat Şu Anda  06:00";
            }else{
                echo "Bilinmeyen Bir Hata Oluştu.";
            }

        }elseif ((($Saat>6) and ($Saat<=9))){

            if ($Saat==7){
                echo "İyi Geceler. Saat Şu Anda  07:00";
            }elseif ($Saat==8){
                echo "İyi Geceler. Saat Şu Anda  08:00";
            }elseif ($Saat==9){
                echo "İyi Geceler. Saat Şu Anda  09:00";
            }else{
                echo "Bilinmeyen Bir Hata Oluştu.";
            }
        }elseif ((($Saat>9) and ($Saat<=17))){
            if ($Saat==10){
                echo "İyi Geceler. Saat Şu Anda  10:00";
            }elseif ($Saat==11){
                echo "İyi Geceler. Saat Şu Anda  11:00";
            }elseif ($Saat==12){
                echo "İyi Geceler. Saat Şu Anda  12:00";
            }elseif ($Saat==13){
                echo "İyi Geceler. Saat Şu Anda  13:00";
            }elseif ($Saat==14){
                echo "İyi Geceler. Saat Şu Anda  14:00";
            }elseif ($Saat==15){
                echo "İyi Geceler. Saat Şu Anda  15:00";
            }elseif ($Saat==16){
                echo "İyi Geceler. Saat Şu Anda  16:00";
            }elseif ($Saat==17){
                echo "İyi Geceler. Saat Şu Anda  17:00";
            }else{
                echo "Bilinmeyen Bir Hata Oluştu.";
            }
        }elseif ((($Saat>17) and ($Saat<=23))){
            if ($Saat==18){
                echo "İyi Geceler. Saat Şu Anda  18:00";
            }elseif ($Saat==19){
                echo "İyi Geceler. Saat Şu Anda  19:00";
            }elseif ($Saat==20){
                echo "İyi Geceler. Saat Şu Anda  20:00";
            }elseif ($Saat==21){
                echo "İyi Geceler. Saat Şu Anda  21:00";
            }elseif ($Saat==22){
                echo "İyi Geceler. Saat Şu Anda  22:00";
            }elseif ($Saat==23){
                echo "İyi Geceler. Saat Şu Anda  23:00";
            }else{
                echo "Bilinmeyen Bir Hata Oluştu.";
            }
        }else{
            echo "Saat Geçersiz Bir Değer İçeriyor.";

        }






        ?>
</body>
</html>