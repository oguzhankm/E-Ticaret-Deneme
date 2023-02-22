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
        //ÖRNEK1
        function Bir(){

            function Iki(){
                function Uc(){
                    function Dort(){
                        function Bes(){
                            echo "Burası Beş adındaki fonksiyonun içerisidir.";
                        }
                        echo "Burası Dört adındaki fonksiyonun içerisidir." ."<br />";
                    }
                    echo "Burası üç adındaki fonksiyonun içerisidir." ."<br />";
                }
                echo "Burası İki adındaki fonksiyonun içerisidir." ."<br />";
            }
           echo "Burası Bir adındaki fonksiyonun içerisidir." ."<br />";

        }

        Bir();
        Iki();
        Uc();
        Dort();
        Bes();
        */


        //ÖRNEK1
        function IslemSonucuMesaji(){

            function TamamMesaji(){
                    echo  "İşleminiz Başarıyla Tamamlanmıştır.";
            }
            function HataMesaji(){
                    echo  "İşlem Sırasında Beklenmeyen Bir Hata Oluştu.";
            }
            function UyarıMesaji(){
                    echo  "Dikkay Yapılmaya Çalışılan İşlem Şuanda Aktif Değil";
            }

        }




        $Sonuc = "Tamam";

        if ($Sonuc=="Tamam"){
            IslemSonucuMesaji();
            $Mesaj = TamamMesaji();
            echo $Mesaj;

            TamamMesaji();
        }elseif ($Sonuc=="Dikkat"){
            IslemSonucuMesaji();
            $Mesaj = UyarıMesaji();
            echo $Mesaj;

        }else{
            IslemSonucuMesaji();
            $Mesaj = HataMesaji();
            echo $Mesaj;

        }


        ?>

</form>
</body>
</html>









