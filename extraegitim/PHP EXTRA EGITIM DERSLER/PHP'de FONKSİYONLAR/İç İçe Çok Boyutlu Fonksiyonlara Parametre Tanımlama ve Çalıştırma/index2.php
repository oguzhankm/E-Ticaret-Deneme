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
        //ÖRNEK1
        function Bir($Isim){

            function Iki($Soyisim){

                return $Soyisim;
            }
            $Yaz  = Iki("Karahan");

            return $Isim . " " . $Yaz;

        }

       $Sonuc   = Bir("Oğuzhan");
        echo $Sonuc;
*/

        //ÖRNEK2

        function Bir($IsimBir="Mehmet", $SoyisimBir="Karaca", $YasBir=26){

            function Iki($IsimIki="Ramazan", $SoyisimIki="Tuncbilek", $YasIki=30){

                function Uc($IsimUc="Serkan", $SoyisimUc="Zabun", $YasUc=28){

                    echo $IsimUc . " " . $SoyisimUc . " Yaş : " . $YasUc;

                }
                    Uc($IsimIki, $SoyisimIki, $YasIki);
            }
                Iki($IsimBir, $SoyisimBir, $YasBir);
        }
        Bir("Oguzhan", "Karahan", );




        ?>

</form>
</body>
</html>









