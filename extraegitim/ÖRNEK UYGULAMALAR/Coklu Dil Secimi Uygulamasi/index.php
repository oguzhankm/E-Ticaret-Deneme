<?php
session_start();
require_once  "baglan.php";


if (empty($_SESSION["SiteDili"])){
        include("diltr.php");
}else{
        if ($_SESSION["SiteDili"]  == "TR"){
            include("diltr.php");
        }elseif ($_SESSION["SiteDili"] == "EN"){
            include ("dilen.php");
        }elseif ($_SESSION["SiteDili"] == "FR"){
            include ("dilfr.php");
        }
}

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
        <table width="1000" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr height="40px">
                <td width="130"><?php echo ANASAYFA; ?></td>
                <td width="155"><?php echo HAKKIMIZDA; ?></td>
                <td width="130"><?php echo ILETISIM; ?></td>
                <td width="355"><?php echo URUNLER; ?></td>
                <td width="190">
                    <a href="secim.php?DilSecimi=TR" style="color: black; text-decoration: none">TR</a>
                    | <a href="secim.php?DilSecimi=EN" style="color: black; text-decoration: none">EN</a>
                    | <a href="secim.php?DilSecimi=FR" style="color: black; text-decoration: none">FR</a>
                </td>
            </tr>
        </table>
    </form>





    </html>
<?php
$VeritabaniBaglantisi = null;
?>