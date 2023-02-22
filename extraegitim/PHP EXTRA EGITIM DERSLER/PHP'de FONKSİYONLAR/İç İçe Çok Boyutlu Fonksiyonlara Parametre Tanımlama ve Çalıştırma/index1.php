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






        ?>

</form>
</body>
</html>









