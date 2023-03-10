<?php

if(isset($_GET["AktivasyonKodu"])){
    $GelenAktivasyonKodu		=	Guvenlik($_GET["AktivasyonKodu"]);
}else{
    $GelenAktivasyonKodu		=	"";
}

if(isset($_GET["Email"])){
    $GelenEmail		=	Guvenlik($_GET["Email"]);
}else{
    $GelenEmail			=	"";
}

if(($GelenAktivasyonKodu!="") and ($GelenEmail!="")){

            $KontrolSorgusu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi= ? AND AktivasyonKodu = ?");
            $KontrolSorgusu->execute([$GelenEmail, $GelenAktivasyonKodu]);
            $KullaniciSayisi     	=	$KontrolSorgusu->rowCount();
            $KullaniciKaydi     	=	$KontrolSorgusu->fetch(PDO::FETCH_ASSOC);

            if ($KullaniciSayisi>0){

?>
<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="500" valign="top">
			<form action="index.php?SK=44&EmailAdresi=<?php echo $GelenEmail; ?>&AktivasyonKodu=<?php echo $GelenAktivasyonKodu; ?>" method="post">
				<table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
                    <!--Sayfa Başlık Kısmı-->
					<tr height="40">
						<td colspan="2" style="color:#FF9900"><h3>Şifre Sıfırlama</h3></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Aşağıdan Hesabınıza Giriş Şifrenizi Değiştirebilirsin</td>
					</tr>
                    <!--E-Mail Adresi-->
                    <tr height="30">
                        <td colspan="2" valign="bottom" align="left">Yeni Şifre (*)</td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top" align="left"><input type="password" name="Sifre" class="InputAlanlari"></td>
                    </tr>
                    <!--Şifre-->
                    <tr height="30">
                        <td colspan="2" valign="bottom" align="left">Yeni Şifre Tekrar (*)</td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="top" align="left"><input type="password" name="SifreTekrar" class="InputAlanlari"></td>
                    </tr>



                    <!--Buton Kısmı-->
					<tr height="40">
						<td colspan="2" align="center"><input type="submit" value="Şifremi Güncelle" class="YesilButon"></td>
					</tr>
				</table>
			</form>
		</td>


        <td width="20">&nbsp;</td>

        <td width="545" valign="top"><table width="545" align="center" border="0" cellpadding="0" cellspacing="0">
                <tr height="40">
                    <td colspan="2" style="color:#FF9900"><h3>Yeni Şifre Oluşturma</h3></td>
                </tr>
                <tr height="30">
                    <td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Çalışma ve İşleyiş Açıklaması</td>
                </tr>
                <tr height="5">
                    <td colspan="2" height="5" style="font-size: 5px;">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/CarklarSiyah20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Bilgi Kontrolü</b></td>
                </tr>
                <tr>
                    <td colspan="2" align="left">Kullanıcın form alanına girdiği değer ve ya değerler veritabanımızda tam değerli olarak filtrelenerek kontrol edilir.</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/CarklarSiyah20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>E-mail Gönderimi & İçerik</b></td>
                </tr>
                <tr>
                    <td colspan="2" align="left">Bilgi Kontrolü başarılı olur ise, kullanıcının veritabanımızda kayıtlı olan e-mail adresine yeni şifre oluşturma maili gönderilir</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/CarklarSiyah20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Şifre Sıfırlama & Sıfırlama</b></td>
                </tr>
                <tr>
                    <td colspan="2" align="left">Kullanıcı, kendisine iletilen mail içerisindeki "Yeni Şifre Oluştur" metnşne tıklayacak olur ise, site yeni şifre sayfası açılır ve kullanıcıdan yeni
                        hesap şifresini oluşturması istenir</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>

                <tr height="30">
                    <td align="left" width="30"><img src="Resimler/CarklarSiyah20x20.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Sonuc</b></td>
                </tr>
                <tr>
                    <td colspan="2" align="left">Kullanıcı yeni oluşturmuş olduğu hesap şifresi ile siteye giriş yapmaya hazırdır.</td>
                </tr>
		</table></td>
	</tr>
</table>

<?php

            }else{
                header("Location: index.php");
                exit();
            }
}else{
    header("Location: index.php");
    exit();

}

?>