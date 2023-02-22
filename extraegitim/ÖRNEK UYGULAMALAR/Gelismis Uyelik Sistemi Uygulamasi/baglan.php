<?php
session_start(); ob_start();


try {
    $VeritabaniBaglantisi   = new PDO("mysql:host=localhost; dbname=extraegitim; charset=UTF8", "root", "");
}catch (PDOException $Hata){
    echo "Bağlantı Hatası<br/>";
    echo "Hata Mesajı : " .$Hata->getMessage();
    die();
}


function Filtrele($Deger){
    $Bir    = trim($Deger);
    $Iki    = strip_tags($Bir);
    $Uc     = htmlspecialchars($Iki, ENT_QUOTES);
    $Sonuc  = $Uc;

    return $Sonuc;
}


$ZamanDamgasi  = time();
$SimdikiZaman = date('m/d/Y H:i:s', $ZamanDamgasi);


if (isset($_SESSION["Kullanici"])){

    $UyelerSorgusu   = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? ");
    $UyelerSorgusu->execute([$_SESSION["Kullanici"]]);
    $UyelerKayitSayisi  = $UyelerSorgusu->rowCount();
    $UyelerKaydi        = $UyelerSorgusu->fetch(PDO::FETCH_ASSOC);
    if ($UyelerKayitSayisi>0){
        $UyeAdiSoyadi  = $UyelerKaydi["adisoyadi"];
    }else{
        $UyeAdiSoyadi  = "";
    }


}




?>


