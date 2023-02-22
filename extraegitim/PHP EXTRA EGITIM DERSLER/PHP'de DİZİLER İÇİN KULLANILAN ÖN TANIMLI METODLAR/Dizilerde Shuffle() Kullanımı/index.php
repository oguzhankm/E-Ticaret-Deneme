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

          shuffle()  :  Dizi içerisinde bulunan elemanların sıralarının karıştırılması için kullanılır.
        */


        $Isimler =    array("Volkan", "Oguzhan", "Ahmet", "Mehmet", "Hakan", "Volkan", array("Banu", "Derya", "Büşra", "Özge"), "Oguzhan", "Hakan", "Oguzhan");

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";



        shuffle($Isimler[6]);
        shuffle($Isimler);

        echo "<pre>";
        print_r($Isimler);
        echo "</pre><br>";




























        ?>
</body>
</html>