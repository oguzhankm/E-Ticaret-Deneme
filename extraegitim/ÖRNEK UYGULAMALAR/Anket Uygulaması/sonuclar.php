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

        $AnketSorgusu   =  $VeritabaniBaglantisi->prepare("SELECT * FROM anket LIMIT 1");
        $AnketSorgusu->execute();
        $KayitSayisi  =  $AnketSorgusu->rowCount();
        $Kayit     =  $AnketSorgusu->fetch();

        $AnketBirinciOysayisi       = $Kayit["oysayisibir"];
        $AnketIkinciOysayisi        = $Kayit["oysayisiiki"];
        $AnketUcuncuOysayisi        = $Kayit["oysayisiuc"];
        $AnketToplamOysayisi        = $Kayit["toplamoysayisi"];


        $BirinciSecenekOyYuzdesi  = ($AnketBirinciOysayisi/$AnketToplamOysayisi)*100;
        $BirinciSecenekYuzdeFormatla  = number_format($BirinciSecenekOyYuzdesi, 2, ",", "");


        $IkinciSecenekOyYuzdesi  = ($AnketIkinciOysayisi/$AnketToplamOysayisi)*100;
        $IkinciSecenekYuzdeFormatla  = number_format($IkinciSecenekOyYuzdesi, 2, ",", "");



        $UcuncuSecenekOyYuzdesi  = ($AnketUcuncuOysayisi/$AnketToplamOysayisi)*100;
        $UcuncuSecenekYuzdeFormatla  = number_format($UcuncuSecenekOyYuzdesi, 2, ",", "");



        if ($KayitSayisi>0){
        ?>


        <table width="300" border="0px" align="center" cellpadding="0" cellspacing="0">

            <tr height="30">
                <td colspan="2"></td>
            </tr>

            <tr height="30">
                <td width="75">%<?php echo $BirinciSecenekYuzdeFormatla; ?> </td>
                <td width="225"><?php echo $Kayit["cevapbir"]; ?></td>
            </tr>
            <tr height="30">
                <td width="75">%<?php echo $IkinciSecenekYuzdeFormatla; ?> </td>
                <td width="225"><?php echo $Kayit["cevapiki"]; ?></td>
            </tr>
            <tr height="30">
                <td width="75">%<?php echo $UcuncuSecenekYuzdeFormatla; ?> </td>
                <td width="225"><?php echo $Kayit["cevapuc"]; ?></td>
            </tr>

            <tr height="30">
                <td colspan="2" align="right"><a href="index.php" style="color: cadetblue; text-decoration: none;">Anasayfaya Dön</a></td>
            </tr>
        </table>
    <?php
}else{
    header("Location: index.php");
    exit();
}
?>


</html>
<?php
$VeritabaniBaglantisi = null;
?>









