<?php
try {
    $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=kodlagae_kodlazim;charset=UTF8", "kodlagae_oguzhan", "Oguzhan.990466-+");
} catch (PDOException $Hata) {
    //echo "Bağlantı Hatası<br/>" . $Hata-getMessage();  // Bu alanı kapalı tutun çünkü site hata yaparsa kullanıcılar hata değerini görmesin.
    die();
}


$AyarlarSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
//$AyarSayisi = $AyarlarSorgusu->rowCount();
$Ayarlar = $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);


if (!empty($Ayarlar)) {
    $SiteAdi = $Ayarlar["SiteAdi"];
    $SiteTitle = $Ayarlar["SiteTitle"];
    $SiteDescription = $Ayarlar["SiteDescription"];
    $SiteKeywords = $Ayarlar["SiteKeywords"];
    $SiteCopyrightMetni = $Ayarlar["SiteCopyrightMetni"];
    $SiteLogosu = $Ayarlar["SiteLogosu"];
    $SiteLinki = $Ayarlar["SiteLinki"];
    $SiteEmailAdresi = $Ayarlar["SiteEmailAdresi"];
    $SiteEmailSifresi = $Ayarlar["SiteEmailSifresi"];
    $SiteEmailHostAdresi = $Ayarlar["SiteEmailHostAdresi"];
    $SosyalLinkFacebook = $Ayarlar["SosyalLinkFacebook"];
    $SosyalLinkTwitter = $Ayarlar["SosyalLinkTwitter"];
    $SosyalLinkLinkedin = $Ayarlar["SosyalLinkLinkedin"];
    $SosyalLinkInstagram = $Ayarlar["SosyalLinkInstagram"];
    $SosyalLinkYoutube = $Ayarlar["SosyalLinkYoutube"];
    $SosyalLinkPinterest = $Ayarlar["SosyalLinkPinterest"];
    $DolarKuru = $Ayarlar["DolarKuru"];
    $EuroKuru = $Ayarlar["EuroKuru"];
    $UcretsizKargoBaraji = $Ayarlar["UcretsizKargoBaraji"];
    $ClientID = $Ayarlar["ClientID"];
    $StoreKey = $Ayarlar["StoreKey"];
    $ApiKullanicisi = $Ayarlar["ApiKullanicisi"];
    $ApiSifresi = $Ayarlar["ApiSifresi"];


} else {
    //echo "Site Ayar Sorgusu Hatalı"; //Bu alanı kapatın site hata verirse kullanıcılar görmesin.
    die();
}


$MetinlerSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM sozlesmelervemetinler LIMIT 1");
$MetinlerSorgusu->execute();
$MetinlerSayisi = $MetinlerSorgusu->rowCount();
$Metinler = $MetinlerSorgusu->fetch(PDO::FETCH_ASSOC);


if ($MetinlerSayisi > 0) {
    $HakkimizdaMetni = $Metinler["HakkimizdaMetni"];
    $UyelikSozlesmesiMetni = $Metinler["UyelikSozlesmesiMetni"];
    $KullanimKosullariMetni = $Metinler["KullanimKosullariMetni"];
    $GizlilikSozlesmesiMetni = $Metinler["GizlilikSozlesmesiMetni"];
    $MesafeliSatisSozlesmesiMetni = $Metinler["MesafeliSatisSozlesmesiMetni"];
    $TeslimatMetni = $Metinler["TeslimatMetni"];
    $IptalIadeDegisimMetni = $Metinler["IptalIadeDegisimMetni"];
} else {
    //echo "Metinler Sorgusu Hatalı"; //Bu alanı kapatın site hata verirse kullanıcılar görmesin.
    die();
}


//Kullanıcı Sorgusu->

if (isset($_SESSION["Kullanici"])) {
    $KullaniciSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi= ? LIMIT 1");
    $KullaniciSorgusu->execute([$_SESSION["Kullanici"]]);
    $KullaniciSayisi = $KullaniciSorgusu->rowCount();
    $Kullanici = $KullaniciSorgusu->fetch(PDO::FETCH_ASSOC);


    if ($KullaniciSayisi > 0) {
        $KullaniciID = $Kullanici["id"];
        $EmailAdresi = $Kullanici["EmailAdresi"];
        $Sifre = $Kullanici["Sifre"];
        $IsimSoyisim = $Kullanici["IsimSoyisim"];
        $TelefonNumarasi = $Kullanici["TelefonNumarasi"];
        $Cinsiyet = $Kullanici["Cinsiyet"];
        $Durum = $Kullanici["Durum"];
        $KayitTarihi = $Kullanici["KayitTarihi"];
        $KayitIpAdresi = $Kullanici["KayitIpAdresi"];
        $AktivasyonKodu = $Kullanici["AktivasyonKodu"];
    } else {
        //echo "Kullanici Sorgusu Hatalı"; //Bu alanı kapatın site hata verirse kullanıcılar görmesin.
        die();
    }

}

//Yönetici Sorgusu
if (isset($_SESSION["Yoneticiler"])) {
    $YoneticiSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM Yoneticiler WHERE KullaniciAdi= ? LIMIT 1");
    $YoneticiSorgusu->execute([$_SESSION["Yonetici"]]);
    $YoneticiSorgusu = $YoneticiSorgusu->rowCount();
    $Yonetici = $YoneticiSorgusu->fetch(PDO::FETCH_ASSOC);


    if ($KullaniciSayisi > 0) {
        $YoneticiID = $Yonetici["id"];
        $YoneticiKullaniciAdi = $Yonetici["KullaniciAdi"];
        $YoneticiSifre = $Yonetici["Sifre"];
        $YoneticiIsimSoyisim = $Yonetici["IsimSoyisim"];
        $YoneticiIEmailAdresi = $Yonetici["EmailAdresi"];
        $YoneticiTelefonNumarasi = $Yonetici["TelefonNumarasi"];

    } else {
        //echo "Kullanici Sorgusu Hatalı"; //Bu alanı kapatın site hata verirse kullanıcılar görmesin.
        die();
    }

}

