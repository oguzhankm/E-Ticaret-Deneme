<?php
declare(strict_types=1);
?>

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


        /*
            declare(strict_types=1)     : Kodlama dosyası içerisindki tüm kodlamaların kural yapısını belirler.
         */

        /*
        //ÖRNEK 1
        function Deneme(string $Isim, string $Soyisim, int $Yas){

            $Birleştir = $Isim ." " . $Soyisim . "<br />" . $Yas;

            return $Birleştir;
        }

        $Sonuc = Deneme("Oguzhan", "Karahan", "27"); // HATA, 3. parametredeki tür dayatması int veri türüdür. Fakat
        gönderilen parametre veri türü string'tir.


        echo  $Sonuc;
        */


        /*
        //ÖRNEK 2

        function Deneme(string $Isim, string $Soyisim, int $Yas){

            $Birleştir = $Isim ." " . $Soyisim . "<br />" . $Yas;

            return $Birleştir;
        }

        $Sonuc = Deneme("Oguzhan", "Karahan", 27);


        echo  $Sonuc;
        */



        /*
        //ÖRNEK 3

        function Deneme(string $Isim, string $Soyisim, int $Yas){

            $Birleştir = $Isim ." " . $Soyisim . "<br />" . $Yas;

            return $Birleştir;
        }

        $Sonuc = Deneme("Oguzhan", "Karahan", "27"); //Kodlama  declare olmadan çalışır fakat tür dayatmasının geçerli
        //olabilmesi için declare(strict_types=1) ifadesi sayfanın en üzerinde kullanılmalıdır.


        echo  $Sonuc;
        */



        /*
        //ÖRNEK 4

        function Deneme(string $Isim, string $Soyisim, int $Yas):array{ //HATA, Parametre tür dayatmaları geçerli. return ile dönüş türü geçersiz çünkü dönüş türü string'tir fakat dönüş türü istenen
            //veri türü array'dir.

            $Birleştir = $Isim ." " . $Soyisim . "<br />" . $Yas;

            return $Birleştir;
        }

        $Sonuc = Deneme("Oguzhan", "Karahan", 27);


        echo  $Sonuc;
        */


        /*
        //ÖRNEK 5

        function Deneme(string $Isim, string $Soyisim, int $Yas){

            $Birleştir = array($Isim, $Soyisim, $Yas);

            return $Birleştir;
        }

        $Sonuc = Deneme("Oguzhan", "Karahan", 27);

        echo  "<pre>";
        print_r($Sonuc);
        echo "</pre>";
        */


        //ÖRNEK 6
        function Deneme(array $Deger):string{

            $Islem = implode("<br />", $Deger);

            return $Islem;
        }

        $Ornek = array("Oguzhan", "Volkan", "Hakan", "Mehmet");


        $Sonuc = Deneme($Ornek);

        echo $Sonuc





        ?>

</form>
</body>
</html>









