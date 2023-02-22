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

$KontrolSorgusu   = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? AND sifre=? ");
$KontrolSorgusu->execute([$GelenKullaniciAdi, $GelenSifre]);
$KontrolSayisi  = $KontrolSorgusu->rowCount();



if ($KontrolSayisi>0){
    $_SESSION["Kullanici"]  = $GelenKullaniciAdi;
    header("Location: index.php");
}else{
    echo "HATA<br/>";
    echo "Girilen Bilgiler İle Eşleşen Kullanıcı Kaydı Bulunmamaktadır.<br/>";
    echo "Anasayfaya Dönmek İçin <a href='index.php'>Tıklayın.</a>";
}






?>


