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
        
        $_SESSION["KullaniciAdi"]       = "Oguzhan";
        $_SESSION["KullaniciSoyadi"]       = "Karahan";
        $_SESSION["KullaniciEmail"]       = "oguzhan@gmail.com";
        $_SESSION["KullaniciTelefonu"]       = "Oguzhan";
        $_SESSION["KullaniciSehri"]       = "Kahramanmaraş";
        
        ?>

        <a href="oku.php">Sessionları Oku</a>


</body>
</html>









