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


        function IslemYap($Isim="İsminizi Belirtiniz", $Soyisim="Soyisminizi Belirtin", $Yas="Yaşınızı Belirtin"){    //Parametrelere varsayılan değer tanımlandı.

            $GelenIsimDegeri      = $Isim;
                    if ($GelenIsimDegeri != "İsminizi Belirtin"){
                        echo "Gelen İsim : " . $GelenIsimDegeri . "<br />";
                    }

            $GelenSoyisimDegeri   = $Soyisim;
                    if ($GelenSoyisimDegeri != "Soyisminizi Belirtin"){
                        echo "Gelen Soyisim : " . $GelenSoyisimDegeri . "<br />";
                    }
            $GelenYasDegeri       = $Yas;
                    if ($GelenYasDegeri != "Yaşınızı Belirtin"){
                        echo "Gelen Yaş : " . $GelenYasDegeri;
                    }

        }

        IslemYap("Oguzhan", "Karahan");




        ?>

</form>
</body>
</html>









