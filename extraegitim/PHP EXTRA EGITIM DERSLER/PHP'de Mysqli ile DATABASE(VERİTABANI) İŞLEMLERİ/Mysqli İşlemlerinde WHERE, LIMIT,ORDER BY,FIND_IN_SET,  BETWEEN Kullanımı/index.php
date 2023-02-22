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
        WHERE               	:	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini  işlemek yerine sadece koşula bağlı verilerin işlemek istenildiğini belirtmek için kullanılır.
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

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler WHERE id>=6 ");
        if($Sorgu){

            while ($Kayitlar = mysqli_fetch_assoc($Sorgu)){

               echo "ID Değeri : " . $Kayitlar["id"] . "<br />";
               echo "İsim Değeri : " . $Kayitlar["isim"] . "<br />";
               echo "Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
               echo "Beceriler Değeri : " . $Kayitlar["beceriler"] . "<br />";
               echo "Beceri Seviyeleri Değeri : " . $Kayitlar["beceriseviyeleri"] . "<br /><br />";


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

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler WHERE isim LIKE '%an'");
        if($Sorgu){

            while ($Kayitlar = mysqli_fetch_assoc($Sorgu)){

                echo "ID Değeri : " . $Kayitlar["id"] . "<br />";
                echo "İsim Değeri : " . $Kayitlar["isim"] . "<br />";
                echo "Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
                echo "Beceriler Değeri : " . $Kayitlar["beceriler"] . "<br />";
                echo "Beceri Seviyeleri Değeri : " . $Kayitlar["beceriseviyeleri"] . "<br /><br />";


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

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler WHERE id IN (3,5,11,9)");
        if($Sorgu){

            while ($Kayitlar = mysqli_fetch_assoc($Sorgu)){

                echo "ID Değeri : " . $Kayitlar["id"] . "<br />";
                echo "İsim Değeri : " . $Kayitlar["isim"] . "<br />";
                echo "Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
                echo "Beceriler Değeri : " . $Kayitlar["beceriler"] . "<br />";
                echo "Beceri Seviyeleri Değeri : " . $Kayitlar["beceriseviyeleri"] . "<br /><br />";


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

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler WHERE FIND_IN_SET('85', beceriseviyeleri)"); //FIND_IN_SET muhakkak verilen değeri arayıp bulur.
        if($Sorgu){

            while ($Kayitlar = mysqli_fetch_assoc($Sorgu)){

                echo "ID Değeri : " . $Kayitlar["id"] . "<br />";
                echo "İsim Değeri : " . $Kayitlar["isim"] . "<br />";
                echo "Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
                echo "Beceriler Değeri : " . $Kayitlar["beceriler"] . "<br />";
                echo "Beceri Seviyeleri Değeri : " . $Kayitlar["beceriseviyeleri"] . "<br /><br />";


            }

        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);
*/


        //ÖRNEK3
        $VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "", "extraegitim");
        mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

        if(mysqli_connect_errno()){
            echo "Bağlantı Hatası";
            echo "Hata Açıklaması : " . mysqli_connect_error() . "<br />";
            die();
        }

        $Sorgu	=	mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kisiler WHERE yas BETWEEN 35 AND 45"); //FIND_IN_SET muhakkak verilen değeri arayıp bulur.
        if($Sorgu){

            while ($Kayitlar = mysqli_fetch_assoc($Sorgu)){

                echo "ID Değeri : " . $Kayitlar["id"] . "<br />";
                echo "İsim Değeri : " . $Kayitlar["isim"] . "<br />";
                echo "Yaş Değeri : " . $Kayitlar["yas"] . "<br />";
                echo "Beceriler Değeri : " . $Kayitlar["beceriler"] . "<br />";
                echo "Beceri Seviyeleri Değeri : " . $Kayitlar["beceriseviyeleri"] . "<br /><br />";


            }

        }else{
            echo "Sorgu Hatası";
        }

        mysqli_close($VeritabaniBaglantisi);


        ?>
</body>
</html>









