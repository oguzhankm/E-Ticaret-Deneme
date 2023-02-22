        <?php

        $Tarayici   =  $_SERVER["HTTP_USER_AGENT"];
        $Referans   = $_SERVER["HTTP_REFERER"];

        if (!isset($Tarayici)){
            echo "Heyyo Sen bir botsun sanırım, Erişiminiz engellendi.";
        }else{
                echo "Merhaba Hoşgeldin";
        }

        if (!isset($Referans)){
                echo "Heyyo Sen bir botsun sanırım, Erişiminiz engellendi.";
        }else{
                echo "Merhaba Hoşgeldin";
        }



        ?>

