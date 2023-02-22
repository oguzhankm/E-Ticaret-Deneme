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
        simplexml_load_string()     : Belirtilecek olan XML kodlama degerinin standart kodlama karşılığını bularak bulduğu değeri geriye döndürür.
        simplexml_load_file()       : Belirtilecek olan XML dosyası içeriği degerinin standart kodlama karşılığını bularak bulduğu değeri geriye döndürür.
            LIBXML_NOCDATA          : Belirtilecek olan XML kodlama degerinin içerisinde bulunan CDATA değerlerini metin düğümleri ile birleştirmek için kullanılır.
        children()                  : Belirtilecek olan XML kodlama degerinin içerisinde bulunan, belirtilecek olan tag adı değerinde bağlı olan bir alt tüm çocuk elemanları / elementleri işaret etmek ve seçmek için kullanılır
        xpath                       : Belirtilecek olan XML kodlama degerinin içerisinde bulunan, belirtilecek olan değer ya da değerler doğrultusunda eşleşen tüm elemanları / elementleri işaret etmek ve seçmek için kullanılır
        simpleXMLElement()          : Belirtilecek olan içerikler dahilinde XML kodlama yapıları oluşturmak için kullanılır.
        asXML()                     : Belirtilecek olan ve SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarının çıktılamasını sağlamak için kullanılır.
        addChild()                  : Belirtilecek olan ve SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarına yenş elaman / element eklemek için kullanılır.
        addAttribute()              : Belirtilecek olan ve SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarına ait elemana / elemente özellik eklemek için kullanılır.
        DOMDocument()               : Kullanıldığı dökümanı bir DOMDocument() nesne örneğine yükeleyerek işleme hazır hale getirmek için kullanılır.
            LoadXML()               : DOMDocument() metodu ile oluşturulmuş olan DOMDocument nesne örneğine belirtilecek olan herhangi bir içeriği yüklemek için kullanılır.
            preserveWhiteSpace      : DOMDocument() metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerikte WhiteSpace özelliğinin kullanılığ kullanılmayacğını belirtmek için kullanılır.
            formatOutput            : DOMDocument() metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerikte sekme girinti özelliğinin kullanılıp kullanılmayacağını belirtmek için kullanılır.
            xmlVersion              : DOMDocument() metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin belge türü belirtiminde kullanılcak olan XML sürümünü / verisyonunu belirtmek için kullanılır.
            encoding                : DOMDocument() metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin belge türü belirtiminde kullanılcak olan karakter kodlamasını belirtmek için kullanılır.
            saveXML()               : DOMDocument() metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin çıktılanmasını sağlamak için kullanılır.
            save()                  : DOMDocument() metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içeriğin belirtilecek olan dosyaya kaydedilmesini sağlamak için kullanılır.

        */

        /*
        //ÖRNEK 1
        $Degerler   = '<EKSTRAEGITIM>
    <FIRMA>Ekstra Eğitim</FIRMA>
    <YONETICI>Volkan Alakent</YONETICI>
    </EKSTRAEGITIM>';

        $Donustur  = simplexml_load_string($Degerler);

        echo "<pre>";
        print_r($Donustur);
        echo "<pre>";

        echo $Donustur->FIRMA . "<br />";
        echo $Donustur->YONETICI;
        */


        /*
        //ÖRNEK 2
        $Degerler   = '<EKSTRAEGITIM>
    <FIRMA>Ekstra Eğitim</FIRMA>
    <YONETICI-ADI>Volkan Alakent</YONETICI-ADI>
    </EKSTRAEGITIM>';

        $Donustur  = simplexml_load_string($Degerler);

        echo "<pre>";
        print_r($Donustur);
        echo "<pre>";

        echo $Donustur->FIRMA . "<br />";
        //echo $Donustur->YONETICI-ADI; Hata döndürür, çünkü tag'da -(tire) karakteri bulunuyor
        echo $Donustur->{'YONETICI-ADI'};
        */



        /*
        //ÖRNEK 3
        $Degerler   = '<EKSTRAEGITIM>
                            <FIRMA>Ekstra Eğitim</FIRMA>
                            <YONETICI>Volkan Alakent</YONETICI>
                            <EGITIMLER>
                                <KURS id="Bir">HTML5</KURS>
                                <KURS id="Iki">CSS3</KURS>
                                <KURS id="Uc">JAVASCRIPT</KURS>
                                <KURS id="Dort">PHP/</KURS>
                            </EGITIMLER>
                            <EGITMENLER>
                                <EGITMEN  id="1">
                                    <ADI>Volkan Alakent</ADI>
                                    <KURSADI>PHP7</KURSADI>
                                </EGITMEN>
                                <EGITMEN  id="2">
                                    <ADI>Hakan Alakent</ADI>
                                    <KURSADI>JAVASCRIT</KURSADI>
                                </EGITMEN>  
                                <EGITMEN  id="3">
                                    <ADI>Oguzhan Karahan</ADI>
                                    <KURSADI>CSS3</KURSADI>
                                </EGITMEN>
                                <EGITMEN  id="4">
                                    <ADI>Ümit Okudan</ADI>
                                    <KURSADI>HTML5</KURSADI>
                                </EGITMEN>
                        
                            </EGITMENLER>
                        </EKSTRAEGITIM>';

        $Donustur  = simplexml_load_string($Degerler);

        echo "<pre>";
        print_r($Donustur);
        echo "<pre>";

        echo $Donustur->FIRMA . "<br />";
        echo $Donustur->YONETICI . "<br />";
        echo $Donustur->EGITIMLER->KURS[0] . "<br />";
        echo $Donustur->EGITIMLER->KURS[1] . "<br />";
        echo $Donustur->EGITIMLER->KURS[2] . "<br />";
        echo $Donustur->EGITIMLER->KURS[3] . "<br />";

        echo $Donustur->EGITMENLER->EGITMEN[0]->ADI . "<br />";
        echo $Donustur->EGITMENLER->EGITMEN[0]->KURSADI . "<br />";
        echo $Donustur->EGITMENLER->EGITMEN[1]->ADI . "<br />";
        echo $Donustur->EGITMENLER->EGITMEN[1]->KURSADI . "<br />";
        echo $Donustur->EGITMENLER->EGITMEN[2]->ADI . "<br />";
        echo $Donustur->EGITMENLER->EGITMEN[2]->KURSADI . "<br />";
        echo $Donustur->EGITMENLER->EGITMEN[3]->ADI . "<br />";
        echo $Donustur->EGITMENLER->EGITMEN[3]->KURSADI;
        */



        /*
        //ÖRNEK 4
        $Degerler   = '<EKSTRAEGITIM>
                    <FIRMA>Ekstra Eğitim</FIRMA>
                    <YONETICI>Volkan Alakent</YONETICI>
                    <ACIKLAMA><![CDATA[Küçük işaretinin simgesi : < , Büyük işaretinin simgesi : > olarak yazılmaktadır. ]]></ACIKLAMA>
                    </EKSTRAEGITIM>';

        $Donustur  = simplexml_load_string($Degerler, "SimpleXMLElement", LIBXML_NOCDATA); // Hata kodu döndürür çünkü < veya > gibi işareler kullanılırsa problemdir.

        echo "<pre>";
        print_r($Donustur);
        echo "<pre>";

        echo $Donustur->FIRMA . "<br />";
        echo $Donustur->YONETICI . "<br />";
        echo $Donustur->ACIKLAMA . "<br />";
        */


        /*
        //ÖRNEK 5
        $Degerler   = '<EKSTRAEGITIM>
                    <FIRMA>Ekstra Eğitim</FIRMA>
                    <YONETICI>Volkan Alakent</YONETICI>
                    <ACIKLAMA><![CDATA[Küçük işaretinin simgesi : < , Büyük işaretinin simgesi : > olarak yazılmaktadır. ]]></ACIKLAMA>
                    </EKSTRAEGITIM>';

        $Donustur  = simplexml_load_string($Degerler, "SimpleXMLElement", LIBXML_NOCDATA); // Hata kodu döndürür çünkü < veya > gibi işareler kullanılırsa problemdir.

        echo "<pre>";
        print_r($Donustur);
        echo "<pre>";

       foreach ($Donustur as $Anahtar=> $Eleman){
           echo $Anahtar . " : " . "$Eleman" . "<br />";
       }
        */

        /*
        //ÖRNEK 6
        $Degerler   = '<EKSTRAEGITIM>
                            <FIRMA>Ekstra Eğitim</FIRMA>
                            <YONETICI>Volkan Alakent</YONETICI>
                            <EGITIMLER>
                                <KURS id="Bir">HTML5</KURS>
                                <KURS id="Iki">CSS3</KURS>
                                <KURS id="Uc">JAVASCRIPT</KURS>
                                <KURS id="Dort">PHP7</KURS>
                            </EGITIMLER>
                            <EGITMENLER>
                                <EGITMEN  id="1">
                                    <ADI>Volkan Alakent</ADI>
                                    <KURSADI>PHP7</KURSADI>
                                </EGITMEN>
                                <EGITMEN  id="2">
                                    <ADI>Hakan Alakent</ADI>
                                    <KURSADI>JAVASCRIT</KURSADI>
                                </EGITMEN>  
                                <EGITMEN  id="3">
                                    <ADI>Oguzhan Karahan</ADI>
                                    <KURSADI>CSS3</KURSADI>
                                </EGITMEN>
                                <EGITMEN  id="4">
                                    <ADI>Ümit Okudan</ADI>
                                    <KURSADI>HTML5</KURSADI>
                                </EGITMEN>
                        
                            </EGITMENLER>
                        </EKSTRAEGITIM>';

        $Donustur  = simplexml_load_string($Degerler);

        echo "<pre>";
        print_r($Donustur);
        echo "</pre>";

        foreach ($Donustur as $Anahtar => $Deger){
            echo $Anahtar . " : " . $Deger . "<br />";

            if ($Donustur->$Anahtar->children() != ""){
                $Sayi  =  0;
                foreach ($Donustur->$Anahtar->children() as $AnahtarIki => $DegerIki){
                    echo $AnahtarIki . " : " . $DegerIki . "<br />";

                    if ($Donustur->$Anahtar->$AnahtarIki[$Sayi]->children() != ""){

                        foreach ($Donustur->$Anahtar->$AnahtarIki[$Sayi]->children() as $AnahtarUc => $DegerUc){
                            echo $AnahtarUc . " : " . $DegerUc . "<br />";
                        }

                    }


                    $Sayi++;
                }

            }

        }
        */



/*
        //ÖRNEK 6
        $Degerler   = '<EKSTRAEGITIM>
                            <FIRMA>Ekstra Eğitim</FIRMA>
                            <YONETICI>Volkan Alakent</YONETICI>
                            <EGITIMLER>
                                <KURS id="Bir">HTML5</KURS>
                                <KURS id="Iki">CSS3</KURS>
                                <KURS id="Uc">JAVASCRIPT</KURS>
                                <KURS id="Dort">PHP7</KURS>
                            </EGITIMLER>
                            <EGITMENLER>
                                <EGITMEN  id="1">
                                    <ADI>Volkan Alakent</ADI>
                                    <KURSADI>PHP7</KURSADI>
                                </EGITMEN>
                                <EGITMEN  id="2">
                                    <ADI>Hakan Alakent</ADI>
                                    <KURSADI>JAVASCRIT</KURSADI>
                                </EGITMEN>  
                                <EGITMEN  id="3">
                                    <ADI>Oguzhan Karahan</ADI>
                                    <KURSADI>CSS3</KURSADI>
                                </EGITMEN>
                                <EGITMEN  id="4">
                                    <ADI>Ümit Okudan</ADI>
                                    <KURSADI>HTML5</KURSADI>
                                </EGITMEN>
                        
                            </EGITMENLER>
                        </EKSTRAEGITIM>';

        $Donustur  = simplexml_load_string($Degerler);

        echo "<pre>";
        print_r($Donustur);
        echo "</pre>";


        echo $Donustur->FIRMA . "<br />";
        echo $Donustur->YONETICI . "<br />";

        foreach ($Donustur->EGITIMLER->KURS as $Anahtar => $Deger){
            echo $Anahtar . " : " . $Deger . "<br />";
        }

        $Say  = count($Donustur->EGITMENLER->EGITMEN);

        if ($Say>0){
            $Sayi   =  0;
            foreach ($Donustur->EGITMENLER->EGITMEN as $YeniAnahtar => $YeniDeger){
                echo "EGITMEN : <br />";
                foreach ($Donustur->EGITMENLER->EGITMEN[$Sayi]->children() as $SonAnahtar => $SonDeger){
                    echo $SonAnahtar . " : " . $SonDeger . "<br />";
                }

                $Sayi++;

            }

        }
        */



        //ÖRNEK 7
        $Degerler   = '<EKSTRAEGITIM>
                            <FIRMA>Ekstra Eğitim</FIRMA>
                            <YONETICI>Volkan Alakent</YONETICI>
                            <EGITIMLER>
                                <KURS id="Bir">HTML5</KURS>
                                <KURS id="Iki">CSS3</KURS>
                                <KURS id="Uc">JAVASCRIPT</KURS>
                                <KURS id="Dort">PHP7</KURS>
                            </EGITIMLER>
                            <EGITMENLER>
                                <EGITMEN  id="1">
                                    <ADI>Volkan Alakent</ADI>
                                    <KURSADI>PHP7</KURSADI>
                                </EGITMEN>
                                <EGITMEN  id="2">
                                    <ADI>Hakan Alakent</ADI>
                                    <KURSADI>JAVASCRIT</KURSADI>
                                </EGITMEN>  
                                <EGITMEN  id="3">
                                    <ADI>Oguzhan Karahan</ADI>
                                    <KURSADI>CSS3</KURSADI>
                                </EGITMEN>
                                <EGITMEN  id="4">
                                    <ADI>Ümit Okudan</ADI>
                                    <KURSADI>HTML5</KURSADI>
                                </EGITMEN>
                        
                            </EGITMENLER>
                        </EKSTRAEGITIM>';

        $Donustur  = simplexml_load_string($Degerler);

        echo "<pre>";
        print_r($Donustur);
        echo "</pre>";


        function Oku($Veri){

            foreach ($Veri as $Anahtar =>$Eleman){

                if (!is_array($Eleman)){
                    echo $Anahtar . " : " . $Eleman . "<br />";
                    if (is_object($Eleman)){
                        Oku($Eleman);
                    }
                }
            }
        }

        Oku($Donustur);





        ?>


</body>
</html>









