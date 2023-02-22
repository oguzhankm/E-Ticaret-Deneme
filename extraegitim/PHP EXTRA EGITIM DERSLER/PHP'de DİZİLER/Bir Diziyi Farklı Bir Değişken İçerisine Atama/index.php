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
        //ÖRNEK1
        $Isimler    =       array("Volkan", "Hakan", "Onur");



        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br><br>";


        $Degerler   =  $Isimler;  //array("Volkan", "Hakan", "Onur"); gibi olur.
        $Degerler[]    =       "Levent";

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br><br>";
        */


        //ÖRNEK2
        $Isimler    =       array("PHP"=>"Volkan", "Hakan", "JS"=>"Onur");



        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br><br>";


        $Degerler   =  $Isimler;
        $Degerler["CSS"]    =       "Levent";
        $Degerler[]    =       "Ümit";
        $Degerler[]    =       "Yunus";

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br><br>";

        echo $Degerler["PHP"] . "<br>";
        echo $Degerler[0] . "<br>";
        echo $Degerler["JS"] . "<br>";
        echo $Degerler["CSS"] . "<br>";
        echo $Degerler[1] . "<br>";
        echo $Degerler[2];



        ?>
</body>
</html>