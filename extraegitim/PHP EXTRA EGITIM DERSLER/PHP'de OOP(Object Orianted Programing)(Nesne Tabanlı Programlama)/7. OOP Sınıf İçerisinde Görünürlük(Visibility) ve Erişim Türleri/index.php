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

        public    :Genel. Heryerden erişilebilir.
        private   :Özel. Yalnızca sınıf içerisinden erişilebilir.
        protected :Korumalı. Sınıf içerisinden ve türetilen sınıflardan erişilebilir.

        static    : Sabit.  Sınıf içerisinde ki  herhangi bir özellik ve metoda sınıf çağırılmadan erişilebilir.

        $this     : Bu sınıfta şeklinde sınıfı işaret etmek için kullanılır.
        self::    : Kendi sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
        parent::  : Ebeveyn sınıfımda şeklinde sınıfı işaret etmek için kullanılır.

        */


        /*
        //ÖRNEK 1
        class Bir{

            public $Isim    =   "Volkan";
            public const SOYISIM  = " Alakent";

            public function Bilgi(){
                $Metin = "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }

        }

        $Nesne = new Bir;
        echo "Isim Soyisim: " . $Nesne->Isim . " " . Bir::SOYISIM . " " . $Nesne->Bilgi();
        */




        /*
        //ÖRNEK 2
        class Bir{

            private $Isim          =   "Volkan";
            private const SOYISIM  = " Alakent";

            private function Bilgi(){
                $Metin = "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }

        }

        $Nesne = new Bir;
        echo "Isim Soyisim: " . $Nesne->Isim . " " . Bir::SOYISIM . " " . $Nesne->Bilgi();
        */



        /*
        //ÖRNEK 3
        class Bir{

            protected $Isim          =   "Volkan";
            protected const SOYISIM  = " Alakent";

            protected function Bilgi(){
                $Metin = "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }

        }

        $Nesne = new Bir;
        echo "Isim Soyisim: " . $Nesne->Isim . " " . Bir::SOYISIM . " " . $Nesne->Bilgi();
        */


        /*
        //ÖRNEK 4
        class Bir{

            public $Isim          =   "Volkan";
            public const SOYISIM  = " Alakent";

            public function Bilgi(){
                $Metin = "Isim Soyisim: " . $this->Isim . " " . self::SOYISIM . "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }

        }

        $Nesne = new Bir;
        echo $Nesne->Bilgi();
        */



        /*
        //ÖRNEK 5
        class Bir{

            private $Isim          =   "Volkan";
            private const SOYISIM  = " Alakent";

            public function Bilgi(){
                $Metin = "Isim Soyisim: " . $this->Isim . " " . self::SOYISIM . "<br/>" . "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }

        }

        $Nesne = new Bir;
        echo $Nesne->Bilgi();
        */


        /*
        //ÖRNEK 6
        class Bir{

            protected $Isim          =   "Volkan";
            protected const SOYISIM  = " Alakent";

            public function Bilgi(){
                $Metin = "Isim Soyisim: " . $this->Isim . " " . self::SOYISIM . "<br/>" . "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }

        }

        $Nesne = new Bir;
        echo $Nesne->Bilgi();
        */




        /*
        //ÖRNEK 7
        class Bir{

            public $Isim          =   "Oğuzhan";
            public const SOYISIM  = " Karahan";

        }

        class Iki extends Bir{
            public function Bilgi(){
                $Metin = "Isim Soyisim: " . $this->Isim . " " . self::SOYISIM . "<br/>" . "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }
        }

        $Nesne = new Iki;
        echo $Nesne->Bilgi();
        */


        /*
        //ÖRNEK 8
        class Bir{

            private $Isim          =   "Oğuzhan";
            private const SOYISIM  = " Karahan";

        }

        class Iki extends Bir{
            public function Bilgi(){
                $Metin = "Isim Soyisim: " . $this->Isim . " " . self::SOYISIM . "<br/>" . "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }
        }

        $Nesne = new Iki;
        echo $Nesne->Bilgi();
        */


        /*
        //ÖRNEK 9
        class Bir{

            protected $Isim          =   "Oğuzhan";
            protected const SOYISIM  = " Karahan";

        }

        class Iki extends Bir{
            public function Bilgi(){
                $Metin = "Isim Soyisim: " . $this->Isim . " " . self::SOYISIM . "<br/>" . "A'dan Z'ye PHP Görsel Eğitim Seti";
                return $Metin;
            }
        }

        $Nesne = new Iki;
        echo $Nesne->Bilgi();
        */








        /*
        //ÖRNEK 10 PARENT:: KULLANIMI
        class Bir{

            public function Bilgi(){
                $Metin ="PHP";
                return $Metin;
            }

        }

        class Iki extends Bir{
            public function Bilgi(){
                $Metin ="JS";
                echo $Metin;
                return parent::Bilgi();
            }
        }

        $Nesne = new Iki;
        echo $Nesne->Bilgi();
        */





        /*
        //ÖRNEK 11 PARENT:: KULLANIMI
        class Bir{

            public function Bilgi(){
                $Metin ="PHP";
                return $Metin;
            }

        }

        class Iki extends Bir{
            public function Bilgi(){
                $Metin ="JS";
                echo $Metin;
                return parent::Bilgi();
            }
        }

        $Nesne = new Iki;
        echo $Nesne->Bilgi();
        */



        /*
        //ÖRNEK 12 PARENT:: KULLANIMI
        class Bir{

            public function Bilgi(){
                $Metin ="PHP";
                return $Metin;
            }

        }

        class Iki extends Bir{
            public function Bilgi(){
                $Metin ="JS " . parent::Bilgi();
                return $Metin;
            }
        }

        $Nesne = new Iki;
        echo $Nesne->Bilgi();
        */


        /*
        //ÖRNEK 13 PARENT:: KULLANIMI
        class Bir{

            public $Isim = "HTML";

            public function Bilgi(){
                $Metin = $this->Isim;
                return $Metin;
            }

        }

        class Iki extends Bir{
            public function Bilgi(){
                $Metin ="JS " . parent::Bilgi();
                return $Metin;
            }
        }

        $Nesne = new Iki;
        echo $Nesne->Bilgi();
        */


        /*
        //ÖRNEK 13 PARENT:: KULLANIMI
        class Bir{

            public $Isim = "HTML";


        }

        class Iki extends Bir{
            public $Metin  = parent::Isim; //parent metod alabilir özellik alamaz.
        }

        $Nesne = new Iki;
        echo $Nesne->Bilgi();
        */




        /*
        //ÖRNEK 13 PARENT:: KULLANIMI
        class Dersler{

            public function AAA(){
                $Icerik = "A'dan Z'ye PHP7 Eğitim Seti<br /><br />";
                echo $Icerik;
            }
            public function BBB(){
                $Icerik = "A'dan Z'ye JS Eğitim Seti<br /><br />";
                echo $Icerik;
            }
            public function CCC(){
                $Icerik = "A'dan Z'ye CSS3 Eğitim Seti<br /><br />";
                echo $Icerik;
            }


        }

        class Egitmenler extends Dersler{

            public function AAA(){
                $Kim = "Volkan Alakent<br />";
                echo $Kim;
                parent::AAA();
            }
            public function BBB(){
                $Kim = "Onur Tatlı<br />";
                echo $Kim;
                parent::BBB();
            }
            public function CCC(){
                $Kim = "Oguzhan Karahan<br />";
                echo $Kim;
                parent::CCC();
            }


        }

        $Nesne = new Egitmenler;
        $Nesne->AAA();
        $Nesne->BBB();
        $Nesne->CCC();
        */



        /*
        //ÖRNEK 14 PARENT:: KULLANIMI
        class Dersler{

            public function AAA(){
                $Icerik = "A'dan Z'ye PHP7 Eğitim Seti<br /><br />";
                return $Icerik;
            }
            public function BBB(){
                $Icerik = "A'dan Z'ye JS Eğitim Seti<br /><br />";
                return $Icerik;
            }
            public function CCC(){
                $Icerik = "A'dan Z'ye CSS3 Eğitim Seti<br /><br />";
                return $Icerik;
            }


        }

        class Egitmenler extends Dersler{

            public function AAA(){
                $Kim = "Volkan Alakent<br />";
                $Kim .= parent::AAA();
                return $Kim;

            }
            public function BBB(){
                $Kim = "Onur Tatlı<br />";
                $Kim .= parent::BBB();
                return $Kim;
            }
            public function CCC(){
                $Kim = "Oguzhan Karahan<br />";
                $Kim .= parent::CCC();
                return $Kim;
            }


        }

        $Nesne = new Egitmenler;
        $Nesne->AAA();
        $Nesne->BBB();
        $Nesne->CCC();
        */



        /*
        //ÖRNEK 15 static kullanımı

        class Islem{
            public static $Isim = "Volkan";

        }


        echo Islem::$Isim;
        */


        /*
        //ÖRNEK 16 static kullanımı

        class Islem{
            public static const ISIM = "Volkan";

        }


        echo Islem::ISIM; //Static ifadesini const için kullanmayınız.

        */




        //ÖRNEK 17 static kullanımı

        class Islem{
            public static function BilgiVer(){
                    echo "Volkan Alakent";
            }

        }


        echo Islem::BilgiVer();




        ?>


</body>
</html>









