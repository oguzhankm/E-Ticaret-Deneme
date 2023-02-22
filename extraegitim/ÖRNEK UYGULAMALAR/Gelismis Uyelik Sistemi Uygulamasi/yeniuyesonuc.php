<?php
require_once ("baglan.php");


if (isset($_POST["kullaniciadi"])){
    $GelenKullaniciAdi   = Filtrele($_POST["kullaniciadi"]);
}else{
    $GelenKullaniciAdi   = "";
}

if (isset($_POST["sifre"])){
    $GelenSifre   = Filtrele($_POST["sifre"]);
}else{
    $GelenSifre   = "";
}

if (isset($_POST["adisoyadi"])){
    $GelenAdSoyad   = Filtrele($_POST["adisoyadi"]);
}else{
    $GelenAdSoyad   = "";
}


if (isset($_POST["emailadresi"])){
    $GelenEmailAdresi   = Filtrele($_POST["emailadresi"]);
}else{
    $GelenEmailAdresi   = "";
}


$KontrolSorgusu   = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? OR emailadresi=? ");
$KontrolSorgusu->execute([$GelenKullaniciAdi, $GelenEmailAdresi]);
$KontrolSayisi  = $KontrolSorgusu->rowCount();

if ($KontrolSayisi>0){
    echo "HATA<br/>";
    echo "Kullanıcı Adı ve ya Email Adresi Zaten Kullanılmaktadır.<br/>";
    echo "Anasayfaya Dönmek İçin <a href='index.php'>Tıklayın.</a>";
}else{
    $KayitEkle  = $VeritabaniBaglantisi->prepare("INSERT INTO uyeler (kullaniciadi, sifre, adisoyadi, emailadresi, kayittarihi) values (?, ?, ?, ?, ?)");
    $KayitEkle->execute([$GelenKullaniciAdi, $GelenSifre, $GelenAdSoyad, $GelenEmailAdresi, $SimdikiZaman]);
    $KayitKontrol  = $KayitEkle->rowCount();

    if ($KayitKontrol>0){
        echo "TEBRİKLER<br/>";
        echo "Kullanıcı Kaydı Başarıyla Tamamlandı.<br/>";
        echo "Anasayfaya Dönmek İçin <a href='index.php'>Tıklayın.</a>";
    }else{
        echo "HATA<br/>";
        echo "Kullanıcı Kaydı İşlemi Sırasında Beklenmeyen Bir Hata Oluştu.<br/>";
        echo "Lütfen Daha Sonra Tekrar Deneyiniz.<br/>";
        echo "Anasayfaya Dönmek İçin <a href='index.php'>Tıklayın.</a>";
    }

}




?>


