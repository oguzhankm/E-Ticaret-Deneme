        <?php

        session_start();


        if (isset($_SESSION["Kullanici"])){
            echo "Kullanıcı Giriş Yapılmış 2. Sayfa";

        }else{
            header("Location: index.php");
            exit();

        }


        ?>