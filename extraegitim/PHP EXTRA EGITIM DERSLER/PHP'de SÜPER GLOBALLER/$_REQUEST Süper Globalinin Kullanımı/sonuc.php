
<?php
        /*
        $_REQUEST
        URL (Uniform Resource Locator) (nizami kaynak bulucu) üzerinden veya istek gönderim tag’ları (etiketleri) aracılığı ile gelen verilere ulaşılabilme imkanı tanır.
        Genellikle URL (Uniform Resource Locator) (nizami kaynak bulucu) üzerinden gelen istekler, kapalı yöntemle gelen istekler ve form işleme işlemleri için
        kullanılmaktadır.
        */

        $GelenIsim    = $_REQUEST["KullaniciAdi"];
        $GelenSoyisim = $_REQUEST["KullaniciSoyad"];

        echo $GelenIsim . " " . $GelenSoyisim;
?>

