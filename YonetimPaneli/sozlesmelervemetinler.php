<?php
if (isset($_SESSION["Yonetici"])) {
    ?>
    <form action="index.php?SKD=0&SKI=6" method="post">
        <table width="760" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr height="70">
                <td bgcolor="#FF9900" style="color: #FFFFFF;"><h3>&nbsp;SÖZLEŞMELER VE METİNLER</h3></td>
            </tr>
            <tr height="10">
                <td style="font-size: 10px;">&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <table width="750" align="right" border="0" cellpadding="0" cellspacing="0">
                        <tr height="40">
                            <td width="230" valign="top">Hakkımızda Metni</td>
                            <td width="20" valign="top">&nbsp;</td>
                            <td width="500" valign="top"><textarea name="HakkimizdaMetni" class="TextAreaAlanlari" cols="30" rows="10"><?php echo DonusumleriGeriDondur($HakkimizdaMetni);?></textarea></td>
                        </tr>
                        <tr height="40">
                            <td width="230" valign="top">Üyelik Sözleşmesi Metni</td>
                            <td width="20" valign="top">&nbsp;</td>
                            <td width="500" valign="top"><textarea name="UyelikSozlesmesiMetni" class="TextAreaAlanlari" cols="30" rows="10"><?php echo DonusumleriGeriDondur($UyelikSozlesmesiMetni);?></textarea></td>
                        </tr>
                        <tr height="40">
                            <td width="230" valign="top">Kullanım Koşulları Metni</td>
                            <td width="20" valign="top">&nbsp;</td>
                            <td width="500" valign="top"><textarea name="KullanimKosullariMetni" class="TextAreaAlanlari" cols="30" rows="10"><?php echo DonusumleriGeriDondur($KullanimKosullariMetni);?></textarea></td>
                        </tr>
                        <tr height="40">
                            <td width="230" valign="top">Gizlilik Sözleşmesi Metni</td>
                            <td width="20" valign="top">&nbsp;</td>
                            <td width="500" valign="top"><textarea name="GizlilikSozlesmesiMetni" class="TextAreaAlanlari" cols="30" rows="10"><?php echo DonusumleriGeriDondur($GizlilikSozlesmesiMetni);?></textarea></td>
                        </tr>
                        <tr height="40">
                            <td width="230" valign="top">Mesafeli Satış Sözleşmesi Metni</td>
                            <td width="20" valign="top">&nbsp;</td>
                            <td width="500" valign="top"><textarea name="MesafeliSatisSozlesmesiMetni" class="TextAreaAlanlari" cols="30" rows="10"><?php echo DonusumleriGeriDondur($MesafeliSatisSozlesmesiMetni);?></textarea></td>
                        </tr>
                        <tr height="40">
                            <td width="230" valign="top">Teslimat Metni</td>
                            <td width="20" valign="top">&nbsp;</td>
                            <td width="500" valign="top"><textarea name="TeslimatMetni" class="TextAreaAlanlari" cols="30" rows="10"><?php echo DonusumleriGeriDondur($TeslimatMetni);?></textarea></td>
                        </tr>
                        <tr height="40">
                            <td width="230" valign="top">İptal & İade & Değişim Metni</td>
                            <td width="20" valign="top">&nbsp;</td>
                            <td width="500" valign="top"><textarea name="IptalIadeDegisimMetni" class="TextAreaAlanlari" cols="30" rows="10"><?php echo DonusumleriGeriDondur($IptalIadeDegisimMetni);?></textarea></td>
                        </tr>
                        <tr height="40">
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input type="submit" value="Metinleri Kaydet" class="YesilButon"></td>
                        </tr>

                    </table>
                </td>
            </tr>
        </table>
    </form>
    <?php
} else {
    header("Location:index.php?SKD=1");
    exit();
}
?>
