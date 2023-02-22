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


        function ParaBirimi($Birim, $Tutar){
            if ($Birim == "Türk Lirası"){
                $Kur = 1;
            }elseif ($Birim == "Amerikan Doları"){
                $Kur = 18.45;
            }elseif ($Birim == "Euro"){
                $Kur = 18.11;
            }else{
                $Kur = 0;
            }

            return Hesapla($Birim, $Kur, $Tutar);
        }


        function Hesapla($BirimBilgisi, $KurBilgisi, $TutarBilgisi){
            $Sonuc =  $KurBilgisi * $TutarBilgisi;
            echo $TutarBilgisi . " Tutarlı " . $BirimBilgisi . " Karşılığı Türk Lirası Değeri : " . $Sonuc;
        }

        ParaBirimi("Amerikan Doları", "198");


        ?>

</form>
</body>
</html>









