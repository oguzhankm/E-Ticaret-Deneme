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

        abstract       : Belirtilecek olan herhangi bir sınıfı, soyut sınıf haline dönüştürmek için kullanılır.
        interface      : Belirtilecek olan herhangi bir sınıfı, soyut arayüz sınıfı haline dönüştürmek için kullanılır.
        implements     : Daha önceden oluşturulmuş herhangi bir arayüz sınıfını, ilgili sınıfa tanımlamak / uygulamak için kullanılır.

        abstract       :
        1. Soyut metodlar içebilir.
        2. Normal metodalar içerebilir.
        3. Özellikler içerebiir.
        4. Sabitler içerebilir.
        5. public, private ve ya protected tanımlanabilir.
        6. Herhangi bir sınıf sadece tek bir içerebilir abstract'dan türeyebilir.

        interface       :
        1. Soyut metodlar içebilir.
        2. Normal metodalar içerebilir. Fakat sadece public görünürlüğüne sahip olmak kaydıyla.
        3. Sabitler içerebilir.
        4. Herhangi bir sınıfda birden fazla interface (arayüz) kullanılabilir.

        */

        /*
        //ÖRNEK 1
        abstract class Deneme{
            abstract public function Tanim($ParametreIcerigi); //Hata kodu döndürür çünkü soyut sınıf içerisinde bulunan metodlar mutlaka soyut sınıfldan türeyen alt sınıflarda da kullanılmalıdır.
        }

        class Test extends Deneme{

        }
        */


        /*
        //ÖRNEK 2

        abstract class Deneme{
            abstract public function Tanim($ParametreIcerigi);
        }

        class Test extends Deneme{
            public function Tanim($ParametreIcerigi){

            }
        }
        */


        /*
        //ÖRNEK 3 //Türeyen sınıfta kullanılacak metodlar türediği sınftaki abstract(soyut) metodları almak zorunda parametreler farklı olabilir. Fakat metodlar aynı olmak zorunda.

        abstract class Tema{
            abstract public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri);
            abstract public function BodyAlani($Icerik);
            abstract public function FooterAlani($CopyMetni);
        }
        class UstAlan extends Tema{
            public function HeaderAlani($xxxx, $saas, $aaa){

            }
            public function BodyAlani($vvvv){

            }
            public function FooterAlani($cccc){

            }
        }
        */


        /*
        //ÖRNEK 4  INTERFACE
        interface Deneme{
            public function Tanim($ParametreIcerigi);
        }

        class Test implements Deneme{
            public function Tanim($ParametreIcerigi){

            }
        }
        */



        /*
        //ÖRNEK 5
        interface CRUD{  //CRUD C: Create, R: Read, U: Update, D: Delete
            public function Olusturma($TabloDegeri, $BenzersizKimlik);
            public function Okuma($TabloDegeri, $BenzersizKimlik);
            public function Duzenleme($TabloDegeri, $BenzersizKimlik);
            public function Silme($TabloDegeri, $BenzersizKimlik);
        }

        class Test implements CRUD{
            public function Olusturma($TabloDegeri, $BenzersizKimlik){

            }
            public function Okuma($TabloDegeri, $BenzersizKimlik){

            }
            public function Duzenleme($TabloDegeri, $BenzersizKimlik){

            }
            public function Silme($TabloDegeri, $BenzersizKimlik){

            }
        }
        */




        //ÖRNEK 6
        interface Olusturma{
            public function Olusturma($TabloDegeri, $BenzersizKimlik);

        }
        interface Okuma{
            public function Okuma($TabloDegeri, $BenzersizKimlik);

        }
        interface Duzenleme{
            public function Duzenleme($TabloDegeri, $BenzersizKimlik);

        }
        interface Silme{
            public function Silme($TabloDegeri, $BenzersizKimlik);

        }

        class Test implements Olusturma,Okuma,Duzenleme,Silme{


            public function Olusturma($TabloDegeri, $BenzersizKimlik){

            }
            public function Okuma($TabloDegeri, $BenzersizKimlik){

            }
            public function Duzenleme($TabloDegeri, $BenzersizKimlik){

            }
            public function Silme($TabloDegeri, $BenzersizKimlik){

            }
        }
















        ?>


</body>
</html>









