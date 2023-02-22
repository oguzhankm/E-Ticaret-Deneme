<?php

if (isset($_SESSION["Kullanici"])){


?>

    <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">

        <tr>
            <td colspan="3"><hr></td>
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
            <td colspan="3"><hr></td>
        </tr>

        <tr>
            <td width="500" valign="top">
                <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">

                    <!--Sayfa Başlık Kısmı-->
                    <tr height="40">
                        <td  style="color:#FF9900"><h3>Hesabım > Üyelik Bilgilerim</h3></td>
                    </tr>
                    <tr height="30">
                        <td   valign="top" style="border-bottom: 1px dashed #CCCCCC;">Aşağıdan Üyelik bilgilerini görüntüleyebilir ve ya güncelleyebilirsiniz.</td>
                    </tr>



                    <!--İsim Soyisim-->
                    <tr height="30">
                        <td   valign="bottom" align="left"><b>İsim Soyisim<b/></td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top" align="left"><?php echo $IsimSoyisim; ?></td>
                    </tr>
                    <!--Cinsiyet-->
                    <tr height="30">
                        <td colspan="2" valign="bottom" align="left"><b>Cinsiyet<b/></td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top" align="left"><?php echo $Cinsiyet; ?></td>
                    </tr>
                    <!--E-Mail Adresi-->
                    <tr height="30">
                        <td colspan="2" valign="bottom" align="left"><b>E-Mail Adresi<b/></td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top" align="left"><?php echo $EmailAdresi; ?></td>
                    </tr>

                    <!--Telefon Numarası-->
                    <tr height="30">
                        <td colspan="2" valign="bottom" align="left"><b>Telefon Numarası<b/></td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top" align="left"><?php echo $TelefonNumarasi; ?></td>
                    </tr>

                    <!--Kayıt Tarihi-->
                    <tr height="30">
                        <td colspan="2" valign="bottom" align="left"><b>Kayıt Tarihi<b/></td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top" align="left"><?php echo TarihBul($KayitTarihi); ?></td>
                    </tr>

                    <!--Kayıt IP-->
                    <tr height="30">
                        <td colspan="2" valign="bottom" align="left"><b>Kayıt IP-<b/></td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top" align="left"><?php echo $KayitIpAdresi; ?></td>
                    </tr>
                    <!--Kayıt IP-->
                    <tr height="30">
                        <td colspan="2"  align="center"><a href="index.php?SK=51" class="BilgilerimiGuncelleBtn">Bilgilerimi Güncellemek İstiyorum</a></td>
                    </tr>
                </table>
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
