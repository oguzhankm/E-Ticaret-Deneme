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

        __construct()     = Belirtilecek olan sınıfa, yapıcı metod tanımlamak için kullanılır.
        __destruct()     = Belirtilecek olan sınıfa, yıkıcı metod tanımlamak için kullanılır.


        */


        
        //ÖRNEK 1
        class Deneme{

            public function __construct(){
                echo "Sınıf Çalıştı ve Yapıcı Metod Devrede <br />";

            }


            public $Isim      = "Volkan";
            public $Soyisim   = "Alakent";

            public function Yaz(){
                $Metin =  "PHP Eğitim Seti";
                return $Metin;

            }

             public function __destruct(){
                echo "Sınıf içerisindeki tüm özellik ve metodların çalışması tamamlandığı için YIKICI METOD devreye girdi.";

            }


        }

        $IslemYap  = new Deneme;

        echo $IslemYap->Isim . " " . $IslemYap->Soyisim . " " . $IslemYap->Yaz() . "<br />";







        ?>


</body>
</html>









