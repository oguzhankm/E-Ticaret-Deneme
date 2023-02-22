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

          array_count_values()  :  Dizilerde elemanların kaç defa tekrarlandığını belli etmek için kullanılır.
        */


        $Degerler =    array("Volkan", "Oguzhan", "Ahmet", "Mehmet", "Hakan", "Volkan", "Oguzhan", "Hakan", "Oguzhan");

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br>";

        $Islem   =  array_count_values($Degerler);
        echo "<pre>";
        print_r($Islem);
        echo "</pre><br>";




























        ?>
</body>
</html>