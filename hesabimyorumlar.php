<?php

if (isset($_SESSION["Kullanici"])){

    $SayfalamaIcinSolVeSagButonSayisi   = 2;
    $SayfaBasinaGosterilecekKayitSayisi  = 10;

    $ToplamKayitSayisiSorgusu           = $VeritabaniBaglantisi->prepare("SELECT * FROM yorumlar WHERE UyeId = ? ORDER BY  YorumTarihi DESC");
    $ToplamKayitSayisiSorgusu->execute([$KullaniciID]);
    $ToplamKayitSayisiSorgusu           = $ToplamKayitSayisiSorgusu->rowCount();


    $SayfalamayaBaslanacakKayitSayisi   = ($Sayfalama*$SayfaBasinaGosterilecekKayitSayisi)-$SayfaBasinaGosterilecekKayitSayisi;
    $BulunanSayfaSayisi                 = ceil($ToplamKayitSayisiSorgusu/$SayfaBasinaGosterilecekKayitSayisi);



    ?>

    <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">

        <tr>
            <td><hr></td>
        </tr>

        <tr>
            <td><table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="203" style="border: 1px solid black; text-align: center; padding: 10px 0; font-weight: bold;"><a href="index.php?SK=50" style="text-decoration: none; color: black;">Üyelik Bilgileri</a></td>
                        <td width="10">&nbsp;</td>
                        <td width="203" style="border: 1px solid black; text-align: center; padding: 10px 0; font-weight: bold;"><a href="index.php?SK=58" style="text-decoration: none; color: black;">Adresler</a></td>
                        <td width="10">&nbsp;</td>
                        <td width="203" style="border: 1px solid black; text-align: center; padding: 10px 0; font-weight: bold;"><a href="index.php?SK=59" style="text-decoration: none; color: black;">Favoriler</a></td>
                        <td width="10">&nbsp;</td>
                        <td width="203" style="border: 1px solid black; text-align: center; padding: 10px 0; font-weight: bold;"><a href="index.php?SK=60" style="text-decoration: none; color: black;">Yorumlar</a></td>
                        <td width="10">&nbsp;</td>
                        <td width="203" style="border: 1px solid black; text-align: center; padding: 10px 0; font-weight: bold;"><a href="index.php?SK=61" style="text-decoration: none; color: black;">Siparişler</a></td>
                    </tr>
                </table></td>
        </tr>

        <tr>
            <td><hr></td>
        </tr>

        <tr>
            <td width="1065" valign="top">
                <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">

                    <!--Sayfa Başlık Kısmı-->
                    <tr height="40">
                        <td colspan="2" style="color:#FF9900"><h3>Hesabım > Yorumlar</h3></td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" style="border-bottom: 1px dashed #CCCCCC;">Tüm yorumlarınızı bu alandan görüntüleyebilirsiniz.</td>
                    </tr>
                    <tr height="50">
                        <td width="125" style="background: #CCCCCC; color: black;" align="left">&nbsp;Puan</td>
                        <td width="75"  style="background: #CCCCCC; color: black;" align="left">&nbsp;Yorum</td>

                    </tr>

                    <?php
                    $YorumlarSorgusu        = $VeritabaniBaglantisi->prepare("SELECT * FROM yorumlar WHERE UyeId = ? ORDER BY  YorumTarihi DESC LIMIT $SayfalamayaBaslanacakKayitSayisi, $SayfaBasinaGosterilecekKayitSayisi"); //LIMIT ve SAYFALAMA
                    $YorumlarSorgusu->execute([$KullaniciID]);
                    $YorumlarSayisi         = $YorumlarSorgusu->rowCount();
                    $YorumlarKayitlari         = $YorumlarSorgusu->fetchAll(PDO::FETCH_ASSOC);

                    if ($YorumlarSayisi>0){
                        foreach ($YorumlarKayitlari as $YorumlarSatirlari){

                            $VerilenPuan  = $YorumlarSatirlari["Puan"];
                            if ($VerilenPuan==1){
                                $ResimDosyasi   = "YildizBirDolu.png";
                            }elseif ($VerilenPuan==2){
                                $ResimDosyasi   = "YildizIkiDolu.png";
                            }elseif ($VerilenPuan==3){
                                $ResimDosyasi   = "YildizUcDolu.png";
                            }elseif ($VerilenPuan==4){
                                $ResimDosyasi   = "YildizDortDolu.png";
                            }elseif($VerilenPuan==5){
                                $ResimDosyasi   = "YildizBesDolu.png";
                            }

                    ?>
                                <tr height="30">
                                    <td width="85" align="left" height="50" valign="top" style="border-bottom: 1px dashed #CCCCCC; padding: 15px 0px;"><img src="Resimler/<?php echo $ResimDosyasi;?>" border="0" ></td>
                                    <td width="980" align="left" height="50" valign="top" style="border-bottom: 1px dashed #CCCCCC; padding: 15px 0px;"><?php echo DonusumleriGeriDondur($YorumlarSatirlari["YorumMetni"]);?></td>
                                </tr>

                    <?php
                            }
                    ?>

                        <?php

                        //SAYFALAMA KISMI
                        if ($BulunanSayfaSayisi>1){

                            ?>
                            <tr height="50">
                                <td  colspan="2" valign="bottom" align="left">
                                    <div class="SayfalamaAlanKapsayicisi" align="center">
                                        <div class="SayfalamaAlanIciMetinAlanKapsayicisi">
                                            Toplam <?php echo $BulunanSayfaSayisi; ?> sayfada, <?php echo $ToplamKayitSayisiSorgusu; ?> adet kayıt bulunmaktadır.
                                        </div>

                                        <div class="SayfalamaAlaniIcinNumaraAlaniKapsayicisi">
                                            <?php
                                            if ($Sayfalama>1){
                                                echo "<span  class='SayfalamaPasif'><a href='index.php?SK=60&SYF=1'><<</a></span>";
                                                $SayfalamaIcinSayfaDegeriniBirGeriAl   = $Sayfalama-1;
                                                echo "<span class='SayfalamaPasif'><a href='index.php?SK=60&SYF=" . $SayfalamaIcinSayfaDegeriniBirGeriAl . "'><</a></span>";
                                            }
                                            for ($SayfalamaIcinSayfaIndexDegeri=$Sayfalama-$SayfalamaIcinSolVeSagButonSayisi; $SayfalamaIcinSayfaIndexDegeri<=$Sayfalama+$SayfalamaIcinSolVeSagButonSayisi;
                                                 $SayfalamaIcinSayfaIndexDegeri++){


                                                if (($SayfalamaIcinSayfaIndexDegeri>0) and ($SayfalamaIcinSayfaIndexDegeri<=$BulunanSayfaSayisi)){

                                                    if ($Sayfalama==$SayfalamaIcinSayfaIndexDegeri){

                                                        echo "<span class='SayfalamaAktif'>". $SayfalamaIcinSayfaIndexDegeri ."</span>";

                                                    }else{
                                                        echo "<span class='SayfalamaPasif'><a href='index.php?SK=60&SYF=" . $SayfalamaIcinSayfaIndexDegeri . "'>". $SayfalamaIcinSayfaIndexDegeri ."</a></span>";

                                                    }
                                                }
                                            }

                                            if ($Sayfalama!=$BulunanSayfaSayisi){
                                                $SayfalamaIcinSayfaDegeriniBirIleriAl   = $Sayfalama+1;
                                                echo "<span class='SayfalamaPasif'><a href='index.php?SK=60&SYF=" . $SayfalamaIcinSayfaDegeriniBirIleriAl . "'>></a></span>";
                                                echo "<span class='SayfalamaPasif'><a href='index.php?SK=60&SYF=". $BulunanSayfaSayisi ."'>>></a></span>";

                                            }
                                            ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <?php

                        }
                    }else{
                        ?>
                        <tr height="50">
                            <td  colspan="2" valign="bottom" align="left">Sisteme Kayıtlı Yorumlarınız Bulunmamaktadır.</td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </td></table>
        </td>
    </tr>
</table>

<?php

}else{
    header("Location:index.php");
}
?>
