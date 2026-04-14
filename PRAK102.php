<!DOCTYPE html>
<html>
    <body>
        <?php
        $jari_jari = 4.2 ;
        $phi = 3.4;

        function volumeBola ($jari_jari,$phi){
        $volume = 3/4 * ($jari_jari**3) * $phi;
            echo sprintf("%.3f m3",$volume);
        
        }

        volumeBola($jari_jari,$phi);
        ?>
    </body>
</html> 