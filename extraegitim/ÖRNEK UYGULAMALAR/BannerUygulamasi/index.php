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

        $ReklamSorgusu   =  $VeritabaniBaglantisi->prepare("SELECT * FROM bannerlar ORDER BY gosterimsayisi ASC LIMIT 1");
        $ReklamSorgusu->execute([]);
        $ReklamSayisi    =  $ReklamSorgusu->rowCount();
        $ReklamKaydi     =  $ReklamSorgusu->fetch(PDO::FETCH_ASSOC);

        ?>




        <table width="1000px" border="0" align="center" cellspacing="0" cellpadding="0">
            <tr height="150">
                <td align="center"><img src="BannerUygulamasi/dosyalar/<?php echo $ReklamKaydi["bannerdosyasi"]; ?>" border="0" ></td>
            </tr>
        </table>



</html>
<?php

$ReklamGuncelle     = $VeritabaniBaglantisi->prepare("UPDATE bannerlar SET gosterimsayisi=gosterimsayisi+1 WHERE id = ? LIMIT 1");
$ReklamGuncelle->execute([$ReklamKaydi["id"]]);

$VeritabaniBaglantisi = null;
?>