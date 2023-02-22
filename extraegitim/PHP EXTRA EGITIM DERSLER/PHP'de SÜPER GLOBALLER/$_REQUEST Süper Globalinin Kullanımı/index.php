<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <title>Ekstra Egitim</title>
</head>
<body>
<!--  /*ÖRNEK 1 */
<form action="sonuc.php" method="get">
    İsim : <input type="text" name="KullaniciAdi"> <br>
    Soyisim : <input type="text" name="KullaniciSoyad"> <br>

    <input type="submit" value="Bilgileri Gönder">
</form>
-->

<form action="sonuc.php" method="post">
    İsim : <input type="text" name="KullaniciAdi"> <br>
    Soyisim : <input type="text" name="KullaniciSoyad"> <br>

    <input type="submit" value="Bilgileri Gönder">
</form>

</body>
</html>