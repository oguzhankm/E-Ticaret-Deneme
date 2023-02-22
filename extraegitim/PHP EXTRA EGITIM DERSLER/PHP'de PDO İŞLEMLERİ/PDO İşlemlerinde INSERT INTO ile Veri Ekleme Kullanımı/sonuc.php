<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Extra Eğitim</title>
</head>

<body>

        <?php

       /*



       INSERT INTO         : MySQL sunucundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisinide/ verilerinide eklemek için kullanılır.

       */


        //ÖRNEK 1
        try {
            $VeritabaniBaglantisi  = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8;", "root", "");
        }catch (PDOException $Hata){
            echo "Bağlantı Hatası <br />";
            echo "Hata Mesajı: " . $Hata->getMessage();
            die();
        }


        $Gelenisim      = $_POST["isim"] ;
        $Gelenyas      = $_POST["yas"] ;
        $Gelenbeceri      = $_POST["beceri"] ;
        $Gelenseviyeler      = $_POST["seviyeler"] ;

        $Ekle = $VeritabaniBaglantisi->query("INSERT INTO kisiler (isim, yas, beceriler, beceriseviyeleri) values ('$Gelenisim', '$Gelenyas', '$Gelenbeceri', '$Gelenseviyeler')");
        if ($Ekle){
               header("Location: index.php");
               exit();
        }else{
            echo "Sorgu Hatası";
        }

        $VeritabaniBaglantisi = null;



        ?>
</body>
</html>









