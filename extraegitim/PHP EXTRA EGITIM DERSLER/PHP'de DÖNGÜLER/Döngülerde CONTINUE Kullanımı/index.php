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

        continue    :   Döngünün belli bir kısmının atlanarak, çalışmakta olan döngünün bir sonraki işleme devam etmesi için kullanılır.

        */


        /*
        $Sayi  =  0;

        while ($Sayi  <= 50){
            $Sayi++;

            if (($Sayi>10) and ($Sayi<=20)){
                continue;
            }


            echo $Sayi . "<br />";


        }
        */



        /*
        for ($Sayi=1; $Sayi <= 50; $Sayi++){


            if (($Sayi>10) and ($Sayi<=20)){
                continue;
            }
            echo $Sayi . "<br />";


        }
        */


        $esyalar     =  array("Dolap", "Halı", "Masa", "Kilim", "Koltuk");

        foreach ($esyalar as $esya){

            if (($esya == "Masa") or ($esya == "Kilim")){
                continue;
            }

            echo $esya . "<br />";


        }


        ?>

</form>
</body>
</html>