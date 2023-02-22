<?php

if (isset($_SESSION["Kullanici"])){

    $SayfalamaIcinSolVeSagButonSayisi   = 2;
    $SayfaBasinaGosterilecekKayitSayisi  = 10;

    $ToplamKayitSayisiSorgusu           = $VeritabaniBaglantisi->prepare("SELECT DISTINCT SiparisNumarasi FROM siparisler WHERE UyeId = ? ORDER BY  SiparisNumarasi DESC");
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
            <td colspan="3">
                <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
                    <td width="203" style="border: 1px solid black; text-align: center; padding: 10px 0px; font-weight: bold">
                        <a href="index.php?SK=50" style="text-decoration: none; color: black;">Üyelik Bilgilerim</a>
                    </td>
                    <td width="10">&nbsp;</td>
                    <td width="203" style="border: 1px solid black; text-align: center; padding: 10px 0px; font-weight: bold">
                        <a href="index.php?SK=58" style="text-decoration: none; color: black;">Adresler</a>
                    </td>
                    <td width="10">&nbsp;</td>
                    <td width="203" style="border: 1px solid black; text-align: center; padding: 10px 0px; font-weight: bold">
                        <a href="index.php?SK=59" style="text-decoration: none; color: black;">Favoriler</a>
                    </td>
                    <td width="10">&nbsp;</td>
                    <td width="203" style="border: 1px solid black; text-align: center; padding: 10px 0px; font-weight: bold">
                        <a href="index.php?SK=60" style="text-decoration: none; color: black;">Yorumlar</a>
                    </td>
                    <td width="10">&nbsp;</td>
                    <td width="203" style="border: 1px solid black; text-align: center; padding: 10px 0px; font-weight: bold">
                        <a href="index.php?SK=61" style="text-decoration: none; color: black;">Siparişler</a>
                    </td>
                </table>
            </td>
        </tr>

        <tr>
            <td><hr></td>
        </tr>

                <tr>
                    <td width="1065" valign="top">
                        <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">

                            <!--Sayfa Başlık Kısmı-->
                            <tr height="40">
                                <td colspan="8" style="color:#FF9900"><h3>Hesabım > Siparişler</h3></td>
                            </tr>
                            <tr height="30">
                                <td colspan="8" style="border-bottom: 1px dashed #CCCCCC;">Tüm siparişlerinizi bu alandan görüntüleyebilirsiniz.</td>
                            </tr>
                            <tr height="50">
                                <td width="125" colspan="1" style="background: #CCCCCC; color: black;" align="left">&nbsp;Sipariş Numarası</td>
                                <td width="75" colspan="1" style="background: #CCCCCC; color: black;" align="left">&nbsp;Resim</td>
                                <td width="50"colspan="1" style="background: #CCCCCC; color: black;" align="left">&nbsp;Yorum</td>
                                <td width="415" colspan="1" style="background: #CCCCCC; color: black;" align="left">&nbsp;Adı</td>
                                <td width="100" colspan="1" style="background: #CCCCCC; color: black;" align="left">&nbsp;Fiyatı</td>
                                <td width="50" colspan="1" style="background: #CCCCCC; color: black;" align="left">&nbsp;Adet</td>
                                <td width="100" colspan="1" style="background: #CCCCCC; color: black;" align="left">&nbsp;Toplam Fiyat</td>
                                <td width="150" colspan="1" style="background: #CCCCCC; color: black;" align="left">&nbsp;Kargo Durumu / Takip</td>
                            </tr>

                            <?php
                            $SiparisNumaralariSorgusu        = $VeritabaniBaglantisi->prepare("SELECT DISTINCT SiparisNumarasi FROM siparisler WHERE UyeId = ? ORDER BY  SiparisNumarasi DESC LIMIT $SayfalamayaBaslanacakKayitSayisi, $SayfaBasinaGosterilecekKayitSayisi"); //LIMIT ve SAYFALAMA
                            $SiparisNumaralariSorgusu->execute([$KullaniciID]);
                            $SiparisNumaralariSayisi         = $SiparisNumaralariSorgusu->rowCount();
                            $SiparisNumaralariKayitlari         = $SiparisNumaralariSorgusu->fetchAll(PDO::FETCH_ASSOC);


                            $BirinciRenk            = "FFFFFF";
                            $IkinciRenk             = "F1F1F1";
                            $RenkSayisi             = 1;

                            if ($SiparisNumaralariSayisi>0){
                                foreach ($SiparisNumaralariKayitlari as $SiparisNumaralariSatirlar){
                                        $SiparisNo  = DonusumleriGeriDondur($SiparisNumaralariSatirlar["SiparisNumarasi"]);

                                        $SiparisSorgusu        = $VeritabaniBaglantisi->prepare("SELECT * FROM siparisler WHERE UyeId = ?  AND SiparisNumarasi = ? ORDER BY  id ASC"); //LIMIT ve SAYFALAMA
                                        $SiparisSorgusu->execute([$KullaniciID, $SiparisNo]);
                                        $SiparisKayitlari      = $SiparisSorgusu->fetchAll(PDO::FETCH_ASSOC);
                                                foreach ($SiparisKayitlari as $SiparisSatirlar){

                                                    $UrunTuru       = DonusumleriGeriDondur($SiparisSatirlar["UrunTuru"]);

                                                    if ($UrunTuru == "Erkek Ayakkabısı"){
                                                        $ResimKlasoruAdi  = "Erkek";

                                                    }elseif($UrunTuru == "Kadın Ayakkabısı"){
                                                        $ResimKlasoruAdi  = "Kadin";
                                                    }else{
                                                        $ResimKlasoruAdi  = "Cocuk";
                                                    }


                                                    $KargoDurumu       = DonusumleriGeriDondur($SiparisSatirlar["KargoDurumu"]);

                                                    if ($KargoDurumu == 0){
                                                        $KargoDurumuYazdir  = "Beklemede";

                                                    }else{
                                                        $KargoDurumuYazdir = DonusumleriGeriDondur($SiparisSatirlar["KargoGonderiKodu"]);

                                                    }




                                                    ?>
                                    <tr height="30">
                                            <td width="125" colspan="1"  align="left">&nbsp;#<?php echo DonusumleriGeriDondur($SiparisSatirlar["SiparisNumarasi"]); ?></td>
                                            <td width="75" colspan="1" align="left"><img src="Resimler/UrunResimleri/<?php echo $ResimKlasoruAdi;?>/<?php echo DonusumleriGeriDondur($SiparisSatirlar["UrunResmiBir"]); ?>" border="0" width="60" height="80"></td>
                                            <td width="50"colspan="1" align="left">
                                                <a href="index.php?SK=75&UrunID=<?php echo DonusumleriGeriDondur($SiparisSatirlar["UrunId"]); ?>"><img src="Resimler/DokumanKirmiziKalemli20x20.png" border="0"></a>
                                            </td>
                                            <td width="415" colspan="1"  align="left"><?php echo DonusumleriGeriDondur($SiparisSatirlar["UrunAdi"]); ?></td>
                                            <td width="100" colspan="1"  align="left"><?php echo FiyatBicimlendir(DonusumleriGeriDondur($SiparisSatirlar["UrunFiyati"])); ?> TL</td>
                                            <td width="50" colspan="1" align="left"><?php echo DonusumleriGeriDondur($SiparisSatirlar["UrunAdedi"]); ?></td>
                                            <td width="100" colspan="1"  align="left"><?php echo FiyatBicimlendir(DonusumleriGeriDondur($SiparisSatirlar["ToplamUrunFiyati"])); ?> TL</td>
                                            <td width="150" colspan="1"  align="left"><?php echo $KargoDurumuYazdir; ?></td>

                                    </tr>

                            <?php
                                  }
                            ?>
                                    <tr height="30">
                                            <td colspan="8"><hr></td>

                                    </tr>
                            <?php
                                }
                                if ($BulunanSayfaSayisi>1){

                            ?>
                                <tr height="50">
                                    <td  colspan="8" valign="bottom" align="left">
                                        <div class="SayfalamaAlanKapsayicisi" align="center">
                                            <div class="SayfalamaAlanIciMetinAlanKapsayicisi">
                                                Toplam <?php echo $BulunanSayfaSayisi; ?> sayfada, <?php echo $ToplamKayitSayisiSorgusu; ?> adet kayıt bulunmaktadır.
                                            </div>

                                            <div class="SayfalamaAlaniIcinNumaraAlaniKapsayicisi">
                                                <?php
                                                if ($Sayfalama>1){
                                                    echo "<span  class='SayfalamaPasif'><a href='index.php?SK=61&SYF=1'><<</a></span>";
                                                    $SayfalamaIcinSayfaDegeriniBirGeriAl   = $Sayfalama-1;
                                                    echo "<span class='SayfalamaPasif'><a href='index.php?SK=61&SYF=" . $SayfalamaIcinSayfaDegeriniBirGeriAl . "'><</a></span>";
                                                }
                                                for ($SayfalamaIcinSayfaIndexDegeri=$Sayfalama-$SayfalamaIcinSolVeSagButonSayisi; $SayfalamaIcinSayfaIndexDegeri<=$Sayfalama+$SayfalamaIcinSolVeSagButonSayisi;
                                                $SayfalamaIcinSayfaIndexDegeri++){


                                                    if (($SayfalamaIcinSayfaIndexDegeri>0) and ($SayfalamaIcinSayfaIndexDegeri<=$BulunanSayfaSayisi)){

                                                        if ($Sayfalama==$SayfalamaIcinSayfaIndexDegeri){

                                                            echo "<span class='SayfalamaAktif'>". $SayfalamaIcinSayfaIndexDegeri ."</span>";

                                                        }else{
                                                            echo "<span class='SayfalamaPasif'><a href='index.php?SK=61&SYF=" . $SayfalamaIcinSayfaIndexDegeri . "'>". $SayfalamaIcinSayfaIndexDegeri ."</a></span>";

                                                        }
                                                    }
                                                }

                                                if ($Sayfalama!=$BulunanSayfaSayisi){
                                                    $SayfalamaIcinSayfaDegeriniBirIleriAl   = $Sayfalama+1;
                                                    echo "<span class='SayfalamaPasif'><a href='index.php?SK=61&SYF=" . $SayfalamaIcinSayfaDegeriniBirIleriAl . "'>></a></span>";
                                                    echo "<span class='SayfalamaPasif'><a href='index.php?SK=61&SYF=". $BulunanSayfaSayisi ."'>>></a></span>";

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
                                    <td  colspan="8" valign="bottom" align="left">Sisteme Kayıtlı Siparişiniz Bulunmamaktadır.</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </td>
                </table>
            </td>
        </tr>
    </table>

<?php

}else{
header("Location:index.php");
}
?>
