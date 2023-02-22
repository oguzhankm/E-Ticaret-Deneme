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

    <form action="aramasonuclar.php" method="post">
        <table style="margin-top: 100px" width="500" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr align="center">
                <td><input style="width: 100%; height: 30px; padding: 0px 20px;" type="text" name="kelime"></td>
            </tr>
            <tr >
                <td align="center"><input style="margin-top: 10px; width: 50%; height: 30px; padding: 0px 20px;" type="submit" value="Arama Yap"></td>
            </tr>
            <tr >
                <td align="left">&nbsp;</td>
            </tr>
            <tr >
                <td align="left">
                    <?php

                    $GelenKelime        = Filtrele($_POST["kelime"]);

                    $Sorgu      = $VeritabaniBaglantisi->prepare("SELECT * FROM esyalar WHERE adi LIKE '%$GelenKelime%'");
                    $Sorgu->execute();
                    $KayitSayisi   = $Sorgu->rowCount();
                    $Kayitlar      = $Sorgu->fetchAll(PDO::FETCH_ASSOC);

                    echo "<h4>Bulunan Kayıtlar</h4><br/>";
                    foreach ($Kayitlar as $Satirlar){
                        echo $Satirlar["adi"] . "<br />";
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>


    </html>
<?php
$VeritabaniBaglantisi = null;
?>