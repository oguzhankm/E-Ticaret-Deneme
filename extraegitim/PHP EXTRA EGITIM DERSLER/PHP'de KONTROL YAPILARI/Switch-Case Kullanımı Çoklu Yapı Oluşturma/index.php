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
        $AyAdi  =  "Mart";

        switch ($AyAdi){
            case $AyAdi == "Ocak":
                echo $AyAdi . " ayı 1. aydır.";
                break;

            case $AyAdi == "Şubat":
                echo $AyAdi . " ayı 2. aydır.";
                break;

            case $AyAdi == "Mart":
                echo $AyAdi . " ayı 3. aydır.";
                break;

            case $AyAdi == "Nisan":
                echo $AyAdi . " ayı 4 aydır.";
                break;

            case $AyAdi == "Mayıs":
                echo $AyAdi . " ayı 5. aydır.";
                break;

            case $AyAdi == "Haziran":
                echo $AyAdi . " ayı 6. aydır.";
                break;

            case $AyAdi == "Temmuz":
                echo $AyAdi . " ayı 7 aydır.";
                break;

            case $AyAdi == "Ağustos":
                echo $AyAdi . " ayı 8. aydır.";
                break;

            case $AyAdi == "Eylül":
                echo $AyAdi . " ayı 9. aydır.";
                break;

            case $AyAdi == "Ekim":
                echo $AyAdi . " ayı 10. aydır.";
                break;

            case $AyAdi == "Kasım":
                echo $AyAdi . " ayı 11. aydır.";
                break;

            case $AyAdi == "Aralık":
                echo $AyAdi . " ayı 12. aydır.";
                break;

            default:
                echo $AyAdi . " Bir ay adı değildir.";


        }

        */


        //ÇOKLU SWITCH CASE YAPISI

        $Saat  =  0;

        switch ($Saat) {
            case ($Saat >= 0) and ($Saat <= 6):
                        switch ($Saat) {
                                case $Saat == 0:
                                    echo "İyi Geceler Şuan Saat 00:00";
                                    break;
                                case $Saat == 1:
                                    echo "İyi Geceler Şuan Saat 01:00";
                                    break;
                                case $Saat == 2:
                                    echo "İyi Geceler Şuan Saat 02:00";
                                    break;
                                case $Saat == 3:
                                    echo "İyi Geceler. Şuan Saat 03:00";
                                    break;
                                case $Saat == 4:
                                    echo "İyi Geceler Şuan Saat 04:00";
                                    break;
                                case $Saat == 5:
                                    echo "İyi Geceler Şuan Saat 05:00";
                                    break;
                                case $Saat == 6:
                                    echo "İyi Geceler Şuan Saat 06:00";
                                    break;
                                default:
                                    echo "Bilinmeyen Bir Hata Oluştu.";

                        }
                        break;



            case ($Saat > 6) and ($Saat <= 9):
                        switch ($Saat) {
                    case $Saat == 7:
                        echo "Günaydın. Şuan Saat 07:00";
                        break;
                    case $Saat == 8:
                        echo "Günaydın. Şuan Saat 08:00";

                        break;
                    case $Saat == 9:
                        echo "Günaydın. Şuan Saat 09:00";

                        break;
                    default:
                        echo "Bilinmeyen Bir Hata Oluştu.";

                }
                break;
            case ($Saat > 9) and ($Saat <= 17):
                        switch ($Saat) {
                    case $Saat == 10:
                        echo "İYİ GÜNLER. Şuan Saat 10:00";

                        break;
                    case $Saat == 11:
                        echo "İYİ GÜNLER. Şuan Saat 11:00";

                        break;
                    case $Saat == 12:
                        echo "İYİ GÜNLER. Şuan Saat 12:00";

                        break;
                    case $Saat == 13:
                        echo "İYİ GÜNLER. Şuan Saat 13:00";

                        break;
                    case $Saat == 14:
                        echo "İYİ GÜNLER. Şuan Saat 14:00";

                        break;
                    case $Saat == 15:
                        echo "İYİ GÜNLER. Şuan Saat 15:00";

                        break;
                    case $Saat == 16:
                        echo "İYİ GÜNLER. Şuan Saat 16:00";

                        break;
                    case $Saat == 17:
                        echo "İYİ GÜNLER. Şuan Saat 17:00";

                        break;
                    default:
                        echo "Bilinmeyen Bir Hata Oluştu.";

                }
                break;
            case ($Saat > 17) and ($Saat <= 23):

                        switch ($Saat) {
                    case $Saat == 18:
                        echo "İyi Akşamlar. Şuan Saat 18:00";
                        break;
                    case $Saat == 19:
                        echo "İyi Akşamlar. Şuan Saat 19:00";

                        break;
                    case $Saat == 20:
                        echo "İyi Akşamlar. Şuan Saat 20:00";

                        break;
                    case $Saat == 21:
                        echo "İyi Akşamlar. Şuan Saat 21:00";

                        break;
                    case $Saat == 22:
                        echo "İyi Akşamlar. Şuan Saat 22:00";

                        break;
                    case $Saat == 23:
                        echo "İyi Akşamlar. Şuan Saat 23:00";

                        break;
                    default:
                        echo "Bilinmeyen Bir Hata Oluştu.";

                }
                break;
            default:
                echo "Girilen değer ({$Saat} ) bir saat dilimi değildir.";

        }



        ?>
</body>
</html>