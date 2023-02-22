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

            array_unique       : Dizinin içerisinde bulunan ve tekrarlanan elemanların fazla olanlarını silerek yeni bir dizi oluşturmek için kullanılır.

        */


        $Degerler   =   array("Volkan", "Masa", "Mavi", "Volkan", "Hakan", "Masa", "Volkan", "Volkan","Onur", "Bulut" );

        echo "<pre>";
        print_r($Degerler);
        echo "</pre><br>";

        $Sonuc  =  array_unique($Degerler);

        echo "<pre>";
        print_r($Sonuc);
        echo "</pre><br>";























        ?>
</body>
</html>