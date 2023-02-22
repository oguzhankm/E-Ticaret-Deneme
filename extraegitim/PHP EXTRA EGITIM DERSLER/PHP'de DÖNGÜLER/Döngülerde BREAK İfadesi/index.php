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

        break    :   Döngünün çalışmasını sonlandırmak için kullanılır.

        */

        /*
        $baslangic  =  1;

        while ($baslangic  <= 1000){

            echo $baslangic . "<br />";

            if ($baslangic==20){
                break;
            }

            $baslangic++;

        }
        */


        /*
        for ($baslangic=1; $baslangic <= 1000; $baslangic++){



                echo $baslangic .   "<br />";

                if ($baslangic==25){
                    break;
                }

        }

        */

        $esyalar     =  array("Dolap", "Halı", "Masa", "Kilim", "Koltuk");

        foreach ($esyalar as $esya){

            echo $esya . "<br />";

            if ($esya=="Masa"){
                break;
            }

        }


        ?>

</form>
</body>
</html>