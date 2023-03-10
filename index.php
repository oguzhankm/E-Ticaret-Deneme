<?php

session_start(); ob_start();
require_once("Ayarlar/ayar.php");
require_once("Ayarlar/fonksiyonlar.php");
require_once("Ayarlar/sitesayfalari.php");


if (isset($_REQUEST["SK"])) {
    $SayfaKoduDegeri = SayiliIcerikleriFiltrele($_REQUEST["SK"]);
} else {
    $SayfaKoduDegeri = 0;
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
    <meta name="Robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="7 Days"
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo DonusumleriGeriDondur($SiteTitle); ?></title>
    <base href="/">
    <link type="image/png" rel="icon" href="Resimler/Favicon.png">
    <meta name="description" content="<?php echo DonusumleriGeriDondur($SiteDescription); ?>">
    <meta name="keywords" content="<?php echo DonusumleriGeriDondur($SiteKeywords); ?>">
    <script type="text/javascript" src="Framework/JQuery/jquery-3.6.1.min.js" language="javascript"></script>
    <link type="text/css" rel="stylesheet" href="Ayarlar/still.css">
    <script type="text/javascript" src="Ayarlar/fonksiyonlar.js" language="javascript"></script>
</head>

<body>

<table height="100%" width="1065px" align="center" cellpadding="0" cellspacing="0">

    <tr height="40px" bgcolor="#353745">
        <td><img src="Resimler/HeaderMesajResmi.png" border="0"></td>
    </tr>
    <tr height="110">
        <td>
            <table width="1065" height="30" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr bgcolor="#0088CC">
                    <td>&nbsp;</td>
                    <?php
                    if (isset($_SESSION["Kullanici"])){
                    ?>
                        <td width="20"><a href="index.php?SK=50"><img src="Resimler/KullaniciBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                        <td width="70" class="MaviAlanMenusu"><a href="index.php?SK=50">Hesab??m</a></td>
                        <td width="20"><a href="index.php?SK=49"><img src="Resimler/CikisBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                        <td width="85" class="MaviAlanMenusu"><a href="index.php?SK=49">????k???? Yap</a></td>
                    <?php
                    }else{
                    ?>
                            <td width="20"><a href="uye-giris"><img src="Resimler/KullaniciBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="70" class="MaviAlanMenusu"><a href="uye-giris">Giri?? Yap</a></td>
                            <td width="20"><a href="yeni-uye-kayit"><img src="Resimler/KullaniciEkleBeyaz16x16.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="85" class="MaviAlanMenusu"><a href="yeni-uye-kayit">Yeni ??ye Ol</a></td>
                    <?php
                    }
                    ?>
                    <td width="20"><img src="Resimler/SepetBeyaz16x16.png" border="0" style="margin-top: 5px;"></td>
                    <td width="103" class="MaviAlanMenusu"><?php  if (isset($_SESSION["Kullanici"])){ ?><a href="index.php?SK=94">Al????veri?? Sepeti</a> <?php }else{ ?> Al????veri?? Sepeti <?php } ?></td>
                </tr>
            </table>
            <table width="1065" height="80" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="192"><a href="index.php?SK=0"><img src="Resimler/<?php echo DonusumleriGeriDondur($SiteLogosu); ?>" border="0"></a></td>
                    <td>


                        <table width="873" height="30" align="center" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="324" class="AnaMenu">&nbsp;</td>
                                <td width="103" class="AnaMenu"><b><a href="index.php?SK=0">Anasayfa</a></b></td>
                                <td width="156" class="AnaMenu"><b><a href="erkek-ayakkabilari">Erkek Ayakkab??lar??</a></b>
                                </td>
                                <td width="156" class="AnaMenu"><b><a href="kadin-ayakkabilari">Kad??n Ayakkab??lar??<a/></b>
                                </td>
                                <td width="134" class="AnaMenu"><b><a href="index.php?SK=86">??ocuk Ayakkab??lar??</a></b>
                                </td>
                            </tr>
                        </table>


                    </td>

                </tr>
            </table>
        </td>
    </tr>


    <tr>
        <td valign="top">
            <table width="1065" align="center" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center"><?php

                        if ((!$SayfaKoduDegeri) or ($SayfaKoduDegeri=="") or ($SayfaKoduDegeri==0)){
                            include($Sayfa[0]);
                        } else {
                            include ($Sayfa[$SayfaKoduDegeri]);
                        }
                        ?><br/></td>
                </tr>
            </table>
        </td>
    </tr>


    <tr height="210">
        <td>
            <table width="1065" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#F9F9F9">


                <tr height="30">
                    <td width="250" style="border-bottom: 1px dashed #CCCCCC;">&nbsp;<b>Kurumsal</b></td>
                    <td width="22">&nbsp;</td>
                    <td width="250" style="border-bottom: 1px dashed #CCCCCC;"><b>??yelik & Hizmetler</b></td>
                    <td width="22" style="border-bottom: 1px dashed #CCCCCC;">&nbsp;</td>
                    <td width="250" style="border-bottom: 1px dashed #CCCCCC;"><b>S??zle??meler</b></td>
                    <td width="21" style="border-bottom: 1px dashed #CCCCCC;">&nbsp;</td>
                    <td width="250" style="border-bottom: 1px dashed #CCCCCC;"><b>Bizi Takip Edin</b></td>
                </tr>


                <tr height="30">
                    <td class="AltMenusu">&nbsp;<a href="hakkimizda">Hakk??m??zda</a></td>
                    <td>&nbsp;</td>

                    <?php
                    if (isset($_SESSION["Kullanici"])){
                        ?>
                        <td class="AltMenusu"><a href="index.php?SK=50">Hesab??m</a></td>

                        <?php
                    }else{
                        ?>
                        <td class="AltMenusu"><a href="uye-giris">Giri?? Yap</a></td>
                        <?php
                    }
                    ?>
                    <td>&nbsp;</td>
                    <td class="AltMenusu"><a href="index.php?SK=2">??yelik S??zle??mesi</a></td>
                    <td>&nbsp;</td>
                    <td>
                        <table width="250" align="center" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="20"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkFacebook); ?>" target="_blank"><img src="Resimler/Facebook16x16.png" style="margin-top: 5px;"></a>

                                </td>
                                <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkFacebook); ?>" target="_blank">Facebook</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr height="30">
                    <td class="AltMenusu">&nbsp;<a href="index.php?SK=8">Banka Hesaplar??m??z</a></td>
                    <td>&nbsp;</td>
                    <?php
                    if (isset($_SESSION["Kullanici"])){
                        ?>
                        <td class="AltMenusu"><a href="index.php?SK=49">????k???? Yap</a></td>

                        <?php
                    }else{
                        ?>
                        <td class="AltMenusu"><a href="yeni-uye-kayit">Yeni ??ye Ol</a></td>
                        <?php
                    }
                    ?>
                    <td>&nbsp;</td>
                    <td class="AltMenusu"><a href="index.php?SK=3">Kullan??m Ko??ullar??</a></td>
                    <td>&nbsp;</td>
                    <td>
                        <table width="250" align="center" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="20"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkTwitter); ?>" target="_blank"><img src="Resimler/Twitter16x16.png" style="margin-top: 5px;"></a></td>
                                <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkTwitter); ?>" target="_blank">Twitter</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr height="30">
                    <td class="AltMenusu">&nbsp;<a href="index.php?SK=9">Havale Bildirim Formu</a></td>
                    <td>&nbsp;</td>
                    <td class="AltMenusu"><a href="index.php?SK=21">S??k Sorulan Sorular</a></td>
                    <td>&nbsp;</td>
                    <td class="AltMenusu"><a href="index.php?SK=4">Gizlilik S??zle??mesi</a></td>
                    <td>&nbsp;</td>
                    <td>
                        <table width="250" align="center" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="20"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkLinkedin); ?>" target="_blank"><img src="Resimler/LinkedIn16x16.png" style="margin-top: 5px;"></a></td>
                                <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkLinkedin); ?>" target="_blank">LinkedIn</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr height="30">
                    <td class="AltMenusu">&nbsp;<a href="index.php?SK=14">Kargom Nerede?</a></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td class="AltMenusu"><a href="index.php?SK=5">Mesafeli Sat???? S??zle??mesi</a></td>
                    <td>&nbsp;</td>
                    <td>
                        <table width="250" align="center" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="20"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkInstagram); ?>" target="_blank"><img src="Resimler/Instagram16x16.png" style="margin-top: 5px;"></a></td>
                                <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkInstagram); ?>" target="_blank">Instagram</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr height="30">
                    <td class="AltMenusu">&nbsp;<a href="index.php?SK=16">??leti??im</a></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td class="AltMenusu"><a href="index.php?SK=6">Teslimat</a></td>
                    <td>&nbsp;</td>
                    <td>
                        <table width="250" align="center" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="20"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkYoutube); ?>" target="_blank"><img src="Resimler/YouTube16x16.png" style="margin-top: 5px;"></a></td>
                                <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkYoutube); ?>" target="_blank">Youtube</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr height="30">
                    <td></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td class="AltMenusu"><a href="index.php?SK=7">??ptal & ??ade & De??i??im</a></td>
                    <td>&nbsp;</td>
                    <td>
                        <table width="250" align="center" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="20"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkPinterest); ?>" target="_blank"><img src="Resimler/Pinterest16x16.png" style="margin-top: 5px;"></a></td>
                                <td width="230" class="AltMenusu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkPinterest); ?>" target="_blank">Pinterest</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>


    <tr height="30">
        <td>
            <table width="1065" height="30" align="center" border="0" cellspacing="0" cellpadding="0">
                <!-- height="30" -->
                <tr>
                    <td align="center"><?php echo DonusumleriGeriDondur($SiteCopyrightMetni); ?></td>
                </tr>
            </table>
        </td>
    </tr>

    <tr height="30">
        <td>
            <table width="1065" height="30" align="center" border="0" cellspacing="0" cellpadding="0">
                <!-- height="30" -->
                <tr>
                    <td align="center">
                        <img src="Resimler/RapidSSL32x12.png" border="0" style="margin-right: 5px;">
                        <img src="Resimler/InternetteGuvenliAlisveris28x12.png" border="0" style="margin-right: 5px;">
                        <img src="Resimler/BonusCard41x12.png" border="0" style="margin-right: 5px;">
                        <img src="Resimler/MaximumCard46x12.png" border="0" style="margin-right: 5px;">
                        <img src="Resimler/WorldCard48x12.png" border="0" style="margin-right: 5px;">
                        <img src="Resimler/CardFinans78x12.png" border="0" style="margin-right: 5px;">
                        <img src="Resimler/AxessCard46x12.png" border="0" style="margin-right: 5px;">
                        <img src="Resimler/ParafCard19x12.png" border="0" style="margin-right: 5px;">
                        <img src="Resimler/VisaCard37x12.png" border="0" style="margin-right: 5px;">
                        <img src="Resimler/MasterCard21x12.png" border="0" style="margin-right: 5px;">
                        <img src="Resimler/AmericanExpiress20x12.png" border="0">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>


</body>
</html>


<?php
$VeritabaniBaglantisi = null;
ob_end_flush();
?>

