<?php

session_start();
ob_start();
require_once("../Ayarlar/ayar.php");
require_once("../Ayarlar/fonksiyonlar.php");
require_once("../Framework/Verot/src/class.upload.php");
require_once("../Ayarlar/yonetimsayfalariic.php");
require_once("../Ayarlar/yonetimsayfalaridis.php");

if (isset($_REQUEST["SKD"])) {
    $DisSayfaKoduDegeri = SayiliIcerikleriFiltrele($_REQUEST["SKD"]);
} else {
    $DisSayfaKoduDegeri = 0;
}

if (isset($_REQUEST["SKI"])) {
    $IcSayfaKoduDegeri = SayiliIcerikleriFiltrele($_REQUEST["SKI"]);
} else {
    $IcSayfaKoduDegeri = 0;
}


if (isset($_REQUEST["SYF"])) {
    $Sayfalama = SayiliIcerikleriFiltrele($_REQUEST["SYF"]);
} else {
    $Sayfalama = 1;
}
?>

<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <meta name="Robots" content="noindex, nofollow, noarchive">
    <meta name="googlebot" content="noindex, nofollow, noarchive">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo DonusumleriGeriDondur($SiteTitle); ?></title>
    <link type="image/png" rel="icon" href="../Resimler/Favicon.png">
    <meta name="description" content="<?php echo DonusumleriGeriDondur($SiteDescription); ?>">
    <meta name="keywords" content="<?php echo DonusumleriGeriDondur($SiteKeywords); ?>">
    <script type="text/javascript" src="../Framework/JQuery/jquery-3.6.1.min.js" language="javascript"></script>
    <link type="text/css" rel="stylesheet" href="../Ayarlar/stillyonetim.css">
    <script type="text/javascript" src="../Ayarlar/fonksiyonlar.js" language="javascript"></script>
</head>

<body>
<table width="1065" height="100%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tr height="100%">
        <td align="center"><?php
            if (empty($_SESSION["Yonetici"])) {
                if ((!$DisSayfaKoduDegeri) or ($DisSayfaKoduDegeri == "") or ($DisSayfaKoduDegeri == 0)) {
                    include($SayfaDis[1]);
                } else {
                    include($SayfaDis[$DisSayfaKoduDegeri]);
                }
            } else {
                if ((!$DisSayfaKoduDegeri) or ($DisSayfaKoduDegeri == "") or ($DisSayfaKoduDegeri == 0)) {
                    include($SayfaDis[0]);
                } else {
                    include($SayfaDis[$DisSayfaKoduDegeri]);
                }
            }

            ?>
        </td>
    </tr>
</table>


</body>
</html>


<?php
$VeritabaniBaglantisi = null;
ob_end_flush();
?>

