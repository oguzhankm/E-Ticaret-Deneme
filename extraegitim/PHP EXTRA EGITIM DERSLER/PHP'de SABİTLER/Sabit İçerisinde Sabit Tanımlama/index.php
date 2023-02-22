<?php
session_start();
?>


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
        //Örnek 1

                define("ICERIK", "Ekstra Eğitim");

                define("VERI", ICERIK);

                echo VERI;
        */
        /*
        //ÖRNEK 2

        const ICERIK = "Ekstraaa Eğitim";

        const VERI =  ICERIK;

        echo VERI;
        */
        /*
        //ÖRNEK 3

        const ICERIK = "Ekstra Eğitim";

        define("VERI", ICERIK);

        echo VERI;
        */
        /*
        //ÖRNEK 4

        define("ICERIK", "Ekstralı Eğitim");

        const VERI =  ICERIK;

        echo VERI;
        */
        /*
        //ÖRNEK 5

        $Islem = "Extra Eğitim";

        define("ICERIK", $Islem);

        define("VERI", ICERIK);

        echo VERI;
        */

        //ÖRNEK 6

        $Islem       = "Extraasdasd Eğitim";

        define("ICERIK", $Islem );

        const VERI   = ICERIK;

        echo VERI;

?>
</body>
</html>