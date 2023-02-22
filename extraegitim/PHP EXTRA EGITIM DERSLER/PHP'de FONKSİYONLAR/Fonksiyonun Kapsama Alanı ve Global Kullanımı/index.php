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

        $Isim       = "Oguzhan";
        $Soyisim    = "Karahan";

        function Yaz(){
            global $Isim;
            global $Soyisim;

            echo $Isim . $Soyisim;
        }
        Yaz();
        */


        //ÖRNEK 2

        define("ISIM", "Oguzhan Karahan");    //Sabitlere tüm birimlerden erişilebilir local veya global alanlardan çağırılabilir.

        function Yaz(){
            echo ISIM;
        }
        Yaz();



        ?>

</form>
</body>
</html>