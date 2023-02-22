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
        $Deger   =  "OGUZ";

        if ($Deger == "Volkan"){
            function Yaz(){
                echo "Merhaba Volkan Alakent";
            }
        }else{
            function Yaz(){
                echo "Merhaba Hakan Alakent";
            }
        }
        Yaz();
        */


        /*

        $Deger   =  "Volkan";

        switch ($Deger){
            case $Deger == "Volkan":
                function Yaz(){
                    echo "Merhaba Volkan Alakent";
                }
                break;
            default:
                function Yaz(){
                    echo "Merhaba Hakan Alakent";
                }
        }
        Yaz();
        */



        $Deger   =  "Oguzhan";

        if ($Deger == "Volkan"){
            function Yaz(){
                echo "Merhaba Volkan Alakent";
            }
        }elseif($Deger=="Büşra"){
            function Yaz(){
                echo "Merhaba Büşra Karahan";
            }
        }elseif ($Deger=="Mehmet"){
            function Yaz(){
                echo "Merhaba Mehmet Karaca";
            }
        }elseif ($Deger=="Oguzhan"){
            function Yaz(){
                echo "Merhaba Oguzhan Karahan";
            }
        }else{
            function Yaz(){
                echo "Merhaba Sen Kimsin?";
            }
        }
        Yaz();



        ?>

</form>
</body>
</html>