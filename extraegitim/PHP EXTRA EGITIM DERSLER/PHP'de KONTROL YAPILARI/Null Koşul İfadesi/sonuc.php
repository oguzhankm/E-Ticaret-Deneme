<?php


$GelenIsimDegeri    = $_GET["KullaniciAdi"] ?? "HATA";
$GelenSoyisimDegeri = $_GET["KullaniciSoyadi"] ?? "HATA";

echo "Formadan Gelen İsim Değeri : "  . $GelenIsimDegeri . "<br/>";
echo "Formadan Gelen İsim Değeri : "  . $GelenSoyisimDegeri . "<br/>";

