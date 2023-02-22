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

        <table width="1000px" align="center" cellspacing="0" cellpadding="0" border="0">
            <tr height="50px" bgcolor="#000000">
                <td align="left" style="color: white;">&nbsp;Ürün Adı</td>
                <td align="right" style="color: white;">Ürün Fiyatı&nbsp;</td>
            </tr>



        <?php
        $Sorgu  = $VeritabaniBaglantisi->prepare("SELECT * FROM urunler");
        $Sorgu->execute();
        $SorguSayisi  = $Sorgu->rowCount();
        $SorguKayitlari  = $Sorgu->fetchAll(PDO::FETCH_ASSOC);


        $RenkBir        = "#dfdfdf";
        $RenkIki        = "#FFFFFF";
        $RenkIcinSayi   = 0;


        foreach ($SorguKayitlari as $Urunler){
            if ($RenkIcinSayi%2){
                $ArkaPlanRengi  = $RenkBir;
            }else{
                $ArkaPlanRengi  = $RenkIki;
            }


        ?>
            <tr height="50px" bgcolor="<?php echo $ArkaPlanRengi; ?>" onmouseover="this.bgColor='#c2cedb';" onmouseout="this.bgColor='<?php echo $ArkaPlanRengi;?>';" style="cursor: pointer;">
                <td align="left">&nbsp;<?php echo $Urunler["urunadi"];?></td>
                <td align="right"><?php echo $Urunler["urunfiyati"];?>&nbsp;</td>
            </tr>

        <?php
            $RenkIcinSayi++;
            }
        ?>
        </table>
</html>
<?php
$VeritabaniBaglantisi = null;
?>