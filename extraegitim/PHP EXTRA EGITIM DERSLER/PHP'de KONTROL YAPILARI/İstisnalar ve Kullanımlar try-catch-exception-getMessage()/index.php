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
        try                 =  Hata oluşturabilicek kodlar için kullanılır.
        catch               =  Hata oluşursa çalıştırılacak kodlar için kullanılır.
        finally             =  Hata oluşsada oluşmasada çalıştırılacak kodlar için kullanılır.
        throw               =  Hata oluşabilicek kodlar için istisnai durumlarda kullanılır.
        Exception           =  Tüm istisnalar için önceden tanımlı olan temel sınıfı çağırmak için kullanılır.
        getMessage          =  Tüm istisnalar için oluşturulacak olan iletilerin atandığı veri tutuculardır.


        Yapısı :
        try{
            Kod Blokları
            throw new Exception(İleti);

        }catch(Exception İleti Ataması){
            Kod Blokları
        } finally{

        }

        */


        /*
        //ÖRNEK 1
        try {
            $Deger1    =  100;
            $Deger2    =  0; //Sıfıra bölme her zaman sıkıntı çıkarabilir.

            if ($Deger2 == 0){
                throw new Exception ("Hatalı İşlem yapılmaya çalışılıyor");
            }

            echo "Bölme İşleminizin Sonucu : " . $Deger1 / $Deger2;
        }catch (Exception $Sonuc){

            echo $Sonuc->getMessage();
        }
        */



        //ÖRNEK 2


        $Deger    =  "Oguzhan";

        try {


            if ($Deger == "Oguzhan"){
                echo "Merhaba Oguzhan Hoşgeldin Yazılım Dünyasına Hoşgeldiniz";
            }elseif ($Deger == "Hakan"){
                throw new Exception("Hakan isimli kişi yanlış yerdesin");
            }elseif ($Deger == "Onur"){
                throw new Exception("Sen Onursun yanlış geldin geri dön");
            }else{
                throw new Exception ("{$Deger} Sen Kimsin Dostum Oguzhan Nerede?");
            }


        }catch (Exception $Sonuc) {

            echo $Sonuc->getMessage();

        }






        ?>

</form>
</body>
</html>