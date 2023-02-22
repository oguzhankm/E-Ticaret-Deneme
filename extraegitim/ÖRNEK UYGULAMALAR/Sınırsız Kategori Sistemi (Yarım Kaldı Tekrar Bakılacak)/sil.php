<?php

require_once  "baglan.php";

$GelenID         =  Filtrele($_GET["id"]);



$MenuHiyerarsiBulDizisi   = array($GelenID);
function MenuHiyerarsiBul($MenuUstIdDegeri)
{
    global $VeritabaniBaglantisi;
    global $MenuHiyerarsiBulDizisi;


    $MenuSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM menuler WHERE ustid = ?");
    $MenuSorgusu->execute([$MenuUstIdDegeri]);
    $MenuSorgusuKayitSayisi = $MenuSorgusu->rowCount();
    $MenuSorgusuKayitlari = $MenuSorgusu->fetchAll(PDO::FETCH_ASSOC);


    if ($MenuSorgusuKayitSayisi > 0) {
        foreach ($MenuSorgusuKayitlari as $Kayitlar) {
            $MenuId = $Kayitlar["id"];
            $MenuUstId = $Kayitlar["ustid"];
            $MenuMenuAdi = $Kayitlar["menuadi"];

            $MenuHiyerarsiBulDizisi[] = $MenuId;
            MenuHiyerarsiBul($MenuId);
        }
    }
    return ($MenuHiyerarsiBulDizisi);
}

MenuHiyerarsiBul($GelenID);

    if (isset($GelenID)) {

        $SilinecekMenuler = MenuHiyerarsiBul($GelenID);

        foreach ($SilinecekMenuler as $SilinecekID) {
            $Sil = $VeritabaniBaglantisi->prepare("DELETE FROM menuler WHERE id= ? LIMIT 1");
            $Sil->execute([$SilinecekID]);
            $SilKontrolSayisi = $Sil->rowCount();
            if ($SilKontrolSayisi < 1) {
                echo "HATA</br>";
                echo "İşlem Esnasında Bir Sorun Oluştu. Daha sonra Tekrar Deneyiniz. <br>";
                echo "Anasayfaya Dönmek İçin <a href='index.php'>Tıklayınız</a>";
            }


        }


    header("Location: index.php");
    exit();
}else{
        echo "HATA</br>";
        echo "Lütfen Boş Alan Bırakmayınız. <br>";
        echo "Anasayfaya Dönmek İçin <a href='index.php'>Tıklayınız</a>";
}





$VeritabaniBaglantisi = null;
?>