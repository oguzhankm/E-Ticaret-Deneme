<!doctype html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="utf-8">
    <title>Extra Eğitim</title>
</head>

<body>
        <?php
        /*
        DISTINCT            :	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini okuma işlemi sırasında belirtilecek olan sütuna veya sütunlara ait
        tekrar eden verilerinin sadece ilkini işleme dahil ederek diğerlerinin işlem dışında bırakılmasını sağlamak için kullanılır.
        GROUP BY            :   MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini okuma işlemi sırasında belirtilecek olan sütuna veya sütunlara ait
        tekrar eden verilerinin  gruplandırılmasını sağlamak için kullanılır.
        HAVING              :   MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini okuma işlemi sırasında belirtilecek olan sütuna veya sütunlara ait
        tekrar eden verilerin group by ifadesi ile gruplandırılması sırasında koşul /koşullara tanımlamak / belirtmek için kullanılır.


        */



/*
        //ÖRNEK1
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT DISTINCT sehir FROM kayitlar ");
        if($Sorgu){

            $KayitSayisi   =  mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){

                echo "Üyelere Ait Şehirler <br /><br />";
                while ($Kayitlar=mysqli_fetch_assoc($Sorgu)){


                    echo $Kayitlar["sehir"] . "<br />";

                }


            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);



*/
/*
              //ÖRNEK2
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $SorguA	=	mysqli_query($VeritabaniBaglantisi, "SELECT DISTINCT sehir FROM kayitlar ");
        if($SorguA){

            $KayitSayisi   =  mysqli_num_rows($SorguA);
            if ($KayitSayisi>0){

                echo "Üyelere Ait Şehirler ve Kayıtları <br /><br />";
                while ($Kayitlar=mysqli_fetch_assoc($SorguA)){
                    echo $Kayitlar["sehir"] . "<br/>";
                    $SorguB  = mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kayitlar WHERE sehir= '" . $Kayitlar["sehir"] . "'");

                    if ($SorguB){
                        $KayitSayisiIki = mysqli_num_rows($SorguB);
                        if ($KayitSayisi>0){
                            while ($KayitlarIki=mysqli_fetch_assoc($SorguB)){
                                echo $KayitlarIki["adisoyadi"] . "<br />";
                            }
                        }else{
                            "Kayıt Yok";
                        }
                    }else{
                        echo  "Sorgu Hatası";
                    }
                    echo "<br />";
                }


            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);
*/


/*
        //ÖRNEK3
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT DISTINCT * FROM kayitlar GROUP BY  sehir ");
        if($Sorgu){

            $KayitSayisi   =  mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){

                echo "Üyelere Ait Şehirler <br /><br />";
                while ($Kayitlar=mysqli_fetch_assoc($Sorgu)){


                    echo $Kayitlar["sehir"] . "<br />";

                }


            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);
*/


        /*
        //ÖRNEK4
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kayitlar GROUP BY  sehir ");
        if($Sorgu){

            $KayitSayisi   =  mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){

                echo "Üyelere Ait Şehirler <br /><br />";
                while ($Kayitlar=mysqli_fetch_assoc($Sorgu)){


                    echo $Kayitlar["id"] . "<br />";
                    echo $Kayitlar["adisoyadi"] . "<br />";
                    echo $Kayitlar["yas"] . "<br />";
                    echo $Kayitlar["sehir"] . "<br />";
                    echo $Kayitlar["siteyegirissayisi"] . "<br />";
                    echo $Kayitlar["siparissayisi"] . "<br />";
                    echo $Kayitlar["siparistoplamtutari"] . "<br /><br />";

                }


            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);
        */


/*
        //ÖRNEK5
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT sehir, SUM(siparistoplamtutari) AS ToplamTutar FROM kayitlar GROUP BY  sehir ");
        if($Sorgu){

            $KayitSayisi   =  mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){

                echo "Üyelere Ait Şehirler <br /><br />";
                while ($Kayitlar=mysqli_fetch_assoc($Sorgu)){


                    echo $Kayitlar["sehir"] . " : " . $Kayitlar["ToplamTutar"] .  "<br />";



                }


            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);
*/
/*
        //ÖRNEK6
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT sehir, MIN(siparistoplamtutari) AS MininumTutar, MAX(siparistoplamtutari) AS MaksimumTutar,
       SUM(siparistoplamtutari) AS ToplamTutar FROM kayitlar GROUP BY  sehir ");
        if($Sorgu){

            $KayitSayisi   =  mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){

                echo "Üyelere Ait Şehirler <br /><br />";
                while ($Kayitlar=mysqli_fetch_assoc($Sorgu)){


                    echo $Kayitlar["sehir"] . "<br />";
                    echo "Minimum Sipariş Tutarı : " . $Kayitlar["MininumTutar"] . "<br />";
                    echo "Maksimum Sipariş Tutarı : " .$Kayitlar["MaksimumTutar"] . "<br />";
                    echo "Toplam Sipariş Tutarı : " .$Kayitlar["ToplamTutar"] . "<br /><br />";



                }


            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);
*/




        //ÖRNEK6
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT sehir, MIN(siparistoplamtutari) AS MininumTutar, MAX(siparistoplamtutari) AS MaksimumTutar,
       SUM(siparistoplamtutari) AS ToplamTutar FROM kayitlar GROUP BY  sehir HAVING ToplamTutar>0");
        if($Sorgu){

            $KayitSayisi   =  mysqli_num_rows($Sorgu);
            if ($KayitSayisi>0){

                echo "Üyelere Ait Şehirler <br /><br />";
                while ($Kayitlar=mysqli_fetch_assoc($Sorgu)){


                    echo $Kayitlar["sehir"] . "<br />";
                    echo "Minimum Sipariş Tutarı : " . $Kayitlar["MininumTutar"] . "<br />";
                    echo "Maksimum Sipariş Tutarı : " .$Kayitlar["MaksimumTutar"] . "<br />";
                    echo "Toplam Sipariş Tutarı : " .$Kayitlar["ToplamTutar"] . "<br /><br />";



                }


            }else{
                echo "Kayıt Yok";
            }



        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);





        ?>
</body>
</html>









