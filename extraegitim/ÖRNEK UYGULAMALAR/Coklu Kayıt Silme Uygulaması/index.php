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
<form action="sonuc.php" method="post">
        <table width="500px" align="center" border="0" cellpadding="0" cellspacing="0">
        <?php


        $Sorgu       =       $VeritabaniBaglantisi->prepare("SELECT * FROM kisiler");
        $Sorgu->execute();



        $KayitSayisi   =  $Sorgu->rowCount();
        $Kayitlar      = $Sorgu->fetchAll(PDO::FETCH_ASSOC);

        foreach ($Kayitlar as $KayitSatirlari){
       ?>

            <tr>
                <td width="25px" height="30px" align="left">
                    <input type="checkbox" name="secim[]" value="<?php  echo $KayitSatirlari["id"] ;  ?>">
                </td>
                <td height="30px" align="left">
                   <?php  echo $KayitSatirlari["adi"] . " " . $KayitSatirlari["soyadi"] ;  ?>
                </td>
            </tr>




        <?php
        }
        ?>
            <tr >
                <td colspan="2" height="50px" align="left">
                    <input type="submit" value="Seçilenleri Sil">
                </td>

            </tr>
        </table>
</form>

</body>
</html>









