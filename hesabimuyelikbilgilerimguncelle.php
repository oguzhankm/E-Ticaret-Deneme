<?php

if (isset($_SESSION["Kullanici"])){


?>

    <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="500" valign="top">
                <form action="index.php?SK=52" method="post">
                    <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
                        <!--Sayfa Başlık Kısmı-->
                        <tr height="40">
                            <td   style="color:#FF9900"><h3>Hesabım > Üyelik Bilgilerim</h3></td>
                        </tr>
                        <tr height="30">
                            <td   valign="top" style="border-bottom: 1px dashed #CCCCCC;">Aşağıdan Üyelik bilgilerini görüntüleyebilir ve ya güncelleyebilirsiniz.</td>
                        </tr>

                        <!--E-Mail Adresi-->
                        <tr height="30">
                            <td  valign="bottom" align="left">E-Mail Adresi (*)</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><input type="mail" name="EmailAdresi" class="InputAlanlari" value="<?php echo $EmailAdresi; ?>"></td>
                        </tr>
                        <!--Şifre-->
                        <tr height="30">
                            <td  valign="bottom" align="left">Şifre (*)</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><input type="password" name="Sifre" class="InputAlanlari" value="EskiSifre"></td>
                        </tr>
                        <!--Şifre Tekrar-->
                        <tr height="30">
                            <td  valign="bottom" align="left">Şifre  Tekrar(*)</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><input type="password" name="SifreTekrar" class="InputAlanlari" value="EskiSifre"></td>
                        </tr>
                        <!--Ad Soyad-->
                        <tr height="30">
                            <td  valign="bottom" align="left">İsim Soyisim (*)</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><input type="text" name="IsimSoyisim" class="InputAlanlari" value="<?php echo $IsimSoyisim; ?>"></td>
                        </tr>
                        <!--Telefon-->
                        <tr height="30">
                            <td  valign="bottom" align="left">Telefon Numarası (*)</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><input type="text" name="TelefonNumarasi" maxlength="11" class="InputAlanlari" value="<?php echo $TelefonNumarasi; ?>"></td>
                        </tr>
                        <!--Cinsiyet-->
                        <tr height="30">
                            <td  valign="bottom" align="left" >Cinsiyet (*)</td>
                        </tr>
                        <tr height="30">
                            <td  valign="top" align="left"><select class="SelectAlanlari" name="Cinsiyet">
                                    <option value="Erkek" <?php if ($Cinsiyet=="Erkek"){ ?>selected="selected" <?php } ?>>Erkek</option>
                                    <option value="Kadın" <?php if ($Cinsiyet=="Kadın"){ ?>selected="selected" <?php } ?>>Kadın</option>
                                </select></td>
                        </tr>



                        <!--Buton Kısmı-->
                        <tr height="40">
                            <td colspan="2" align="center"><input type="submit" value="Bilgilerimi Güncelle" class="YesilButon"></td>
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
header("Location:index.php");
}
?>