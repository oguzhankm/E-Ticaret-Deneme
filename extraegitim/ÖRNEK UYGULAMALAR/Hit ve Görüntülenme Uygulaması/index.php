<?php
require_once "baglan.php";

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

        <table style="width: 1000px;" align="center" border="1px" cellpadding="0" cellspacing="0">

                <tr style="height: 50px; alignment: center">
                    <td style="alignment: left"><b>Görüntülenme ve Hit Uygulaması</b></td>
                    <td  style="alignment: right"><a href="index.php" style="text-decoration: none; color: black;">Anasayfa</a></td>
                </tr>
                <tr height="30px">
                    <td colspan="2"></td>
                </tr>
            <tr  height="30" bgcolor="#990000">
                <td align="left"  style="color: white">&nbsp;Makale Başlığı</td>
                <td align="right" style="color: white">Gösterim Sayısı&nbsp;</td>
            </tr>


        <?php
        $Sorgu  = $VeritabaniBaglantisi->prepare("SELECT * FROM makaleler");
        $Sorgu->execute();
        $KayitSayisi  = $Sorgu->rowCount();
        $Kayitlar     = $Sorgu->fetchAll(PDO::FETCH_ASSOC);

        if ($KayitSayisi>0){
            foreach ($Kayitlar as $Satirlar){
        ?>
        <tr  height="30">
            <td style="alignment: left"><a href="oku.php?id=<?php echo $Satirlar["id"];?>" style="color: black; text-decoration: none;">&nbsp;<?php echo $Satirlar["makalebasligi"];?></a></td>
            <td align="right"><?php echo $Satirlar["gosterimsayisi"];?>&nbsp;</td>
        </tr>

        <?php
            }
        }

        ?>

        </table>
</body>
</html>
<?php
$VeritabaniBaglantisi = null;
?>









