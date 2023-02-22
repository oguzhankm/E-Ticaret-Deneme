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
        //ÖRNEK 1 ÇOK BOYUTLU FOREACH

        $Isimler  =     array("Volkan", "Oguzhan", "Hakan", "Onur", array("Banu", "Beyza", "Hale", "Büşra"), "Ayaz", "Mehmet", "Serknan");



        print_r($Isimler);

        echo "<br /> <br />";


        foreach ($Isimler as $Isim) {
            if (is_array($Isim)){
                foreach ($Isim as $KadınIsim){

                    echo "<strong>" . $KadınIsim . "</strong><br />";

                }
            }else{
                echo $Isim . "<br />";
            }
        }

        */



        //ÖRNEK 2 ÇOK BOYUTLU FOREACH

        $Isimler  =     array("Volkan", "Oguzhan", "Hakan", "Onur", array("Banu", "Beyza", "Hale", array("Siyah", "Beyaz", "Mavi"), "Büşra"), "Ayaz", "Mehmet", "Serknan");



        print_r($Isimler);

        echo "<br /> <br />";


        foreach ($Isimler as $Isim) {
            if (is_array($Isim)){
                foreach ($Isim as $KadınIsim){

                    if (is_array($KadınIsim)){
                        foreach ($KadınIsim as $Renk ){
                            echo "<strong>" . $Renk . "</style:color><br />";
                        }
                    }else{
                        echo "<strong>" . $KadınIsim . "</strong><br />";
                    }







                }
            }else{
                echo $Isim . "<br />";
            }
        }





        ?>

</form>
</body>
</html>