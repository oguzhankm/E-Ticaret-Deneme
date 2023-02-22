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


        // Anonim foksiyonda fonksiyona isim tanımlanmaz değişken adıyla çağırılır.

        /*
        $Yazdir     =   function (){
            echo "Ekstra Egitim - Oguzhan Karahan";
        };

        $Yazdir();
        */




        /*
        $Islem      = array(
                "Oguzhan",
                "Büşra",
                function (){
                    echo "Ekstra Egitim - Oguzhan Karahan";
                },
                "Volkan"
        );

        echo $Islem[0] . "<br />";
        echo $Islem[1] . "<br />";
        $Islem[2]();
        echo  "<br />";
        echo $Islem[3];
        */




        /*
        $Islem      = array(
            "Oguzhan",
            "Büşra",

            array(
                    function (){
                echo "Ekstra Egitim & Oguzhan Karahan";
            }
            ),


            "Volkan"
        );

        echo $Islem[0] . "<br />";
        echo $Islem[1] . "<br />";
        $Islem[2][0]();
        echo  "<br />";
        echo $Islem[3];
        */


        $Islem      = array(
            "Oguzhan",
            function (){
                echo "Ekstra Egitim & Oguzhan Karahan - 1";
            },
            "Büşra",
            function (){
                echo "Ekstra Egitim & Oguzhan Karahan - 2";
            },
            "Onur",
            function (){
                echo "Ekstra Egitim & Oguzhan Karahan - 3";
            },
            function (){
                echo "Ekstra Egitim & Oguzhan Karahan - 4";
            }
        );

        echo "<pre>";
        print_r($Islem);
        echo "</pre><br><br>";


        echo $Islem[0] . "<br />";
        echo $Islem[1]();
        echo "<br />";
        echo $Islem[2] . "<br />";
        echo $Islem[3]();
        echo "<br />";
        echo $Islem[4] . "<br />";
        echo $Islem[5]();
        echo "<br />";
        echo $Islem[6]();


        ?>

</form>
</body>
</html>