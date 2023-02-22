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
        class   = Herhangi bir programlamada belli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelere verilen isimdir.
        new     = Daha önceden tanımlanmış herhangi bir sınıfı çağırmak için kullanılır.


        1. Sınıf isimleri her zaman anlamlı kullanılmalıdır.
        2. Sınıf isimleri içerisinde alfanumerik değerler (a-z, A-Z 0-9) ve alt çizgi(_) kullanılabilir
        3. Sınıf isimleri mutlaka harf ve ya _ (alt çizgi) ile başlamalıdır.
        4. Sınıf isimleri hiçbir zaman bir rakam ile başlayamaz.
        5. Sınıf isimleri içerisinde boşluk veya türkçe karakter kullanılamazçü
        6. Sınıf isimleri tanımlarken PHP tarafından kullanılan isimler/tanımlar kullanılamaz.
        7. Sınıf isimleri hiç bir zaman birden fazla kez kullanılamaz. (namespace(isim uzayı) kullanılması durumunda birden fazla kez kullanılabilir.)
        8. Sınıf isimleri küçük harf büyük harf tanımlıdır.
        9.Sınıf kapsama / etki alanı kurallarına tabidir.


        Yapısı:

        class Isim{
            Kod blokları;

        }
        */



        /*
        //ÖRNEK 1
        class  IsimSoyisim{

            //ÖZELLİK
            public $isim  =   "Volkan";
            public $soyisim  =   "Alakent";

        }
        $Sonuc  = new IsimSoyisim;

        echo $Sonuc->isim . "<br/>";
        echo $Sonuc->soyisim;
        */





        /*
        //ÖRNEK 2 Sabit Çağırma
        class  IsimSoyisim{

            public const ISIM      =   "Oğuzhan";
            public const SOYISIM   =   "Karahan";

        }
        $Sonuc  = new IsimSoyisim;

        echo IsimSoyisim:: ISIM . "<br/>";
        echo IsimSoyisim:: SOYISIM;
        */






        /*
        //ÖRNEK 3 Method Çağırma
        class  Deneme{

            public function EgitimBir(){
                $Sonuc  = "A'dan Z'ye Javascript Görsel Eğitim Seti";
                return $Sonuc;
            }
            public function EgitimIki(){
                $Sonuc  = "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Sonuc;
            }

        }
        $NesneBir  = new Deneme;

        $MetinBir  = $NesneBir->EgitimBir();
        echo $MetinBir . "<br />";

        $NesneIki  = new Deneme;

        $MetinIki  = $NesneIki->EgitimIki();
        echo $MetinIki;
        */




        /*
        //ÖRNEK 4
        class  Detay{

            //ÖZELLİK
            public $isim        =   "Volkan";
            public const SOYISIM    =   "Alakent";
            public function Bilgiler(){
                $Meslek  = "Programlama ve Yazılım Geliştirme Uzmanı";
                $Sehir   = "Istanbul";
                $Metin   = "Mesleği : " . $Meslek . "<br />Yaşadığı Şehir : " . $Sehir;
                return $Metin;
            }

        }
        $Sonuc  = new Detay;

        echo "İsim Soyisim : " . $Sonuc->isim . " " . Detay::SOYISIM . "<br />" . $Sonuc->Bilgiler();
        */



        //ÖRNEK 5 name space kullanımı

        //Namespace dersinde anlatılacaktır.




        include ("Volkan.php");
        include ("Hakan.php");

        $NesneBir   =  new \VolkaninNesneleri\Detay;
        echo $NesneBir->isim . "<br />";

        $NesneIki   =  new \HakaninNesneleri\Detay;
        echo $NesneIki->isim . "<br />";








        ?>


</body>
</html>









