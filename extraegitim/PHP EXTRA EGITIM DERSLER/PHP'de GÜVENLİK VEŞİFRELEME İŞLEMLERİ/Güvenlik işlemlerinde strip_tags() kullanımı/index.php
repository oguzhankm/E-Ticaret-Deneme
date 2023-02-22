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

        strip_tags()        :


        */



        $Deger    =     "<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & <u>A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör </u><a href='www.google.com.tr'>Siteye Git</a>";
        echo $Deger .  "<br />";

        $IslemBir    =   strip_tags($Deger);
        echo $IslemBir . "<br /><br />";

        $IslemIki   =   strip_tags($Deger, "<a>");
        echo $IslemIki . "<br /><br />";




        ?>


</body>
</html>









