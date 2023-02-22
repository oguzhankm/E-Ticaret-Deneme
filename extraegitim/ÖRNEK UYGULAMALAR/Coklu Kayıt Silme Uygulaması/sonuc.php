<?php

require_once "baglan.php";


$GelenSecimDegerleri    = $_POST["secim"];


foreach ($GelenSecimDegerleri as $SilinecekDeger){
    $SilinecekID = Filtrele($SilinecekDeger);

    $Sil  =  $VeritabaniBaglantisi->prepare("DELETE FROM kisiler WHERE id IN (?);");
    $Sil->execute([$SilinecekID]);


}

header("Location: index.php");
exit();



?>







