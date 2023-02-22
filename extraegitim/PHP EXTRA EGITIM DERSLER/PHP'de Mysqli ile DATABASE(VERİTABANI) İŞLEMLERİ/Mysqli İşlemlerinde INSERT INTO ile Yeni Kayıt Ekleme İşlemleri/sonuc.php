<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Extra Eğitim</title>
</head>

<body>
        <?php
        /*

        INSERT INTO            :	MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisinin de / verilerini de eklemek için kullanılır.        tekrar eden verilerinin

        */




        //ÖRNEK1
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Gelenadisoyadi     =   $_POST["adisoyadi"];
        $Gelenemail         =   $_POST["email"];
        $Gelensifre         =   $_POST["sifre"];
        $Gelentelefon       =   $_POST["telefon"];
        $Gelenyas           =   $_POST["yas"];
        $Gelencinsiyet      =   $_POST["cinsiyet"];
        $Gelensehir         =   $_POST["sehir"];






        $Ekle	=	mysqli_query($VeritabaniBaglantisi, "INSERT INTO uyeler (adisoyadi, email, sifre, telefon, yas, cinsiyet, sehir) values ('$Gelenadisoyadi', '$Gelenemail', '$Gelensifre', '$Gelentelefon', '$Gelenyas', '$Gelencinsiyet', '$Gelensehir') ");

        if ($Ekle){
            header("Location: index.php");
            exit();
        }else{
            echo "Sorgu Hatası <br />";
        }




        mysqli_close($VeritabaniBaglantisi);


/*
        //ÖRNEK1
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Ekle	=	mysqli_query($VeritabaniBaglantisi, "INSERT INTO uyeler (adisoyadi, email, sifre, telefon, yas, cinsiyet, sehir) values ('Ramazan Tunçbilek', 'ramazan@gmail.com', '555888', '053459996655', 30, 'Erkek', 'Kahramanmaraş') ");

        if ($Ekle){
            echo "Kayıt Başarıyla Eklendi <br /><br />";
        }else{
            echo "Sorgu Hatası <br />";
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler ");

        if ($Sorgu){
            $KayitSayisi  = mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){
                while ($Kayitlar = mysqli_fetch_assoc($Sorgu)){
                    echo "ID Değeri : " . $Kayitlar["id"] . "<br />";
                    echo "İsim Soyisim Değeri : " . $Kayitlar["adisoyadi"] . "<br />";
                    echo "E-Mail Değeri : " . $Kayitlar["email"] . "<br />";
                    echo "Şifre Değeri : " . $Kayitlar["sifre"] . "<br />";
                    echo "Telefon Değeri : " . $Kayitlar["telefon"] . "<br />";
                    echo "Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
                    echo "Cinsiyet Değeri : " . $Kayitlar["cinsiyet"] . "<br />";
                    echo "Şehir Değeri : " . $Kayitlar["sehir"] . "<br />";
                    echo "Kayıt Tarihi Değeri : " . $Kayitlar["kayittarihi"] . "<br /><br />";

                }
            }else{
                "Kayıt Yok";
            }
        }else{
            echo "Sorgu Hatası";
        }



        mysqli_close($VeritabaniBaglantisi);

*/




        ?>
</body>
</html>









