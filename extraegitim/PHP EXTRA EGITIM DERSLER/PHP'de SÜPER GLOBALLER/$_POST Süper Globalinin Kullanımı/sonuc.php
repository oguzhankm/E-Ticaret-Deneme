
<?php
        /*
        $_POST İstek gönderim tag’ları (etiketleri) aracılığı ile gelen verilere ulaşılabilme imkanı tanır. Genellikle kapalı yöntemle gelen istekler ve form işleme işlemleri için
        kullanılmaktadır.
        */

        $Isim = $_POST["isim"];
        $Soyisim = $_POST["soyisim"];

        echo $Isim . " " . $Soyisim;

?>

