<?php
session_start();
?>


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
        $_SESSION Herhangi bir kullanıcı için session (oturum) tanımlama imkanı tanır. Ayrıca daha önceden tanımlanmış olan session (oturum) verilerine de ulaşılabilme
        imkanı tanır.
        */


        $_SESSION["Ekstra"]  =  "Oguzhan Karahan";
        $_SESSION["E-Mail"]  =  "oguzhankm@gmail.com";
?>

</body>
</html>