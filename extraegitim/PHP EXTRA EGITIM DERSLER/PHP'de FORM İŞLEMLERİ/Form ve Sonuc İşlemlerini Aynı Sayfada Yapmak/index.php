<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <title>Ekstra Egitim</title>
</head>
<body>

        <?php

        if (!$_GET){

        ?>
        <form action="index.php" method="get">

            Adınız Soyadınız: <input type="text" name="AdSoyad"><br>
            Telefon Numaranız <input type="text" name="Telefon"><br>
            E-Mail Adresiniz: <input type="email" name="EmailAdresi"><br>
            Mesajınız: <textarea name="Mesaj" cols="30" rows="10"></textarea><br>
            <input type="submit" value="Gönder">



        </form>
        <?php
        }else{

            $GelenAdSoyad  = $_GET["AdSoyad"];
            $GelenTelefon = $_GET["Telefon"];
            $GelenEmailAdres  = $_GET["EmailAdresi"];
            $GelenMesaj  = $_GET["Mesaj"];

            echo "Adınız Soyadınız : " . $GelenAdSoyad ."<br />";
            echo "Telefon Numaranız : " . $GelenTelefon ."<br />";
            echo "Email Adresiniz : " . $GelenEmailAdres ."<br />";
            echo "Mesajınız : " . $GelenMesaj;



        }

        ?>





</form>

</body>
</html>









