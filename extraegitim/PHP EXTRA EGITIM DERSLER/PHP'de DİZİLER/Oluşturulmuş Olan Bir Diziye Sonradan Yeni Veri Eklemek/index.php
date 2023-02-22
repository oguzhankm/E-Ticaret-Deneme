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
        //ÖRNEK 1
        $Degerler   =   array("Oguzhan", "Hakan", "Volkan");
        $Degerler[]  = "Serkan";
        $Degerler[]  = "Ümit";
        $Degerler[]  = "Levent";

        echo "<pre>";
        print_r($Degerler);
        echo "</pre>";
        */

        /*
        //ÖRNEK 2
        $Degerler   =   ["Bir"=>"Oguzhan", "Iki"=>"Hakan", "Uc"=>"Volkan"];
        $Degerler[]  = "Serkan";
        $Degerler[]  = "Ümit";
        $Degerler[]  = "Levent";

        echo "<pre>";
        print_r($Degerler);
        echo "</pre>";
        */

        //ÖRNEK 3
        $Degerler   =   array("Dört"=>"Oguzhan", "Hakan", "Volkan");
        $Degerler["Bir"]  = "Serkan";
        $Degerler["Iki"]  = "Ümit";
        $Degerler["Uc"]  = "Levent";

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br><br>";


        echo  $Degerler["Bir"] . "<br>";
        echo  $Degerler[0] . "<br>";
        echo  $Degerler["Iki"];


        ?>
</body>
</html>