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

        trait           : Sınıflar için özellik ve metod gruplarının oluşturulması için kullanılır.
        use             : Daha önceden tanımlanmış olan herhangi bi özellik veya metod grubunu, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
        insteadof       : Sınıf için tanımlanmış olan özellik ve metod gruplarında tercih / seçim işlemleri için kullanılır
        as              : Sınıf için tanımlanmış olan özellik ve metod gruplarında, metoda takma isim belirlemek veya görünürlük atama işlemleri için kullanılır.

        */


        /*
        //ÖRNEK 1
        trait Kisiler{
            public $Isim    = "Volkan";
            public $Soyisim = "Alakent";

            public function Tanimlar(){
                $Metin  = "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }
        }

        class Deneme{
            use Kisiler;
        }

        $Sonuc  = new Deneme;

        echo $Sonuc->Isim . " ";
        echo $Sonuc->Soyisim . "<br />";
        echo $Sonuc->Tanimlar();
        */




        /*
        //ÖRNEK 2
        trait AdSoyad{
            public $Isim    = "Volkan";
            public $Soyisim = "Alakent";

        }

        trait Bilgi{

            public function Tanimlar(){
                $Metin  = "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }
        }


        class Deneme{
            use AdSoyad, Bilgi;
        }

        $Sonuc  = new Deneme;

        echo $Sonuc->Isim . " ";
        echo $Sonuc->Soyisim . "<br />";
        echo $Sonuc->Tanimlar();
        */




        /*
        //ÖRNEK 3
        trait AdSoyad{
            public $Isim    = "Volkan";
            public $Soyisim = "Alakent";

        }

        trait Bilgi{

            public function Tanimlar(){
                $Metin  = "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }
        }

        trait KisiBilgileri{
            use AdSoyad, Bilgi;
        }

        class Deneme{
            use KisiBilgileri;
        }

        $Sonuc  = new Deneme;

        echo $Sonuc->Isim . " ";
        echo $Sonuc->Soyisim . "<br />";
        echo $Sonuc->Tanimlar();
        */

        /*
        //ÖRNEK 4
        trait KisiBir{
            public function Goster(){
                $IsimSoyisim  = "Oğuzhan Karahan";
                return $IsimSoyisim;
            }

        }

        trait KisiIki{

            public function Goster(){
                $IsimSoyisim  = "Büşra Karahan";
                return $IsimSoyisim;
            }
        }


        class Deneme{
            use KisiBir, KisiIki {KisiBir::Goster insteadof KisiIki;}
        }

        $Sonuc  = new Deneme;
        echo $Sonuc->Goster();
        */




        //ÖRNEK 5
        trait KisiBir{
            public function Goster(){
                $IsimSoyisim  = "Oğuzhan Karahan";
                return $IsimSoyisim;
            }

        }

        trait KisiIki{

            public function Goster(){
                $IsimSoyisim  = "Büşra Karahan";
                return $IsimSoyisim;
            }
        }


        class Deneme{
            use KisiBir, KisiIki {KisiIki::Goster insteadof KisiBir;  KisiIki::Goster as YeniMetodAdı;}
        }

        $Sonuc  = new Deneme;
        echo $Sonuc->Goster();













        ?>


</body>
</html>









