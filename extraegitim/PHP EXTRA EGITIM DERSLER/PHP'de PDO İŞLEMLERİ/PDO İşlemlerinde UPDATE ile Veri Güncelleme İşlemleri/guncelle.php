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


        $GelenID      = $_GET["KayitIDsi"] ;

        $Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM kisiler WHERE id='". $GelenID ."'");
        if ($Sorgu){
            $KayitSayisi  =  $Sorgu->rowCount();
            if ($KayitSayisi>0){
                    $SorguKaydi   =  $Sorgu->fetch(PDO::FETCH_ASSOC);
                        $KaydinIsimDegeri                = $SorguKaydi["isim"];
                        $KaydinYasDegeri                 = $SorguKaydi["yas"];
                        $KaydinBeceriDegeri              = $SorguKaydi["beceriler"];
                        $KaydinBeceriSeviyelerDegeri     = $SorguKaydi["beceriseviyeleri"];


            }else{
                echo "Kayıt Yok";
            }
        }else{
            echo "Sorgu Hatası";
        }


        ?>

        <form action="sonuc.php" method="post">
            <input type="hidden" name="KayitIDsi" value="<?php echo $GelenID;  ?>">
            İsim : <input type="text" name="isim" value="<?php echo $KaydinIsimDegeri;  ?>"> <br>
            Yaş : <input type="text" name="yas" value="<?php echo $KaydinYasDegeri;  ?>"> <br>
            Beceriler : <input type="text" name="beceriler" value="<?php echo $KaydinBeceriDegeri;  ?>"> <br>
            Beceri Seviyeleri : <input type="text" name="beceriseviyeleri" value="<?php echo $KaydinBeceriSeviyelerDegeri;  ?>"> <br>
            <input type="submit" value="GÜNCELLE">
        </form>


        <?php
        $VeritabaniBaglantisi = null;
        ?>
</body>
</html>









