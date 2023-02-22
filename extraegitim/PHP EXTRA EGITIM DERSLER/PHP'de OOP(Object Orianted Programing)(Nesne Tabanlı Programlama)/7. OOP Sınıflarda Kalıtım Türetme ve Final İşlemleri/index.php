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

        extends    : Bir sınıfı başka bir sınıftan türetmek istediğimiz zaman kullanılır.
        final      : En son kullanılan sınıftır ve türeyen son sınıf anlamını taşır. Ayrıca metodlar üzerinde kullanılabilir. ve final tanımlanırsa bağlı sınıflar içersinde aynı metod adı kullanılamaz.


        */


        /*
        //ÖRNEK 1
        class DenemeBir{
            public $Isim = "Oguzhan";
        }

        class DenemeIki extends DenemeBir{

        }

        $Sonuc = new DenemeIki;

        echo $Sonuc->Isim;
        */


        /*
        //ÖRNEK 2
        class DenemeBir{
            protected $Isim = "Oguzhan";
        }

        class DenemeIki extends DenemeBir{

        }

        $Sonuc = new DenemeIki;

        echo $Sonuc->Isim; //Özellik protected olduğu için hata kodu döndürür. private'de de aynısı olur.
        */



        /*
        //ÖRNEK 2
        class DenemeBir{
            protected $Isim = "Oguzhan";
        }

        class DenemeIki extends DenemeBir{
              function Dondur(){
                  return $this->Isim;
              }
        }

        $Sonuc = new DenemeIki;

        echo $Sonuc->Dondur();
        */


        /*
        //ÖRNEK 3
        class DenemeBir{
            public $Isim = "Oguzhan";
            public $Soyisim  = "Karahan";


            function Test(){
                $Birlestir  = $this->Isim . " " . $this->Soyisim . " - A'dan Z'ye PHP Egitim Seti";
                return $Birlestir;
            }
        }

        class DenemeIki extends DenemeBir{

        }

        $Sonuc = new DenemeIki;

        echo $Sonuc->Test();
        */



        /*
        //ÖRNEK 4

        class Islemler{
            public $IsimSoyisim;
            public  $AylikGelir;
            public  $AylikGider;

            public function IsimGoster($AdSoyad){
                $this->IsimSoyisim   =  $AdSoyad;
            }

            public function GelirGoster($GelirTutari){
                $this->AylikGelir   =  $GelirTutari;
            }

            public function GiderGoster($GiderTutari){
                $this->AylikGider   =  $GiderTutari;
            }

            public function GelirGiderHesaplamasi(){
                $NetKazanilan  = $this->AylikGelir - $this->AylikGider;
                return $NetKazanilan;
            }

            public function AltiAylikKazanilan(){
                $AltiAylikNetKazanilan  = ($this->AylikGelir - $this->AylikGider) * 6;
                return $AltiAylikNetKazanilan;
            }

            public function YillikKazanilan(){
                $YillikNetKazanilan  = ($this->AylikGelir - $this->AylikGider) * 12;
                return $YillikNetKazanilan;
            }

        }
        class ElemanlarDahili extends Islemler{

        }

        class ElemanlarHarici extends Islemler{

        }

        $BirinciKisi = new ElemanlarDahili();
        $BirinciKisi->IsimGoster("Oguzhan Karahan");
        $BirinciKisi->GelirGoster("10000");
        $BirinciKisi->GiderGoster("4000");

        echo $BirinciKisi->IsimSoyisim . " isimli şahsın aylık geliri <strong>" .$BirinciKisi->AylikGelir . "TL</strong>'dir. Aylık Gideri ise <strong>". $BirinciKisi->AylikGider . "TL</strong>'dir. Net Kazancı : <strong>".$BirinciKisi->GelirGiderHesaplamasi() . "TL</strong>'dir. <br/>";
        echo $BirinciKisi->IsimSoyisim . " isimli şahsın altı aylık net kazancı <strong>" . $BirinciKisi->AltiAylikKazanilan() . "TL</strong> ' dir." . " Yıllık net kazanılan miktar : <strong>" . $BirinciKisi->YillikKazanilan() . "TL</strong>'dir.  <br/><br/>";

        $IkinciKisi = new ElemanlarDahili();
        $IkinciKisi->IsimGoster("Volkan Alakent");
        $IkinciKisi->GelirGoster("25000");
        $IkinciKisi->GiderGoster("5000");

        echo $IkinciKisi->IsimSoyisim . " isimli şahsın aylık geliri <strong>" .$IkinciKisi->AylikGelir . "TL</strong>'dir. Aylık Gideri ise <strong>". $IkinciKisi->AylikGider . "TL</strong>'dir. Net Kazancı : <strong>".$IkinciKisi->GelirGiderHesaplamasi() . "TL</strong>'dir. <br/>";
        echo $IkinciKisi->IsimSoyisim . " isimli şahsın altı aylık net kazancı <strong>" . $IkinciKisi->AltiAylikKazanilan() . "TL</strong> ' dir." . " Yıllık net kazanılan miktar : <strong>" . $IkinciKisi->YillikKazanilan() . "TL</strong>'dir.  <br/><br/>";

        $UcuncuKisi = new ElemanlarHarici();
        $UcuncuKisi->IsimGoster("Büşra Karahan");
        $UcuncuKisi->GelirGoster("13522");
        $UcuncuKisi->GiderGoster("4254");

        echo $UcuncuKisi->IsimSoyisim . " isimli şahsın aylık geliri <strong>" .$UcuncuKisi->AylikGelir . "TL</strong>'dir. Aylık Gideri ise <strong>". $UcuncuKisi->AylikGider . "TL</strong>'dir. Net Kazancı : <strong>".$UcuncuKisi->GelirGiderHesaplamasi() . "TL</strong>'dir. <br/>";
        echo $UcuncuKisi->IsimSoyisim . " isimli şahsın altı aylık net kazancı <strong>" . $UcuncuKisi->AltiAylikKazanilan() . "TL</strong> ' dir." . " Yıllık net kazanılan miktar : <strong>" . $UcuncuKisi->YillikKazanilan() . "TL</strong>'dir.  <br/>";
        */


        /*
        //ÖRNEK 5

        class Bir{
            public function Deneme(){
               return "Oguzhan";
            }
        }

        class Iki extends Bir{
            public function Deneme(){
                return "Büşra";
            }
        }

        class Uc extends  Iki{
            public function Deneme(){
                return "Volkan";
            }
        }

        class Dort extends Uc {
            public function Deneme(){
                return "Serkan";
            }
        }
        class Bes extends Dort {
            public function Deneme(){
                return "Mehmet";
            }
        }


        $Sonuc  = new Bes;
        echo $Sonuc->Deneme();
        */



        /*
        //ÖRNEK 6

        class Bir{
            public function Deneme(){
                return "Oguzhan";
            }
        }

        class Iki extends Bir{
            public function Deneme(){
                return "Büşra";
            }
        }

        class Uc extends  Iki{
            public function Deneme(){
                return "Volkan";
            }
        }

        class Dort extends Uc {
            public function Deneme(){
                return "Serkan";
            }
        }
        class Bes extends Dort {
            public function Deneme(){
                return "Mehmet";
            }
            public function Dizi(){
                return ["Birinci"=>Bir::Deneme(), "Ikinci"=>Iki::Deneme(), "Ucuncu"=>Uc::Deneme(), "Dorduncu"=>Dort::Deneme(), "Besinci"=>Bes::Deneme()];
            }
        }


        $Sonuc  = new Bes;

        echo "<pre>";
        print_r($Sonuc->Dizi());
        echo "</pre>";
        */



        //ÖRNEK 6

        class Bir{
            public function Deneme(){
                return "Oguzhan";
            }
        }

        class Iki extends Bir{
            public function Deneme(){
                return "Büşra";
            }
        }

        class Uc extends  Iki{
            public function Deneme(){
                return "Volkan";
            }
        }

        class Dort extends Uc {
            public function Deneme(){
                return "Serkan";
            }
        }
        class Bes extends Dort {
            public function Deneme(){
                return "Mehmet";
            }
            public function Dizi(){

                $Deger = Dort::Deneme();
                return $Deger;
            }
        }


        $Sonuc  = new Bes;

        echo $Sonuc->Dizi();







        ?>


</body>
</html>









