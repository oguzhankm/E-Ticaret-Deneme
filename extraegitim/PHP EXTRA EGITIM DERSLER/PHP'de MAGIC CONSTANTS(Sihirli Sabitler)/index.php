<?php

namespace Projeler;  //namespace her zaman en üstte yer almak zorundadır.
session_start();



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


        //__LINE__ PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu satırın, satır numarası bilgisi değerini
        //döndürür
        echo __LINE__ ."<br/>";


        //__DIR__ Çalışmakta olan PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyasının bulunduğu dizin bilgisi değerini döndürür.
        //PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası adını içermez.
        echo __DIR__ ."<br/>";


        //__FILE__ Çalışmakta olan PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyasının bulunduğu dizin ve dosya adı bilgisi
        //değerini döndürür
        echo __FILE__ ."<br/>";


        //__FUNCTION__ PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu fonksiyonun, fonksiyon adı bilgisi değerini
        //döndürür
        function Deger(){
            echo __FUNCTION__;
        }
        Deger();

        echo "<br/>";

        //__CLASS__ Kullanımı
        //__CLASS__ PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıfın, sınıf adı bilgisi değerini döndürür.

       class Deger{
           function Deneme(){
               echo __CLASS__;
           }
       }

        $Islem = new Deger;

        $Islem->Deneme();
*/


        /*
         * //__METHOD__ PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıf dahilinde kullanılacak olan metodun,
        metot adı bilgisi değerini döndürür.

        class ExtraEgitim{
            function Deneme1(){
                echo __METHOD__;
            }
            function Deneme2(){
                echo __METHOD__;
            }
        }

        $Islem = new ExtraEgitim();
        $Islem->Deneme1();
        echo "<br>";
        $Islem->Deneme2();
        */

/*
        //__TRAIT__ kullanımı
        //__TRAIT__ PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıf dahilinde kullanılacak olan özelliğin,
        //özellik adı bilgisi değerini döndürür.
        trait OzellikBir{
            function YazBir(){
                echo __TRAIT__;
            }
        }
        trait OzellikIki{
            function YazIki(){
                echo __TRAIT__;
            }
        }
        class ExtraEgitim{
                use OzellikBir;
                use OzellikIki;
        }
        $Islem = new ExtraEgitim;
        $Islem->YazBir();
        echo "<br/>";
        $Islem->YazIki();
*/
        //__NAMESPACE__ Kullanımı
        //__NAMESPACE__ PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde tanımlanmış olan namespace’ın (isim uzayının),
        //namespace (isim uzayı) adı bilgisi değerini döndürür.

        $sonuc = __NAMESPACE__;
        echo $sonuc;








        ?>
</body>
</html>