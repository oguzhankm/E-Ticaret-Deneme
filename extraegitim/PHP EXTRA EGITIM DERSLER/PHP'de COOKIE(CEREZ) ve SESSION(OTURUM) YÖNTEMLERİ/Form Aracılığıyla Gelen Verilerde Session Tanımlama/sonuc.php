<?php

require_once ("ayar.php");

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

        $GelenKullaniciAdi      = $_POST["KullaniciAdi"];
        $GelenKullaniciSifresi     = $_POST["KullaniciSifresi"];

        if (($GelenKullaniciAdi!="") and ($GelenKullaniciSifresi!="")){
            $_SESSION["Adi"]        =  $GelenKullaniciAdi;
            $_SESSION["Sifresi"]    =  $GelenKullaniciSifresi;

            echo "Merhaba " . $GelenKullaniciAdi . " Siteye Giriş Yaptınız. <br />";
            echo "<a href='Hakan.php'>Çıkış Yap</a>";


        }else{
            echo "Merhaba lütfen formada herhangi bir boş alan bırakmayınız.";
            echo "<a href='index.php'>Forma Dön</a>";
        }




        ?>




</body>
</html>









