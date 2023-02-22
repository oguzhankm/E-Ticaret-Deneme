<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
/*
$DegerBir = "Oguzhan";
$DegerIki = $DegerBir;

echo $DegerBir;
echo "<br/>";
echo $DegerIki;
echo "<br/><br/>";

$DegerBir = "Hakan";

echo $DegerBir;
echo "<br/>";
echo $DegerIki;
echo "<br/><br/>";
*/

$DegerBir = "Oguzhan";
$DegerIki = &$DegerBir;       //Ampersand işareti ile referanslı atama gerçeleşir

echo $DegerBir;
echo "<br/>";
echo $DegerIki;
echo "<br/><br/>";

$DegerBir = "Hakan";

echo $DegerBir;
echo "<br/>";
echo $DegerIki;
echo "<br/><br/>";


?>


</body>
</html>