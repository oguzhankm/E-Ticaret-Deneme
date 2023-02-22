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
    $GLOBALS    :    Atanacak olan değişken için kapsama / etki alanlarının  değiştirilmesini sağlar. Bu sayade global (küresel) alanda tanımlanmış bir değişkene local(yerel) alandan,
                     local(yerel) alanda tanımlanmış bir değşkene global(küresel) alandan ulaşabilme imkanı sağlar.
*/


/*
//Örnek 1
    function Deneme(){

        $GLOBALS["Isim"] = "Oguzhan Karahan";

    }
    Deneme();

    echo $Isim;

?>
*/

/*
//ÖRNEK 2
   function Deneme(){

        $GLOBALS["Isim"] = "Oguzhan Karahan";

    }
    Deneme();

    echo $GLOBALS["Isim"];
*/

/*
//ÖRNEK 3

$GLOBALS["Isim"] = "Oguzhan Karahan";

function Deneme()
{
    echo $GLOBALS["Isim"];
}

Deneme();
*/











?>

</body>
</html>