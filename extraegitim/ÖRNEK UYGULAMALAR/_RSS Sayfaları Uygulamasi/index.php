<?php

require_once  "baglan.php";
header("Content-Type: text/xmlns");


        echo "<?xml version'1.0'  encoding='UTF8'?>
        <rss xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xmlns:xsd='http://www.w3.org/2001/XMLSchema' version='2.0'>
            <channel>
                <title>Extra Eğitim</title>
                <description>İleri Seviye Eğitim Setleri</description>
                <link>http://www.extraegitim.com</link>
                <language>tr</language>";

        $Sorgu  = $VeritabaniBaglantisi->prepare("SELECT * FROM urunler");
        $Sorgu->execute();
        $SorguSayisi  = $Sorgu->rowCount();
        $SorguKayitlari  =  $Sorgu->fetchAll(PDO::FETCH_ASSOC);


        if ($SorguSayisi>0){

            foreach ($SorguKayitlari as $Satirlar){

                $UrunAdi  = $Satirlar["urunadi"];
                $UrunFiyati   = $Satirlar["urunfiyati"];

                echo "
                
                <item>
                <title>$UrunAdi</title>
                <title>$UrunFiyati</title>
                </item>";

            }
        }

        echo "
        </channel> 
        </rss>";

$VeritabaniBaglantisi = null;
?>