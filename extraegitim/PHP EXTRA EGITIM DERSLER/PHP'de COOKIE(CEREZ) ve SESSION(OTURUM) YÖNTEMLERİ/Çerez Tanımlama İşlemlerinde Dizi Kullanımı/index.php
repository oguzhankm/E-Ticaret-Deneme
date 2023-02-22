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



        */


        $YasamSuresi  = time() + 3600;
        setcookie("Kullanici[Adi]", "Volkan", $YasamSuresi);
        setcookie("Kullanici[Soyadi]", "Alakent", $YasamSuresi);
        setcookie("Kullanici[Email]", "oguzhankm@gmail.com", $YasamSuresi);
        setcookie("Kullanici[Telefon]", "05438803611", $YasamSuresi);


        setcookie("Sepet[ID]", "5", $YasamSuresi);
        setcookie("Sepet[Tutari]", "1250", $YasamSuresi);
        setcookie("Sepet[TaksitSayisi]", "6", $YasamSuresi);
        setcookie("Sepet[ÖdemeTuru]", "Kredi Kartı", $YasamSuresi);


        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";




        ?>




</body>
</html>









