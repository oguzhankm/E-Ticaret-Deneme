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
        $Degerler   =   array("Volkan", "Oguzhan", array("Mavi", "Kırmızı","Sarı", "Siyah"), "Onur", "Busra");

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br><br>";

        echo $Degerler[0] . "<br>";
        echo $Degerler[1] . "<br>";
        print_r($Degerler[2]) . "<br>";
        echo "<br>" . $Degerler[3] . "<br>";
        echo $Degerler[4] . "<br>";

        */
        /*
        //ÖRNEK 2
        $Degerler   =   array("Volkan", "Oguzhan", array("Mavi", "Kırmızı","Sarı", "Siyah"), "Onur", "Busra");

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br><br>";

        echo $Degerler[0] . "<br>";
        echo $Degerler[1] . "<br>";


        echo $Degerler[2][0] . "<br>";
        echo $Degerler[2][1] . "<br>";
        echo $Degerler[2][2] . "<br>";
        echo $Degerler[2][3] . "<br>";
        //print_r($Degerler[2]) . "<br>";
        echo $Degerler[3] . "<br>";
        echo $Degerler[4];
        */

        /*
        //ÖRNEK 3
        $Degerler   =   array("Volkan", "Oguzhan", array("Mavi", "Kırmızı","Sarı", "Siyah", array("Masa", "Sandalye", "Koltuk")), "Onur", "Busra");

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br><br>";

        echo $Degerler[0] . "<br>";
        echo $Degerler[1] . "<br>";
        echo $Degerler[2][0] . "<br>";
        echo $Degerler[2][1] . "<br>";
        echo $Degerler[2][2] . "<br>";
        echo $Degerler[2][3] . "<br>";
        echo $Degerler[2][4][0] . "<br>";
        echo $Degerler[2][4][1] . "<br>";
        echo $Degerler[2][4][2] . "<br>";
        echo $Degerler[3] . "<br>";
        echo $Degerler[4];
        */


        /*
        //ÖRNEK 4

        $Degerler   =   array("DegerA"=>"Volkan", "Oguzhan", "DiziA"=>array("Mavi", "Renk"=>"Kırmızı","Sarı", "Siyah", "DiziB"=>array("Masa", "EsyaBir"=>"Sandalye", "Koltuk")), "Onur", "Busra");

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br><br>";


        echo $Degerler["DegerA"] . "<br>";
        echo $Degerler[0] . "<br>";
        echo $Degerler["DiziA"][0] . "<br>";
        echo $Degerler["DiziA"]["Renk"] . "<br>";
        echo $Degerler["DiziA"][1] . "<br>";
        echo $Degerler["DiziA"][2] . "<br>";
        echo $Degerler["DiziA"]["DiziB"][0] . "<br>";
        echo $Degerler["DiziA"]["DiziB"]["EsyaBir"] . "<br>";
        echo $Degerler["DiziA"]["DiziB"][1] . "<br>";
        echo $Degerler[1] . "<br>";
        echo $Degerler[2];
        */

        /*
        //ÖRNEK 5 //ÖNEMLİ ÖRNEKKK

        $Degerler   =   array(
                                "Volkan",
                                "Hakan",
                                    array(
                                            "Mavi",
                                                array(
                                                        array(
                                                                "Halı",
                                                                "Kilim",
                                                                "Battaniye"
                                                        ),
                                                    "Masa",
                                                    "Sandalye",
                                                ),
                                            "Sarı",
                                            "Kırmızı",
                                            "Siyah"
                                    ),
                                     array(
                                         "PHP",

                                         "JS",
                                         "HTML",
                                         "CSS",
                                         "ASP",
                                         array(
                                             "Photoshop",
                                             "Corel",
                                             "Paint"
                                         ),
                                         "XML"
                                     ),
                                "Futbol Topu",
                                "Basketbol Topu"
     );

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br><br>";


        echo $Degerler[0] . "<br>";
        echo $Degerler[1] . "<br>";
        echo $Degerler[2][0] . "<br>";
        echo $Degerler[2][1][0][0] . "<br>";
        echo $Degerler[2][1][0][1] . "<br>";
        echo $Degerler[2][1][0][2] . "<br>";
        echo $Degerler[2][1][1] . "<br>";
        echo $Degerler[2][1][2] . "<br>";
        echo $Degerler[2][2] . "<br>";
        echo $Degerler[2][3] . "<br>";
        echo $Degerler[2][4] . "<br>";
        echo $Degerler[3][0] . "<br>";
        echo $Degerler[3][1] . "<br>";
        echo $Degerler[3][2] . "<br>";
        echo $Degerler[3][3] . "<br>";
        echo $Degerler[3][4] . "<br>";
        echo $Degerler[3][5][0] . "<br>";
        echo $Degerler[3][5][1] . "<br>";
        echo $Degerler[3][5][2] . "<br>";
        echo $Degerler[3][6] . "<br>";
        echo $Degerler[4] . "<br>";
        echo $Degerler[5] . "<br>";
        */


        //ÖRNEK 6 //ÖNEMLİ ÖRNEKKK2

        $Degerler   =   array(
            "Volkan",
            "Isim"=>"Hakan",
            "Renkler"=>array(
                "Mavi",
                "IcDizi"=>array(
                    array(
                        "Halı",
                        "Dokuma"=>"Kilim",
                        "Battaniye"
                    ),
                    "Masa",
                    "Sandalye",
                ),
                "Sarı",
                "Renk"=>"Kırmızı",
                "Siyah"
            ),
            array(
                "PHP",

                "JS",
                "Ders"=>"HTML",
                "CSS",
                "ASP",
                "Deneme"=>array(
                    "GrafikProgrami"=>"Photoshop",
                    "Corel",
                    "Paint"
                ),
                "XML"
            ),
            "Mac"=>"Futbol Topu",
            "Basketbol Topu"
        );

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br><br>";


        echo $Degerler[0] . "<br>";
        echo $Degerler["Isim"] . "<br>";
        echo $Degerler["Renkler"][0] . "<br>";
        echo $Degerler["Renkler"]["IcDizi"][0][0] . "<br>";
        echo $Degerler["Renkler"]["IcDizi"][0]["Dokuma"] . "<br>";
        echo $Degerler["Renkler"]["IcDizi"][0][1] . "<br>";
        echo $Degerler["Renkler"]["IcDizi"][1] . "<br>";
        echo $Degerler["Renkler"]["IcDizi"][2] . "<br>";
        echo $Degerler["Renkler"][1] . "<br>";
        echo $Degerler["Renkler"]["Renk"] . "<br>";
        echo $Degerler["Renkler"][2] . "<br>";
        echo $Degerler[1][0] . "<br>";
        echo $Degerler[1][1] . "<br>";
        echo $Degerler[1]["Ders"] . "<br>";
        echo $Degerler[1][2] . "<br>";
        echo $Degerler[1][3] . "<br>";
        echo $Degerler[1]["Deneme"]["GrafikProgrami"] . "<br>";
        echo $Degerler[1]["Deneme"][0] . "<br>";
        echo $Degerler[1]["Deneme"][1] . "<br>";
        echo $Degerler[1][4] . "<br>";
        echo $Degerler["Mac"] . "<br>";
        echo $Degerler[2];

        

?>
</body>
</html>