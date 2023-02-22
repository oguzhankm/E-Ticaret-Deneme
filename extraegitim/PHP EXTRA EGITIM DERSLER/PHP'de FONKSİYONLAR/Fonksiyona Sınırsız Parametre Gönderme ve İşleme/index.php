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

        func_num_args()     = Fonksiyona gönderilen parametre sayısını bulmak için kullanılır.
        func_get_args()     = Fonksiyona gönderilen parametre alarak yeni bir dizi oluşturmak için kullanılır.
        func_get_arg()      = Fonksiyona gönderilen parametre değerini bir dizi olarak kabul ederek, belirtilecek olan anahtara ait elemanın değerini döndürmek için kullanılır.

        */


        function Bilgiler(){
                $GelenParametreSayisi   = func_num_args();

            echo "Fonksiyona Gelen Parametre Sayısı :" . $GelenParametreSayisi;

                $GelenParametreDegerleri = func_get_args();

            echo "<pre>";
            print_r($GelenParametreDegerleri);
            echo "</pre>";

            foreach ($GelenParametreDegerleri as $ParametreDegeri){
                echo $ParametreDegeri . "<br />";
            }

            echo "<br/>";


            $MeslekDegeri   =  func_get_arg(3);
            echo "Fonksiyona Gelen Parametre Sayısı : " . $GelenParametreSayisi . "<br/>";

        }

        Bilgiler("Oguzhan", "Karahan", "Bilgisayar programlama ve yazılım geliştirme uzmanı", "Erkek", "oguzhankm@gmail.com");






        ?>

</form>
</body>
</html>









