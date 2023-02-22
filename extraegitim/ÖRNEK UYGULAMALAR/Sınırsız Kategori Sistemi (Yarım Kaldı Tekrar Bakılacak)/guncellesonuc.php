<?php

require_once  "baglan.php";



?>

<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Extra Eğitim</title>
</head>

<body>

<?php

function AcilirListeIcinMenuYaz($MenuUstIdDegeri=0, $BoslukDegeri=0){
    global $VeritabaniBaglantisi;

    $MenuSorgusu  = $VeritabaniBaglantisi->prepare("SELECT * FROM menuler WHERE ustid = ?");
    $MenuSorgusu->execute([$MenuUstIdDegeri]);
    $MenuSorgusuKayitSayisi = $MenuSorgusu->rowCount();
    $MenuSorgusuKayitlari   = $MenuSorgusu->fetchAll(PDO::FETCH_ASSOC);


    if ($MenuSorgusuKayitSayisi>0){
        foreach ($MenuSorgusuKayitlari as $Kayitlar){
            $MenuId  = $Kayitlar["id"];
            $MenuUstId = $Kayitlar["ustid"];
            $MenuMenuAdi = $Kayitlar["menuadi"];

            echo "<option value='". $MenuId ."'>" . str_repeat("&nbsp;" , $BoslukDegeri) . $MenuMenuAdi . "</option>";
            AcilirListeIcinMenuYaz($MenuId, $BoslukDegeri+5);
        }
    }

}

//Menü Güncelleme Formu

?>
MENÜ GÜNCELLEME FORMU <br>

<form action="guncellesonuc.php" method="post">
    Üst Menü : <select name="UstMenuSecimi">
        <option value="0">Ana Menü Yap</option>
        <?php AcilirListeIcinMenuYaz(); ?>
    </select><br>
    Menü Adı : <input type="text" name="MenuAdi"> <br>
    <input type="submit" value="Menü Ekle">


</form>
<br><br><br>
<?php
$VeritabaniBaglantisi = null;
?>

</body>
</html>
