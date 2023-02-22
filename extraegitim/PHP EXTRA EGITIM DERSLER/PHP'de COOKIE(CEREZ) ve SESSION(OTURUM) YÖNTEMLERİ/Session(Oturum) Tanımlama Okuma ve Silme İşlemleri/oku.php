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

        echo $_SESSION["KullaniciAdi"] . "<br />";
        echo $_SESSION["KullaniciSoyadi"] . "<br />";
        echo $_SESSION["KullaniciEmail"]  . "<br />";
        echo $_SESSION["KullaniciTelefonu"] . "<br />";
        echo $_SESSION["KullaniciSehri"] . "<br />";

        ?>

        <a href="sil.php">Sessionları Sil</a>


</body>
</html>
