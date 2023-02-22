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

        CURLOPT_FILE        : Başlatılmış bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımlandıktan sonra, CURLOPT_POSTFIELDS dahilinde karşı server'a dosya yüklemek için kullanılır.


        */


        ?>

        <form action="sonuc.php" method="post" enctype="multipart/form-data">

            Yüklencek Dosya : <input type="file" name="Dosya"> <br>

            <input type="submit" value="Yükle">


        </form>




</body>
</html>









