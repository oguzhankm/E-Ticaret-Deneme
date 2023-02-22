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

        // Yapıcı metodlara __construct() parametre gider fakat yıkıcı metodlara __destruct() parametre gitmez.


        class Deneme{
            public function __construct($HostBilgisi, $VeriTabaniKullaniciAdi, $VeriTabaniKullaniciSifresi, $VeriTabaniAdi){
                $Metin = "Gelen Host Bilgisi : " . $HostBilgisi . "<br />" . "Gelen Veritabanı Kullanıcı Adı Bilgisi : " . $VeriTabaniKullaniciAdi . "<br />" . "Gelen Veritabanı Kullanıcı Şifre
                Bilgisi : " . $VeriTabaniKullaniciSifresi . "<br/>" . "Gelen Veri Tabanı Adı Bilgisi : " . $VeriTabaniAdi;

                echo $Metin;
            }



        }

        $Islem  = new Deneme("localhost", "Oguzhan-Karahan", "Oguzhan1995", "E-Ticaret");





        ?>


</body>
</html>









