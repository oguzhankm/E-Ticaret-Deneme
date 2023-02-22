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
Sabit       : Girdiğimiz değerleri alan veya program çalışması ile  bazı değerlerin atandığı veri tutuculardır.
Kurallar    :
1. Sabitler ve içerikleri define() fonksiyonu ile veya const tanımı ile oluşturulur.
2. Sabit isimleri mutlaka bir harf ve ya _ (altçizgi) ile başlamalıdır.
3. Sabit isimleri hiç bir zaman bir rakam ile başlayamaz.
4. Sabit isimleri içerisinde alfenumerik değerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
5. Sabit isimleri içerisinde hiç bir zaman boşluk türkçe veya özel karakterler kullanılamaz.
6. Sabit isimleri tanımlanırken, PHP tarafından kullanılmakta olan tanımlar(isimler) kullanılamaz.
7. Sabit isimleri büyük harf / küçük harf duyarlıdır. Eğer istenecek olursa harf duyarlılığı iptal edilebilir.
8. Sabit isimleri birden fazla kez kullanılamaz.
9. Sabitlere atanacak olan değerler daha sonradan değiştirilemez veya tanımsız duruma getirilemez.
10. Sabitler kapsama / etki alanı kurallarına tabi değildir ve her alandan erişilebilir.
*/

/*
//Örnek 1
define( "Isim", "Oğuzhan Karahan");

echo Isim;
*/
/*
//Örnek 2
const ISIM =  "Oğuzhan Karahann";

echo ISIM;
*/
/*
//Örnek 3
define( "_Isim", "Oğuzhan Karahan");

echo _Isim;
*/

/*
//Örnek 4
//Sabitler sayı ile başlayamaz.
define( "1Isim", "Oğuzhan Karahan");

echo 1Isim;
*/





/*
Değişken    :   Girdiğimiz değerleri alan ve ya programın çalışması ile bazı değerlerin atandığı veri tutuculardır.
Kurallar    :
1. Değişkenler daima $ (Dolar) işareti ile başlar.
2. Değişken isimleri mutlaka bir harf ve ya _ (altçizgi) ile başlamalıdır.
3. Değişken isimleri hiç bir zaman bir rakam ile başlayamaz.
4. Değişken isimleri içerisinde alfenumerik değerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
5. Değişken isimleri içerisinde hiç bir zaman boşluk türkçe veya özel karakterler kullanılamaz.
6. Değişken isimleri tanımlanırken, PHP tarafından kullanılmakta olan tanımlar(isimler) kullanılamaz.
7. Değişken isimleri büyük harf / küçük harf duyarlıdır.
8. Değişken isimleri birden fazla kez kullanılabilir. Fakat değişken ismi tekrarı durumunda daime son değişken değeri gerçek değer olarak kabul edilir.
9. Değişkenler kapsama / etki alanı kurallarına tabidir.
*/
?>
</body>
</html>