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
        htmlspecialchars()  : Belirtilecek olan içerikte bulunabilicek olan özel karakterleri (&, ', ", <, >) düz metin haline dönüştürerek,
        dönüştürdüğü değeri geriye döndürür.

                    ENT_COMPAT     : htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak "(çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
                    ENT_QUOTES      : htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak '(tek tırnak) ve "(çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
                    ENT_NOQUOTES    : htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için '(tek tırnak) ve "(çift tırnak) işaretlerini de dönüşümden iptal etmek için kullanılır. (Varsayılan)


        htmlspecialcharsdecode()  : Belirtilecek ollan ve htmlspecialcars metodu kullanılarak düz metin halinde sadece okunabilir HTML metnine dönüştürülmüş olan özel karakterleri
        (&, ', ", <, >)  orjinal karakter haline dönüştürerek, dönüştürdüğü değeri geriye döndürür.

                    ENT_COMPAT     : htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) işaretlerini de dönüşümden iptal etmek için kullanılır. (Varsayılan)
                    ENT_QUOTES      : htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak '(tek tırnak) ve  "(çift tırnak) işaretlerini de geri dönüştürmek için kullanılır.
                    ENT_NOQUOTES    : htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için '(tek tırnak) ve "(çift tırnak) işaretlerini de dönüşümden iptal etmek için kullanılır.
        */



        $Deger    =     "<b>Extra Eğitim</b> & <i>Volkan Alakent</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
        echo $Deger .  "<br />";

        $IslemBir    =   htmlspecialchars($Deger);
        echo $IslemBir . "<br /><br />";

        $IslemIki    =   htmlspecialchars($Deger, ENT_COMPAT);
        echo $IslemIki . "<br /><br />";

        $IslemUc    =   htmlspecialchars($Deger, ENT_QUOTES);
        echo $IslemUc . "<br /><br />";

        $IslemDort    =   htmlspecialchars($Deger, ENT_NOQUOTES);
        echo $IslemDort;



        ?>


</body>
</html>









