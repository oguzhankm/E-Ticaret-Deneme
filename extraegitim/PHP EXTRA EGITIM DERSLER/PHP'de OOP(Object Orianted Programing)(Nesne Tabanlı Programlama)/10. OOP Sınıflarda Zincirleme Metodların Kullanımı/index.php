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


        class Bicimlendir{

            public $Yazi;
            public $Stil;

            public function Metin($MetinDegeri){
                $this->Yazi  = $MetinDegeri;
                return $this;
            }


            public function Renk($RenkDegeri){
                $this->Stil  =   "color:" . $RenkDegeri . "; ";
                return $this;
            }

            public function Boyut($BoyutDegeri){
                $this->Stil  .= "font-size: " . $BoyutDegeri . ";";
                return $this;
            }

            public function Olustur(){
                return "<div style='" . $this->Stil ."'>" . $this->Yazi . "</div>";
            }


        }


        $Sonuc = new Bicimlendir;

        echo $Sonuc->Metin("Oğuzhan Karahan")->Renk("Red")->Boyut("170px")->Olustur() ."<br/>";
        echo $Sonuc->Metin("Büşra Karahan")->Renk("Green")->Boyut("168px")->Olustur() ."<br/>";
        echo $Sonuc->Metin("Volkan Alakent")->Renk("Blue")->Boyut("155px")->Olustur() ."<br/>";








        ?>


</body>
</html>









