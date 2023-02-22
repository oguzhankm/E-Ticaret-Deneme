<?php

require_once  "baglan.php";

$GelenCevap     = Filtrele($_POST["cevap"]);


$KontrolSorgusu  = $VeritabaniBaglantisi->prepare("SELECT * FROM oykullananlar WHERE ipadresi = ? AND tarih >= ?");
$KontrolSorgusu->execute([$IPAdresi, $ZamaniGeriAl]);
$KontrolSayisi      =  $KontrolSorgusu->rowCount();

if ($KontrolSayisi>0){
    echo "HATA<br />";
    echo "Daha önce oy kullandınız. Lütfen 24 saat sonra tekrar deneyiniz<br />";
    echo "Anasayfa'ya dönmek için <a href='index.php'>tıklayınız</a><br />";
}else{
    if ($GelenCevap == 1){
        $Guncelle = $VeritabaniBaglantisi->prepare("UPDATE anket SET oysayisibir=oysayisi+1, toplamoysayisi=toplamoysayisi+1");
        $Guncelle->execute();
    }elseif ($GelenCevap == 2){
        $Guncelle = $VeritabaniBaglantisi->prepare("UPDATE anket SET oysayisiiki=oysayisiiki+1, toplamoysayisi=toplamoysayisi+1");
        $Guncelle->execute();
    }elseif ($GelenCevap == 3){
        $Guncelle = $VeritabaniBaglantisi->prepare("UPDATE anket SET oysayisiuc=oysayisiuc+1, toplamoysayisi=toplamoysayisi+1");
        $Guncelle->execute();
    }else{
        echo "HATA<br />";
        echo "Cevap kaydı bulunamadı.<br />";
        echo "Anasayfa'ya dönmek için <a href='index.php'>tıklayınız</a><br />";
    }


    $Ekle = $VeritabaniBaglantisi->prepare("INSERT INTO oykullananlar(ipadresi, tarih) values (?, ?)");
    $Ekle->execute([$IPAdresi, $ZamanDamgasi]);
    $EKleKontrol   =  $Ekle->rowCount();

    if ($EKleKontrol>0){
        echo "TEŞEKKÜRLER<br />";
        echo "Vermiş olduğunuz Oy Sisteme Kaydedildi.<br />";
        echo "Anasayfa'ya dönmek için <a href='index.php'>tıklayınız</a><br />";
    }else{
        echo "HATA<br />";
        echo "İşlem Sırasında Beklenmeyen Bir Hata Oluştu Daha Sonra Tekrar Deneyiniz.<br />";
        echo "Anasayfa'ya dönmek için <a href='index.php'>tıklayınız</a><br />";
    }


}

$VeritabaniBaglantisi = null;


?>




