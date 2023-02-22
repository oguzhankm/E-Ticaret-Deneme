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
         settype()      =   Herhangi bir değişken içeriğinin veri türünü belirlemek / değiştirmek için kullanılır.
         */

        $Deger                  = "8";
        $DegerIcerigininIlkVeriTuru = gettype($Deger);

        echo "İçeriğin İlk Hali : " . $Deger . "<br />";
        echo "İçeriğin İlk Halinin Veri Türü : " . $DegerIcerigininIlkVeriTuru . "<br /><br />";

        settype($Deger, "integer");

        $DegerIcerigininIlkVeriTuru = gettype($Deger);

        echo "İçeriğin Son Hali : " . $Deger . "<br />";
        echo "İçeriğin Son Halinin Veri Türü : " . $DegerIcerigininIlkVeriTuru . "<br /><br />";

        ?>

</form>
</body>
</html>









