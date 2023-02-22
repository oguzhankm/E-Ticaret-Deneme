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
        $Isimler    =   array("Oguzhan", "Volkan", "Onur", "Serkan");
        $Isimler[2]  =   "Ümit";
        $Isimler[1]  =  "Zafer";



        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        */

        /*
        //ÖRNEK 2
        $Isimler    =   array("HTML"=>"Oguzhan", "JS"=>"Volkan", "PHP"=>"Onur", "CSS"=>"Serkan");
        $Isimler["JS"]  =   "Ümit";




        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        */


        //ÖRNEK 3
        $Isimler            =   array("HTML"=>"Oguzhan", "JS"=>"Volkan", "PHP"=>"Onur", "CSS"=>"Serkan");
        $Isimler["JS"]      =   "Ümit";
        $Isimler["HTML"]    =   "Levent";




        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br><br>";


        echo $Isimler["PHP"] . "<br>";
        echo $Isimler["HTML"] . "<br>";
        echo $Isimler["JS"] . "<br>";
        echo $Isimler["CSS"];





        ?>
</body>
</html>