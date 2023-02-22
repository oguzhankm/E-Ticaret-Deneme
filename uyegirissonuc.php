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

if(isset($_POST["Sifre"])){
    $GelenSifre		=	Guvenlik($_POST["Sifre"]);
}else{
    $GelenSifre			=	"";
}

$MD5liSifre             = md5($GelenSifre);

if(($GelenEmailAdresi!="") and ($GelenSifre!="")){

    $KontrolSorgusu			=	$VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi= ? AND Sifre = ? AND SilinmeDurumu = ?");
    $KontrolSorgusu->execute([$GelenEmailAdresi, $MD5liSifre, 0]);
    $KullaniciSayisi     	=	$KontrolSorgusu->rowCount();
    $KullaniciKaydi     	=	$KontrolSorgusu->fetch(PDO::FETCH_ASSOC);


    if ($KullaniciSayisi>0){

            if ($KullaniciKaydi["Durum"] == 1){
                $_SESSION["Kullanici"] = $GelenEmailAdresi;
                if ($_SESSION["Kullanici"] == $GelenEmailAdresi){
                    header("Location:index.php?SK=50");
                    exit();
                }else{
                    header("Location:index.php?SK=33");
                    exit();
                }
            }else{

                $MailIcerigiHazirla  = "Merhaba Sayın ". $KullaniciKaydi["IsimSoyisim"] . "<br /><br /> Sitemize yapmış olduğunuz üyelik kaydınızı tamamlamak için lütfen <a href='" . $SiteLinki .
                    "/aktivasyon.php?AktivasyonKodu=" . $KullaniciKaydi["AktivasyonKodu"] . "&Email=" . $KullaniciKaydi["EmailAdresi"] ."'>BURAYA TIKLAYINIZ</a><br /><br /> Saygılarımızla, İyi Çalışmalar...<br />" . $SiteAdi;

                $MailGonder = new PHPMailer(true);
                try {
                    //Server settings
                    $MailGonder->SMTPDebug =  0;                      //Enable verbose debug output
                    $MailGonder->isSMTP();                                            //Send using SMTP
                    $MailGonder->Host       = DonusumleriGeriDondur($SiteEmailHostAdresi);                     //Set the SMTP server to send through
                    $MailGonder->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $MailGonder->CharSet    = 'UTF-8';
                    $MailGonder->Username   = DonusumleriGeriDondur($SiteEmailAdresi);                     //SMTP username
                    $MailGonder->Password   = DonusumleriGeriDondur($SiteEmailSifresi);                               //SMTP password
                    $MailGonder->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                    $MailGonder->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    $MailGonder->SMPTPOptions =  array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );


                    //Recipients

                    $MailGonder->setFrom (DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi));
                    $MailGonder->addAddress(DonusumleriGeriDondur($KullaniciKaydi["EmailAdresi"]), DonusumleriGeriDondur($KullaniciKaydi["IsimSoyisim"]));     //Add a recipient
                    $MailGonder->addReplyTo(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi));
                    //Content
                    $MailGonder->isHTML(true);                                  //Set email format to HTML
                    $MailGonder->Subject = DonusumleriGeriDondur($SiteAdi) .' Yeni Üyelik Aktivasyonu';
                    $MailGonder->msgHTML($MailIcerigiHazirla) ;
                    $MailGonder->send();


                    header("Location:index.php?SK=36");
                    exit();

                }catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$MailGonder->ErrorInfo}";

                    header("Location:index.php?SK=33");
                    exit();

                }
            }
    }else{
        header("Location:index.php?SK=34");
        exit();

    }
}else{
    header("Location:index.php?SK=35");
    exit();
}
?>