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
            </table>
        </form>





</html>
<?php
$VeritabaniBaglantisi = null;
?>