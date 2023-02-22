<?php

require_once  "baglan.php";

if (isset($_GET["sayfalama"])){
    $GelenSayfalama = Filtrele($_GET["sayfalama"]);
}else{
    $GelenSayfalama = 1;
}


$SayfalamaSolveSagSayfaSayisi           =2;
$SayfaBasinaGosterilecekKayitSayisi     = 5;
$ToplamKayitSayisiSorgusu               = $VeritabaniBaglantisi->prepare("SELECT * FROM urunler");
$ToplamKayitSayisiSorgusu->execute();
$ToplamKayitSayisi                       =  $ToplamKayitSayisiSorgusu->rowCount();
$SayfalamayaBaslanacakKayitSayisi        = ($GelenSayfalama * $SayfaBasinaGosterilecekKayitSayisi)-$SayfaBasinaGosterilecekKayitSayisi;
$BulunanSayfaSayisi                      = ceil($ToplamKayitSayisi/$SayfaBasinaGosterilecekKayitSayisi);



?>

<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Extra Eğitim</title>
</head>
<style>
    .SayfalamaAlanKapsayicisi{
        display: block;
        width: 100%;
        height: auto;
        margin: 0;
        padding: 10px 0px 10px 0px;
        border: 0px;
        outline: none;
        text-align: center;
        text-decoration: none;

    }
    .SayfalamaAlaniIcinMetinAlaniKapsayicisi{
        display: block;
        width: 100%;
        height: auto;
        margin: 0;
        padding: 5px 0px 5px 0px;
        border: 0px;
        outline: none;
        text-align: center;
        text-decoration: none;
    }
    .SayfalamaAlaniIcinNumaralandirmaAlanKapsayicisi{
        display: block;
        width: 100%;
        height: auto;
        margin: 0;
        padding: 5px 0px 5px 0px;
        border: 0px;
        outline: none;
        text-align: center;
        text-decoration: none;
    }
    .pasif{
        display: inline-block;
        width: auto;
        height: 20px;
        margin: 0px 1px;
        padding: 5px 7.5px;
        background: white;
        border: 1px solid #DADADA;
        color: #646464;
        font-size: 14px;
        font-weight: normal;
        font-style: normal;
        outline: none;
        line-height: 20px;
        text-align: center;
        text-decoration: none;
    }
    .pasif a:link, a:visited, a:hover, a:active {
        text-decoration: none;
        color: #646464;

    }
    .aktif{
        display: inline-block;
        width: auto;
        height: 20px;
        margin: 0px 1px;
        padding: 5px 7.5px;
        background: #F6F6F6;
        border: 1px solid gray;
        color: orangered;
        font-size: 14px;
        font-weight: bold;
        font-style: normal;
        outline: none;
        line-height: 20px;
        text-align: center;
        text-decoration: none;
    }
</style>

<body>
        <table width="500px" align="center" border="0" cellpadding="0" cellspacing="0">
        <?php
        $UrunSorgusu                     = $VeritabaniBaglantisi->prepare("SELECT * FROM urunler ORDER BY id LIMIT $SayfalamayaBaslanacakKayitSayisi, $SayfaBasinaGosterilecekKayitSayisi");
        $UrunSorgusu->execute();
        $UrunSorgusuKayitSayisi          =  $UrunSorgusu->rowCount();
        $UrunSorgusuKayitlari            =  $UrunSorgusu->fetchAll(PDO::FETCH_ASSOC);

        foreach ($UrunSorgusuKayitlari as $Kayitlar){

            echo "<tr height='25px'>";
            echo "<td width='25' align='left'>" . $Kayitlar["id"] . "</td>";
            echo "<td width='375'align='left'>" . $Kayitlar["urunadi"] . "</td>";
            echo "<td width='100' align='right'>" . $Kayitlar["urunfiyati"] . " " . $Kayitlar["parabirimi"] . "</td>";
            echo "</tr>";
        }
        ?>
        </table>


        <div class="SayfalamaAlanKapsayicisi">
            <div class="SayfalamaAlaniIcinMetinAlaniKapsayicisi">
                Toplam <?php echo $BulunanSayfaSayisi;?> sayfada, <?php echo $ToplamKayitSayisi;?> adet kayıt bulunmaktadır.
            </div>

            <div class="SayfalamaAlaniIcinNumaralandirmaAlanKapsayicisi">
                <?php
                if ($GelenSayfalama>1){
                    echo "<span class='pasif'><a href='index.php?sayfalama=1'><<</a></span>";
                    $SayfalamaBirGeriAl  = $GelenSayfalama-1;
                    echo " <span class='pasif'><a href='index.php?sayfalama=" . $SayfalamaBirGeriAl ."'><</a></span>";

                }


                for ($SayfalamIndex=$GelenSayfalama-$SayfalamaSolveSagSayfaSayisi; $SayfalamIndex<=$GelenSayfalama+$SayfalamaSolveSagSayfaSayisi;
                $SayfalamIndex++){
                       if (($SayfalamIndex>0) and ($SayfalamIndex<=$BulunanSayfaSayisi)){
                           if ($GelenSayfalama==$SayfalamIndex){
                               echo " <span class='aktif'>" . $SayfalamIndex . "</span>";

                           }else{
                               echo " <span class='pasif'><a href='index.php?sayfalama=". $SayfalamIndex ."'>". $SayfalamIndex ."</a>". "</span>";
                           }

                       }
                }



                if ($GelenSayfalama!=$BulunanSayfaSayisi){


                    $SayfalamaBirIleriAl  = $GelenSayfalama+1;
                    echo "<span class='pasif'><a href='index.php?sayfalama=" . $SayfalamaBirIleriAl ."''>></a></span>";

                    echo " <span class='pasif'><a href='index.php?sayfalama=". $BulunanSayfaSayisi ."'>>></a></span>";



                }


                ?>
            </div>
        </div>

</html>
<?php
$VeritabaniBaglantisi = null;
?>