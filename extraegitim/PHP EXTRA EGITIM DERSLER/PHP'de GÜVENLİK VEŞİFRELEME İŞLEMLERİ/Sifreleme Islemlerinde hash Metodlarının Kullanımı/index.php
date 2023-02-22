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

        hash_algos()        : Php yazılımı içerisinde kullanılabilicek olan ve sisteme tanımlı tüm algoritmaların listesini bulur ve buldğu degerlerden yeni bir dizi oluşturarak oluşturduğu diziyi geriye döndürür.
        hash()              : Belirtilecek olan içeriğin hash özetini üreterek, ürettiği değeri geriye döndürürür.
        hash_file()         : Belirtilecek olan dosyanın hash özetini üreterek, ürettiği değeri geriye döndürürür.


        hash_hmac()         : Belirtilecek olan içeriğin HMAC (Hash-based Message Authentication)(Karma Tabanlı İleti Kimlik Doğrulama Yöntemi) ile hash özetinin üreterek,  ürettiği değeri geriye döndürürür.

        hash_init()         : Hash özeti üretme işlemlerini başlatmak ve algoritma türünü belirtmek için kullanılır.
        hash_update()       : Belirtilecek olan içeriği daha önceden hash özeti üretme işlemi başlatılmış işleme dahil etmek için kullanılır.
        hash_copy ()        : Hash özeti üretme işlemlerini başlatmak ve algoritma türünü belirlemek için daha önceden oluşturulmuş olan hash_init metodunu kopyalamk için kullanılır.
        hash_final()        : Daha önceden hash özeti üretme işlemi başlatılarak içeriğide dahil edilmiş bir işlemin hash özetini üreterek bu değeri geriye döndürür.

        */


        /*
        //ÖRNEK 1
        $Deger      = "Ekstra Egitim - Volkan Alakent";
        echo "Orjinal İçerik : " . $Deger . "<br />";


        $Bir        = md5($Deger);
        echo "md5() metodu ile üretilmiş olan md5 özeti : " . $Bir . "<br />";

        $Iki        = hash("md5", $Deger);
        echo "hash() metodu ile üretilmiş olan hash özeti : " . $Bir . "<br />";



        $Degerler   =  hash_algos();

        echo "<pre>";
        print_r($Degerler);
        echo "</pre>";
        */


        /*
        //ÖRNEK 2
        $Deger      = "Ekstra Egitim - Volkan Alakent";
        echo "Orjinal İçerik : " . $Deger . "<br />";


        $Bir        = md5($Deger);
        echo "md5() metodu ile üretilmiş olan md5 özeti : " . $Bir . "<br />";

        $Iki        = hash_hmac("md5", $Deger, "SecretForSolve");
        echo "hash_hmac() metodu ile üretilmiş olan hash özeti : " . $Bir . "<br />";
        */

        //ÖRNEK 3

        $Deger      = "Ekstra Egitim - Volkan Alakent";
        echo "Orjinal İçerik : " . $Deger . "<br />";


        $Olustur        = md5($Deger);
        echo "md5() özeti : " . $Olustur . "<br />";

        $Sifreleme      = hash_init("md5");
        hash_update($Sifreleme, $Deger);
        $Sonuc          = hash_final($Sifreleme);
        echo "Parçalı yapıda oluşturulmuş md5 özeti : " . $Sonuc ."<br >";

        ?>


</body>
</html>









