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


        $GelenIDDegeri                =   $_POST["KayitIDsi"];
        $GelenIsimDegeri              =   $_POST["isim"];
        $GelenYasDegeri               =   $_POST["yas"];
        $GelenBecerilerDegeri         =   $_POST["beceriler"];
        $GelenBeceriSeviyeleriDegeri   =   $_POST["beceriseviyeleri"];


        $Guncelle    =  $VeritabaniBaglantisi->query("UPDATE kisiler SET isim='". $GelenIsimDegeri ."', yas='" . $GelenYasDegeri ."', beceriler='" . $GelenBecerilerDegeri . "', beceriseviyeleri='" . $GelenBeceriSeviyeleriDegeri ."' WHERE id=" . $GelenIDDegeri );
        if ($Guncelle){
            header("Location: index.php");
            exit();
        }else{
            echo "Sorgu Hatası";
        }


        $VeritabaniBaglantisi = null;


        ?>
</body>
</html>









