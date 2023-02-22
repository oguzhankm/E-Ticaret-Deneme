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
          return       :  Fonksiyondan değer döndürmek için kullanılır.
        */

        /*
        //ÖRNEK 1
        function Islem(){
            $IsimSoyisim  = "Oguzhan Karahan";

            return $IsimSoyisim;
        }

        $Sonuc = Islem();
        echo  $Sonuc;
        */



        //ÖRNEK 2

        function Islem(){
            $IsimSoyisim  = "Oguzhan Karahan";

            return $IsimSoyisim;
        }

        $Sonuc = Islem();

        if ($Sonuc == "Oguzhan Karahan"){
            echo $Sonuc . " bir yazılım geliştirme uzmanıdır.";
        }else{
            echo "Kişi Tanınmıyor";
        }




        ?>

</form>
</body>
</html>