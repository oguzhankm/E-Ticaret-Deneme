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
            array_shift()       : Dizi içerisinde bulunan ilk elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanaın değerini geriye döndürür.
            array_pop()         : Dizi içerisinde bulunan son elemanı silmek için kullanılır. Aynı zamanda dizi içeriğinden sildiği elemanaın değerini geriye döndürür.
        */

        /*
        //ÖRNEK1
        $Isimler        =       array("Volkan", "Oguzhan", "Serkan", "Mehmet");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        array_shift($Isimler);
        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        */

        /*
        //ÖRNEK2
        $Isimler        =       array("Volkan", "Oguzhan", "Serkan", "Deneme"=>"Mehmet", "Levent", "İlyas");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        array_shift($Isimler);
        array_shift($Isimler);
        array_shift($Isimler);
        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        */


        /*
        //ÖRNEK3
        $Isimler        =       array("Volkan", "Oguzhan", "Serkan", "Deneme"=>"Mehmet", "Levent", "İlyas");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        $SilBir  =  array_shift($Isimler);

        echo "<pre>";
        print_r($Isimler);
        echo "Silinen elemanın değeri : " . $SilBir  .  "<br>";
        echo "</pre>";

        $SilBir  =  array_shift($Isimler);

        echo "<pre>";
        print_r($Isimler);
        echo "Silinen elemanın değeri : " . $SilBir  .  "<br>";
        echo "</pre>";
        */


        /*
        //ÖRNEK4
        $Isimler        =       array("Volkan", "Oguzhan", array("Hale", "Aslı", "Banu", "Derya"), "Serkan", "Mehmet", "Levent", "İlyas");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        array_shift($Isimler[2]);

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        */

        /*
        //ÖRNEK5
        $Isimler        =       array("Volkan", "Oguzhan", array("Hale", "Aslı", "Banu", "Derya"), "Serkan", "Mehmet", "Levent", "İlyas");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        $SilBir  = array_shift($Isimler[2]);

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        echo "Silinen elemanın değeri : " . $SilBir  .  "<br>";
        */




        //ARRAY_POP() FONKSİYONU


        /*
        //ÖRNEK1
        $Isimler        =       array("Volkan", "Oguzhan", "Serkan", "Mehmet");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        array_pop($Isimler);
        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        */

        /*
        //ÖRNEK2
        $Isimler        =       array("Volkan", "Oguzhan", "Serkan", "Deneme"=>"Mehmet", "Levent", "İlyas");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        $SilBir  =  array_pop($Isimler);

        echo "<pre>";
        print_r($Isimler);
        echo "Silinen elemanın değeri : " . $SilBir  .  "<br>";
        echo "</pre>";

        $SilBir  =  array_pop($Isimler);

        echo "<pre>";
        print_r($Isimler);
        echo "Silinen elemanın değeri : " . $SilBir  .  "<br>";
        echo "</pre>";
        */


        /*
        //ÖRNEK3
        $Isimler        =       array("Volkan", "Oguzhan", array("Hale", "Aslı", "Banu", "Derya"), "Serkan", "Mehmet", "Levent", "İlyas");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        $SilBir  = array_pop($Isimler[2]);

        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        echo "Silinen elemanın değeri : " . $SilBir  .  "<br>";
        */

        /*
        //ÖRNEK4
        $Isimler        =       array("Volkan", "Oguzhan", "Serkan", "Mehmet");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        array_shift($Isimler);
        array_pop($Isimler);
        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";
        */

        //ÖRNEK5
        $Isimler        =       array("Volkan", "Oguzhan", "Serkan", "Mehmet");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";


        $IlkElemaniSil  =   array_shift($Isimler);
        $SonElemaniSil  =   array_pop($Isimler);


        echo "<pre>";
        print_r($Isimler);
        echo "</pre>";

        echo "Silinen elemanın değeri : " . $IlkElemaniSil  .  "<br>";
        echo "Silinen elemanın değeri : " . $SonElemaniSil;



        ?>
</body>
</html>