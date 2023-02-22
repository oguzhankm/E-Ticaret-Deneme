<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <title>Ekstra Egitim</title>
</head>
<body>
<!--  Birden fazla parçacıklı dosyalar get metoduyla gönderilemez. Mutlaka post methodu olmalıdır.-->
<form action="sonuc.php" method="post" enctype="multipart/form-data">
    Seçiniz : <input type="file" name="dosya"><br>

    <input type="submit" value="Dosyayı Yükle">
</form>

</body>
</html>