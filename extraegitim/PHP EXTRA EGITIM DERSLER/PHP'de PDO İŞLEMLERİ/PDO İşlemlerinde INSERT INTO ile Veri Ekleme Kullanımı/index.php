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

        ?>

        <form action="sonuc.php" method="post">
        İsim :<input type="text" name="isim"> <br>
        Yaş : <input type="number" name="yas"> <br>
        Beceriler : <input type="text" name="beceri"> <br>
        Beceri Seviyeleri : <input type="text" name="seviyeler"> <br>
        <input type="submit" value="Kaydet"> <br>
        </form>

        <br><br>


        <?php
        $Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM kisiler", PDO::FETCH_ASSOC);
        if ($Sorgu){
            $KayitSayisi  = $Sorgu->rowCount();
            if ($KayitSayisi>0){
                foreach ($Sorgu as $Satirlar){
                    echo $Satirlar["id"] . " | " . $Satirlar["isim"] . " | " . $Satirlar["yas"] . " | " . $Satirlar["beceriler"] . " | " . $Satirlar["beceriseviyeleri"] . "<br/>";
                }
            }
        }else{
            echo "Sorgu Hatası";
        }

        $VeritabaniBaglantisi = null;



        ?>
</body>
</html>









