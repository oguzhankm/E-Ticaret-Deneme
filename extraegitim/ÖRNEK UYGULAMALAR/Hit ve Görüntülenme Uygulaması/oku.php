<?php

require_once "baglan.php";


$GelenID        =   Filtrele($_GET["id"]);

$HitGuncelle  = $VeritabaniBaglantisi->prepare("UPDATE makaleler SET gosterimsayisi=gosterimsayisi+1 WHERE id= ?" );
$HitGuncelle->execute([$GelenID]);



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


        <table style="width: 1000px;" align="center" border="0px" cellpadding="0" cellspacing="0">

            <tr style="height: 50px; alignment: center">
                <td style="alignment: left"><b>Görüntülenme ve Hit Uygulaması</b></td>
                <td  style="alignment: right"><a href="index.php" style="text-decoration: none; color: black;">Anasayfa</a></td>
            </tr>


            <?php
            $Sorgu  = $VeritabaniBaglantisi->prepare("SELECT * FROM makaleler WHERE id=?" );
            $Sorgu->execute([$GelenID]);
            $KayitSayisi  = $Sorgu->rowCount();
            $Kayit     = $Sorgu->fetch(PDO::FETCH_ASSOC);

            if ($KayitSayisi>0){

            ?>

            <tr style="height: 30px;">
                <td align="left" colspan="2"><h3><?php echo $Kayit["makalebasligi"];?></h3></td>
            </tr>
            <tr style="height: 30px;">
                <td align="left"  colspan="2"><?php echo $Kayit["makaleicerigi"];?></td>
            </tr>
            <tr style="height: 30px;">
                <td align="center" colspan="2">Bu makale <?php echo $Kayit["gosterimsayisi"];?> defa görüntülendi</td>
            </tr>

            <?php
            }else{
                header("Location: index.php");
            }

            ?>

        </table>








</body>
</html>
<?php
$VeritabaniBaglantisi = null;
?>



