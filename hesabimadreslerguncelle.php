<?php

if (isset($_SESSION["Kullanici"])){


    if(isset($_GET["ID"])){
        $GelenID		=	Guvenlik($_GET["ID"]);
    }else{
        $GelenEmailAdresi		=	"";
    }
    if ($GelenID!= ""){





        $AdresSorgusu        = $VeritabaniBaglantisi->prepare("SELECT * FROM adresler WHERE id = ? AND UyeId = ? LIMIT 1");
        $AdresSorgusu->execute([$GelenID, $KullaniciID]);
        $AdresSayisi         = $AdresSorgusu->rowCount();
        $KayitBilgisi        = $AdresSorgusu->fetch(PDO::FETCH_ASSOC);

        if ($AdresSayisi>0){
    ?>

    <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="500" valign="top">
                <form action="index.php?SK=63&ID=<?php echo $GelenID; ?>" method="post">
                    <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
                        <!--Sayfa Başlık Kısmı-->
                        <tr height="40">
                            <td   style="color:#FF9900"><h3>Hesabım > Adresler</h3></td>
                        </tr>
                        <tr height="30">
                            <td   valign="top" style="border-bottom: 1px dashed #CCCCCC;">Tüm adreslerini görüntüleyebilir ve güncelleyebilirsiniz.</td>
                        </tr>
                        <!--Ad Soyad-->
                        <tr height="30">
                            <td  valign="bottom" align="left">İsim Soyisim</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><input type="text" name="IsimSoyisim" class="InputAlanlari" value="<?php echo $KayitBilgisi["AdiSoyadi"]; ?>"></td>
                        </tr>

                        <!--E-Mail Adresi-->
                        <tr height="30">
                            <td  valign="bottom" align="left">Adres</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><input type="mail" name="Adres" class="InputAlanlari" value="<?php echo $KayitBilgisi["Adres"]; ?>"></td>
                        </tr>
                        <!--İlçe-->
                        <tr height="30">
                            <td  valign="bottom" align="left">İlçe</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><input type="text" name="Ilce" class="InputAlanlari" value="<?php echo $KayitBilgisi["Ilce"]; ?>"></td>
                        </tr>

                        <!--Şehir-->
                        <tr height="30">
                            <td  valign="bottom" align="left">Şehir</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><input type="text" name="Sehir" class="InputAlanlari" value="<?php echo $KayitBilgisi["Sehir"]; ?>"></td>
                        </tr>
                        <!--Telefon-->
                        <tr height="30">
                            <td  valign="bottom" align="left">Telefon Numarası</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><input type="text" name="TelefonNumarasi" maxlength="11" class="InputAlanlari" value="<?php echo $KayitBilgisi["TelefonNumarasi"]; ?>"></td>
                        </tr>




                        <!--Buton Kısmı-->
                        <tr height="40">
                            <td colspan="2" align="center"><input type="submit" value="Adres Güncelle" class="YesilButon"></td>
                        </tr>
                    </table>
                </form>
            </td>

            <td width="20">&nbsp;</td>

            <td width="545" valign="top"><table width="545" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr height="40">
                        <td style="color:#FF9900"><h3>Reklam</h3></td>
                    </tr>
                    <tr height="30">
                        <td  valign="top" style="border-bottom: 1px dashed #CCCCCC;">Ekstra Eğitim.net Reklamları.</td>
                    </tr>
                    <tr height="5">
                        <td height="5" style="font-size: 5px;">&nbsp;</td>
                    </tr>
                    <tr height="30">
                        <td align="left"><img src="Resimler/545x340ReklamAlani.jpg" > </td>
                    </tr>

                </table></td>
        </tr>
    </table>

<?php
        }else{
            header("Location:index.php?SK=65");
            exit();
        }
    }else{
        header("Location:index.php?SK=65");
        exit();
    }
}else{
header("Location:index.php");
}
?>