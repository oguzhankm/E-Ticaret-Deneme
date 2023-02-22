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
          $Isimler = array("Volkan", "Hakan", "Oguzhan");
          $Isimler = ["Volkan", "Hakan", "Oguzhan"];

          $Isimler = array("PHPEgitmeni" => "Volkan", "CSSEgitmeni" => "Hakan", "HTMLEgitmeni" => "Oguzhan");
          $Isimler = ["PHPEgitmeni" => "Volkan", "CSSEgitmeni" => "Hakan", "HTMLEgitmeni" => "Oguzhan"];

         */


        /*
        //ÖRNEK 1
        $Isimler[]  = "Volkan";
        $Isimler[]  = "Hakan";
        $Isimler[]  = "Onur";

        echo "<pre>";
        print_r($Isimler);
        echo "<pre/><br><br>";

        echo $Isimler[0] ."<br/>";
        echo $Isimler[1]. "<br/>";
        echo $Isimler[2];
        */


        //ÖRNEK 1
        $Isimler["PHPEgitmeni"]  = "Volkan";
        $Isimler["CSSEgitmeni"]  = "Hakan";
        $Isimler["HTMLEgitmeni"]  = "Onur";

        echo "<pre>";
        print_r($Isimler);
        echo "<pre/><br><br>";

        echo $Isimler["PHPEgitmeni"] ."<br/>";
        echo $Isimler["CSSEgitmeni"]. "<br/>";
        echo $Isimler["HTMLEgitmeni"];





        ?>
</body>
</html>