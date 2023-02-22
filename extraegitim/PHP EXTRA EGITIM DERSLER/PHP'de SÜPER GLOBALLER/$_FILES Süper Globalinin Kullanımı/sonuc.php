
<?php
        /*
        $_FILES Http (Hyper Text Transfer Protocol) (hiper metin transferi protokolü) server’ına (sunucusuna) herhangi bir dosya yükleme işlemi esnasında, ilgili dosya verilerine
        ulaşılabilme imkanı tanır
        */

        $GelenDosya    = $_FILES["dosya"];
        echo "<pre>";
        print_r($GelenDosya);
        echo "<pre/>";
 //Aşağıdaki şekilde ki gibi de yazılabilir.
        echo "Gelen Dosyanın Adı : ". $_FILES["dosya"]["name"] . "<br/>";
        echo "Gelen Dosyanın MIME Türü : ". $_FILES["dosya"]["type"] . "<br/>";
        echo "Gelen Dosyanın Temp Dizini : ". $_FILES["dosya"]["tmp_name"] . "<br/>";
        echo "Gelen Dosyanın Hata Kodu : ". $_FILES["dosya"]["error"] . "<br/>";
        echo "Gelen Dosyanın Boyutu : ". $_FILES["dosya"]["size"];

?>

