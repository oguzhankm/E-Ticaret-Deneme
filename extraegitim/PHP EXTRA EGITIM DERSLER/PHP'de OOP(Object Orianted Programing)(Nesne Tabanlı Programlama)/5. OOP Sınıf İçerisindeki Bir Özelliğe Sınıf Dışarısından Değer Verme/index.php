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
        class Deneme{

            public $Isim    = "";
            public $Soyisim = "";

        }
        $Islem          = new Deneme;
        $Islem->Isim    = "Oguzhan";
        $Islem->Soyisim = "Karahan";

        echo $Islem->Isim . " " . $Islem->Soyisim;
        */

        /*
        //ÖRNEK 2
        class Deneme{

            public $Isim;
            public $Soyisim;

        }
        $Islem          = new Deneme;
        $Islem->Isim    = "Volkan";
        $Islem->Soyisim = "Alakent";

        echo $Islem->Isim . " " . $Islem->Soyisim . "<br/>";

        $Islem->Isim    = "Hakan";
        $Islem->Soyisim = "Alakent";

        echo $Islem->Isim . " " . $Islem->Soyisim . "<br/>";

        $Islem->Isim    = "Oğuzhan";
        $Islem->Soyisim = "Karahan";

        echo $Islem->Isim . " " . $Islem->Soyisim;
        */




        /*
        //ÖRNEK 3
        class Deneme{

            private $Isim  = "Oguzhan";
            protected $Soyisim = "Karahan";

        }
        $Islem          = new Deneme;
        $Islem->Isim    = "Volkan";
        $Islem->Soyisim = "Alakent";

        echo $Islem->Isim . " " . $Islem->Soyisim . "<br/>";
        */



        //ÖRNEK 4
        class Deneme{

            puclic const ISIM       = "Oguzhan";
            public const SOYISIM    = "Karahan";

        }
        $Islem    = new Deneme;
        $Islem->ISIM = "Onur"; // Sabit içerisindeki değer doluda olsa boşta olsa değiştirilemez
        $Islem->SOYISIM = "Tatlı"; // Sabit içerisindeki değer doluda olsa boşta olsa değiştirilemez


        echo Deneme::ISIM . " " . Deneme::SOYISIM;





        ?>


</body>
</html>









