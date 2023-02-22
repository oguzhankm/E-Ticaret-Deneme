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

        setcookie()   : Belirtilecek olan değerler doğrultusunda cookie (çerez) oluşturmak için kullanılır.
        Parametreler  : 1. Parametre : Çerez Ado, 2. Parametre Çerez Değeri, 3.Parametre : Çerez Yaşam Süresi

        */


        $YasamSuresi  = time() + 3600;
        setcookie("KullaniciAdi", "Volkan", $YasamSuresi);
        setcookie("KullaniciSoyadi", "Alaketn", $YasamSuresi);
        setcookie("EgitimAdi", "A'dan Z'ye Ekstra Eğitim Seti", $YasamSuresi);


        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";

        echo "Kullanıcı Adı : " . $_COOKIE["KullaniciAdi"];

        

        ?>




</body>
</html>









