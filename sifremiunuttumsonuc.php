<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Framework/PHPMailer/src/Exception.php';
require 'Framework/PHPMailer/src/PHPMailer.php';
require 'Framework/PHPMailer/src/SMTP.php';


if(isset($_POST["EmailAdresi"])){
    $GelenEmailAdresi		=	Guvenlik($_POST["EmailAdresi"]);
}else{
    $GelenEmailAdresi		=	"";
}

if(isset($_POST["TelefonNumarasi"])){
    $GelenTelefonNumarasi		=	Guvenlik($_POST["TelefonNumarasi"]);
}else{
    $GelenTelefonNumarasi			=	"";
}

if(($GelenEmailAdresi!="") OR ($GelenTelefonNumarasi!="")) {

    $KontrolSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi= ? OR TelefonNumarasi = ? AND SilinmeDurumu = ?");
    $KontrolSorgusu->execute([$GelenEmailAdresi, $GelenTelefonNumarasi, 0]);
    $KullaniciSayisi = $KontrolSorgusu->rowCount();
    $KullaniciKaydi = $KontrolSorgusu->fetch(PDO::FETCH_ASSOC);


    if ($KullaniciSayisi > 0) {

        $MailIcerigiHazirla = "Merhaba Sayın " . $KullaniciKaydi["IsimSoyisim"] . "<br /><br /> Sitemize üzerinde bulunan hesabınızın şifresini sıfırlamak için lütfen <a href='" . $SiteLinki .
            "/index.php?SK=43&AktivasyonKodu=" . $KullaniciKaydi["AktivasyonKodu"] . "&Email=" . $KullaniciKaydi["EmailAdresi"] . "'>BURAYA TIKLAYINIZ</a><br /><br /> Saygılarımızla, İyi Çalışmalar...<br />" . $SiteAdi;


        $MailGonder = new PHPMailer(true);
        try {
            //Server settings
            $MailGonder->SMTPDebug = 0;                      //Enable verbose debug output
            $MailGonder->isSMTP();                                            //Send using SMTP
            $MailGonder->Host = DonusumleriGeriDondur($SiteEmailHostAdresi);                     //Set the SMTP server to send through
            $MailGonder->SMTPAuth = true;                                   //Enable SMTP authentication
            $MailGonder->CharSet = 'UTF-8';
            $MailGonder->Username = DonusumleriGeriDondur($SiteEmailAdresi);                     //SMTP username
            $MailGonder->Password = DonusumleriGeriDondur($SiteEmailSifresi);                               //SMTP password
            $MailGonder->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $MailGonder->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $MailGonder->SMPTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );


            //Recipients

            $MailGonder->setFrom(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi));
            $MailGonder->addAddress(DonusumleriGeriDondur($KullaniciKaydi["EmailAdresi"]), DonusumleriGeriDondur($KullaniciKaydi["IsimSoyisim"]));     //Add a recipient
            $MailGonder->addReplyTo(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi));
            //Content
            $MailGonder->isHTML(true);                                  //Set email format to HTML
            $MailGonder->Subject = DonusumleriGeriDondur($SiteAdi) . ' Şifre Sıfırlama';
            $MailGonder->msgHTML($MailIcerigiHazirla);
            $MailGonder->send();


            header("Location:index.php?SK=39");
            exit();

        } catch (Exception $e) {
            //echo "Message could not be sent. Mailer Error: {$MailGonder->ErrorInfo}";

            header("Location:index.php?SK=40");
            exit();
        }

    } else {
        header("Location:index.php?SK=41");
        exit();
    }
}else{
    header("Location:index.php?SK=42");
    exit();
}



?>