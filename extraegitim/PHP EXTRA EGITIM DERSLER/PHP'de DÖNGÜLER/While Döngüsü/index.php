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

        while()     : Döngü işlemini başlatır.

        Yapısı:
        while(Koşul){
            Kod Blokları
        }

        */

        /*
        //ÖRNEK1
        $BaslangicDegeri      =     50;

        while($BaslangicDegeri >= 1){

            echo "Döngü Çalışma Numarası: " . $BaslangicDegeri . "<br/>";

            $BaslangicDegeri--;

        }
        */


        /*
        //ÖRNEK2
        $BaslangicDegeri      =     1;

        while($BaslangicDegeri <= 100){

            echo "Döngü Çalışma Numarası: " . $BaslangicDegeri . "<br/>";

            $BaslangicDegeri++;

        }
        */



        /*
        //ÖRNEK3
        $BaslangicDegeri      =     100;

        while($BaslangicDegeri <= 1000){

            echo "Döngü Çalışma Numarası: " . $BaslangicDegeri . "<br/>";

            $BaslangicDegeri =  $BaslangicDegeri + 5;

        }
        */

        /*
        //ÖRNEK3 ÖNEMLİİİİİ
        $BaslangicDegeri      =     1;

        while($BaslangicDegeri <= 100){ // Dikkat Bu bir kısır döngüdür ve hiç bir şekilde kullanılmamalıdır.

            echo "Döngü Çalışma Numarası: " . $BaslangicDegeri . "<br/>";

            //$BaslangicDegeri++;        Burada emir kod olmazsa kısır döngüye girer. Çok dikkat edilecek.

        }
        */



        $Deger   =  1;


        while ($Deger <=100){
            echo $Deger . "<br/>";

            if ($Deger >= 50){
                $Deger  = $Deger + 5;
            }else{
                $Deger++;
            }
        }










        ?>

</form>
</body>
</html>