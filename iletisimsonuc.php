<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Framework/PHPMailer/src/Exception.php';
require 'Framework/PHPMailer/src/PHPMailer.php';
require 'Framework/PHPMailer/src/SMTP.php';

if(isset($_POST["IsimSoyisim"])){
	$GelenIsimSoyisim		=	Guvenlik($_POST["IsimSoyisim"]);
}else{
	$GelenIsimSoyisim		=	"";
}

if(isset($_POST["EmailAdresi"])){
	$GelenEmailAdresi		=	Guvenlik($_POST["EmailAdresi"]);
}else{
	$GelenEmailAdresi		=	"";
}

if(isset($_POST["TelefonNumarasi"])){
	$GelenTelefonNumarasi	=	Guvenlik($_POST["TelefonNumarasi"]);
}else{
	$GelenTelefonNumarasi	=	"";
}


if(isset($_POST["Mesaj"])){
	$GelenMesaj			=	Guvenlik($_POST["Mesaj"]);
}else{
	$GelenMesaj			=	"";
}

if(($GelenIsimSoyisim!="") and ($GelenEmailAdresi!="") and ($GelenTelefonNumarasi!="") and ($GelenMesaj!="")){

    $MailIcerigiHazirla  = $GelenIsimSoyisim . "<br />" . $GelenEmailAdresi . "<br />" .$GelenTelefonNumarasi . "<br /> Mesaj : " . $GelenMesaj;


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
        $MailGonder->addAddress(DonusumleriGeriDondur($SiteEmailAdresi), DonusumleriGeriDondur($SiteAdi));     //Add a recipient
        $MailGonder->addReplyTo($GelenEmailAdresi, $GelenIsimSoyisim);


        //Content
        $MailGonder->isHTML(true);                                  //Set email format to HTML
        $MailGonder->Subject = DonusumleriGeriDondur($SiteAdi) .' İletişim Formu Mesajı';
        $MailGonder->MsgHTML($MailIcerigiHazirla);
        $MailGonder->send();
        echo 'Mesajınız Gönderildi.';



        header("Location:index.php?SK=18");
        exit();

    }catch (Exception $e) {
        //echo "Message could not be sent. Mailer Error: {$MailGonder->ErrorInfo}";

        header("Location:index.php?SK=19");
        exit();
    }

}else{
	header("Location:index.php?SK=20");
	exit();
}
?>