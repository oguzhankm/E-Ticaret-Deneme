<?php
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
    $Uc     = htmlspecialchars($Iki);
    $Sonuc  = $Uc;

    return $Sonuc;
}




?>


