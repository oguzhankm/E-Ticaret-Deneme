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
        define("DEGERLER", array("volkan", "oguzhan", "karahan", "hakan"));

        echo "<pre>";
        print_r(DEGERLER);
        echo "<pre/>";
        */

        /*
        //ÖRNEK 2
        const DEGERLER  =  array("volkannn", "oguzhannn", "karahannn", "hakannn");

        echo "<pre>";
        print_r(DEGERLER);
        echo "<pre/>";
        */

        /*
        //ÖRNEK 3
        define("DEGERLER", array("volkan", "oguzhan", "karahan", "hakan"));

        echo "<pre>";
        print_r(DEGERLER);
        echo "<pre/> <br><br>" ;

        echo DEGERLER[0] . "<br/>";
        echo DEGERLER[1] . "<br/>";
        echo DEGERLER[2] . "<br/>";
        echo DEGERLER[3];
        */



        /*
        //ÖRNEK 4
        const DEGERLER   =  array("volkan", "oguzhan", "karahan", "hakan");

        echo "<pre>";
        print_r(DEGERLER);
        echo "<pre/> <br><br>" ;

        echo DEGERLER[0] . "<br/>";
        echo DEGERLER[1] . "<br/>";
        echo DEGERLER[2] . "<br/>";
        echo DEGERLER[3];
        */

        /*
        //ÖRNEK 5
        define("DEGERLER", array("egitmen"=>"volkan", "ögrenci"=>"oguzhan", "soyad"=>"karahan", "yabancı"=>"hakan"));

        echo "<pre>";
        print_r(DEGERLER);
        echo "<pre/> <br><br>" ;

        echo DEGERLER["egitmen"] . "<br/>";
        echo DEGERLER["ögrenci"] . "<br/>";
        echo DEGERLER["soyad"] . "<br/>";
        echo DEGERLER["yabancı"];

        */

        //ÖRNEK 6
        const DEGERLER  =  array("egitmen"=>"volkan", "ögrenci"=>"oguzhan", "soyad"=>"karahan", "yabancı"=>"hakan");

        echo "<pre>";
        print_r(DEGERLER);
        echo "<pre/> <br><br>" ;

        echo DEGERLER["egitmen"] . "<br/>";
        echo DEGERLER["ögrenci"] . "<br/>";
        echo DEGERLER["soyad"] . "<br/>";
        echo DEGERLER["yabancı"];





        ?>
</body>
</html>