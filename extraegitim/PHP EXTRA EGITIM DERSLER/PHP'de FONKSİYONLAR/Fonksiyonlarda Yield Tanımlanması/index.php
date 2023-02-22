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
         yield   :  Fonksiyonlardan değer döndürmek için kullanılır.
         */

        /*
        //ÖRNEK1
        function Islem($Baslangic, $Bitis){

            while ($Baslangic <= $Bitis){
                echo $Baslangic . " ";
                $Baslangic++;

                return; // return dersek hemen döndü durur .
            }

        }
        Islem(1, 50000);
        */


        /*
        //ÖRNEK2
        function Islem($Baslangic, $Bitis){

            while ($Baslangic <= $Bitis){
                echo $Baslangic . " ";
                $Baslangic++;

                yield; //Döngü hiç çalışmaz.
            }

        }
        Islem(1, 50000);
        */

        /*
        //ÖRNEK3
        function Islem($Baslangic, $Bitis){

            $Sayilar   =  array();

            while ($Baslangic <= $Bitis){

                $Sayilar[]   =   $Baslangic;
                $Baslangic++;

            }
            return $Sayilar; // return dersek hemen döndü durur .ve ardından gelen işlem kodlar çalışmaz

        }
        $Sonuc  = Islem(1, 500000);

        foreach ($Sonuc as $Deger){
            echo $Deger . " ";
        }

        echo "<br /><br />";

        $BellekTüketimi = memory_get_usage();
        echo "İşlem esnasında tüketilen bellek miktarı : " . $BellekTüketimi . " byte";
        */


        //ÖRNEK4
        function Islem($Baslangic, $Bitis){

            while ($Baslangic <= $Bitis){

                yield $Baslangic; //Yield ifadesinden sonra döngü çalışmaya devam eder arkasında yazılan kodlar çalışır.
                $Baslangic++;
            }


        }
        $Sonuc  = Islem(1, 500000);


        foreach ($Sonuc as $Deger){
            echo $Deger . " ";
        }

        echo "<br /><br />";

        $BellekTüketimi = memory_get_usage();
        echo "İşlem esnasında tüketilen bellek miktarı : " . $BellekTüketimi . " byte";



        ?>

</form>
</body>
</html>









