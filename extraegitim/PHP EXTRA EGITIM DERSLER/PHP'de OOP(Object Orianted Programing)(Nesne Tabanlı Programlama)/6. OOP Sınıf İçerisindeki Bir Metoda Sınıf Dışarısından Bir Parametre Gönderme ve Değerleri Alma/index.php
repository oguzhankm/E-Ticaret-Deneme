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


        class Deneme{

            public function test($Isim, $Soyisim){
                $Metin = "Merhaba " . $Isim . " " . $Soyisim . " nasılsın?";
                return $Metin;
            }

        }
        $Islem = new Deneme;

        $Sonuc = $Islem->test("Oguzhan", "Karahan");
        echo $Sonuc;



        ?>


</body>
</html>









