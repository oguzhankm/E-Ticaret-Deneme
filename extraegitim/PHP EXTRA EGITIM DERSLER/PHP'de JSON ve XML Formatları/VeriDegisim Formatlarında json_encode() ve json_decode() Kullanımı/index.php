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
         json_encode()      : Belirtilecek olan içeriğin, JSON karşılığını bularak, bulduğu değeri geriye döndürür.
             JSON_HEX_TAG   : Belirtilecek olan içerikte bulunan TAG(etiket) başlangıç ve bitiş karakterlerini hexadecimal(onaltılık) türünde dönüştürmek için kullanılır.
             JSON_HEX_APOS  : Belirtilecek olan içerikte bulunan ' (tek tırnak) karakterlerini hexadecimal(onaltılık) türünde dönüştürmek için kullanılır.
             JSON_HEX_QUOT  : Belirtilecek olan içerikte bulunan " (çift tırnak) karakterlerini hexadecimal(onaltılık) türünde dönüştürmek için kullanılır.
             JSON_FORCE_OBJECT : Belirtilecek olan içeriği nesne dönüşüm yapısına göre zorlamak için kullanılır


        json_decode()       : Belirtilecek olan JSON değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
         */

        /*
        //ÖRNEK 1
        $Degerler    =  array("Ekstra Eğitim", "Volkan Alakent");

        /*
        echo "<pre>";
        print_r($Degerler);
        echo "</pre>";


        $Donustur  = json_encode($Degerler);

        echo $Donustur;
        */


        /*
        //ÖRNEK 2
        $Degerler    =  array("Firma" => "Ekstra Eğitim", "Yonetici"=>"Volkan Alakent");


        //echo "<pre>";
        //print_r($Degerler);
        //echo "</pre>";


        $Donustur  = json_encode($Degerler);

        echo $Donustur;
        */


        /*
        //ÖRNEK 3
        $Degerler    =  array(
            "Firma" => "Ekstra Eğitim",
            "Yonetici"=>"Volkan Alakent",
            "Egitimler" => array(
                "HTML",
                "CSS",
                "JS",
                "PHP"
            ),
            "Egitmenler"=>array(
                array(
                "Adı" => "Hakan Alakent",
                "Ders" => "HTML"
                ),
                array(
                    "Adı" => "Onur Tatlı",
                    "Ders" => "CSS3"
                ),
                array(
                    "Adı" => "Serkan Zabun",
                    "Ders" => "JS"
                ),
                array(
                    "Adı" => "Oğuzhan Karahan",
                    "Ders" => "PHP"
                ),
            )
        );


        //echo "<pre>";
        //print_r($Degerler);
        //echo "</pre>";


        $Donustur  = json_encode($Degerler);

        echo $Donustur;*/


        /*
        //ÖRNEK4

        $Deger   = '{
            "Firma" : "Extra Egitim",
            "Yönetici" : "Oguzhan KArahan"
        }';


        $Donustur  = json_decode($Deger, true);

        echo "<pre>";
        print_r($Donustur);
        echo "</pre>";
        */



/*
        //ÖRNEK 5
        $Deger    =  '{
                    "Firma" : "Ekstra Eğitim",
          "Yonetici" : "Volkan Alakent",
          "Egitimler" : [
                        "HTML",
                        "CSS",
                        "JS",
                        "PHP"
                    ],
          "Egitmenler"  : [
            {
                "Adı" : "Hakan Alakent",
                "Ders" : "HTML"
            },
            {
                "Adı" : "Onur Tatlı",
              "Ders" : "CSS3"
            },
            {
                "Adı" : "Serkan Zabun",
              "Ders" : "JS"
            },
            {
                "Adı" : "Oğuzhan Karahan",
              "Ders" : "PHP"
            }
          ]
        }';

        $Donustur  = json_decode($Deger);

        echo "<pre>";
        print_r($Donustur);
        echo "<pre>";


        foreach ($Donustur as $Anahtar => $Icerik){

            if (!is_array($Icerik)){
                echo $Anahtar . " : " . $Icerik . "<br />";
            }else{
                foreach ($Icerik as $YeniAnahtar => $YeniIcerik){
                    if (!is_object($YeniIcerik)){
                        echo $YeniAnahtar . " : " . $YeniIcerik . "<br />";
                    }else{
                        foreach ($YeniIcerik as $SonAnahtar => $SonIcerik){
                            echo $SonAnahtar . " : " . $SonIcerik . "<br />";
                        }
                    }



                }
            }
        }
        */


        //ÖRNEK 6
        $Deger    =  '{
                    "Firma" : "Ekstra Eğitim",
          "Yonetici" : "Volkan Alakent",
          "Egitimler" : [
                        "HTML",
                        "CSS",
                        "JS",
                        "PHP"
                    ],
          "Egitmenler"  : [
            {
                "Adı" : "Hakan Alakent",
                "Ders" : "HTML"
            },
            {
                "Adı" : "Onur Tatlı",
              "Ders" : "CSS3"
            },
            {
                "Adı" : "Serkan Zabun",
              "Ders" : "JS"
            },
            {
                "Adı" : "Oğuzhan Karahan",
              "Ders" : "PHP"
            }
          ]
        }';

        $Donustur  = json_decode($Deger, true);

        echo "<pre>";
        print_r($Donustur);
        echo "<pre>";

        function Oku($Veriler){

            foreach ($Veriler as $Anahtar => $Elaman){
                if (!is_array($Elaman)){
                    echo $Anahtar . " : " . $Elaman . "<br />";
                }else{
                    Oku($Elaman);
                }
            }

        }

        Oku($Donustur);



        ?>


</body>
</html>









