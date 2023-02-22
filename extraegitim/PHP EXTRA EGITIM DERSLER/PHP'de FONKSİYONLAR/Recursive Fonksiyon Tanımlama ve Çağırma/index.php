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


        echo "<br/> BURASI STANDART BİR DÖNGÜ YAPISI<br/>";

        $Baslangic = 1;

        while ($Baslangic <= 25){
            echo $Baslangic . "<br />";
            $Baslangic++;
        }


        echo "<br/>BURASO RECURSIVE (Kendi Kendini Çağıran) FONKSİYON YAPISI<br/>";

        function IslemYap($Sayi){

            if ($Sayi<=25){
                echo $Sayi . "<br />";

                IslemYap($Sayi+1);
            }
        }
        IslemYap(1);

        ?>

</form>
</body>
</html>









