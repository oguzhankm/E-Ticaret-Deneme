<?php

require_once  "baglan.php";

$GelenUstMenuSecimi          =  Filtrele($_POST["UstMenuSecimi"]);
$GelenMenuAdi                =  Filtrele($_POST["MenuAdi"]);


if (isset($GelenUstMenuSecimi) and isset($GelenMenuAdi)){

    $Ekle  = $VeritabaniBaglantisi->prepare("INSERT INTO menuler (ustid, menuadi) values (?, ?)");
    $Ekle->execute([$GelenUstMenuSecimi, $GelenMenuAdi]);
    $EkleKayitSayisi = $Ekle->rowCount();

    if ($EkleKayitSayisi>0){
        header("Location: index.php");
        exit();
    }else{
        echo "HATA</br>";
        echo "İşlem Esnasında Bir Sorun Oluştu. Daha sonra Tekrar Deneyiniz. <br>";
        echo "Anasayfaya Dönmek İçin <a href='index.php'>Tıklayınız</a>";
    }
}else{
    echo "HATA</br>";
    echo "Lütfen Boş Alan Bırakmayınız. <br>";
    echo "Anasayfaya Dönmek İçin <a href='index.php'>Tıklayınız</a>";
}





$VeritabaniBaglantisi = null;
?>

