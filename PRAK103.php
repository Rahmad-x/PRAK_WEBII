<!DOCTYPE html>
<html>
    <body>
        <?php
        $celcius = 37.841 ;
        
        function fahrenheit ($celcius){
        $fahrenheit = (9/5 * $celcius);
            echo sprintf("Fahrenheit (F) = %.4f\n", $fahrenheit);
        
        }
        
        function reamur ($celcius){
        $reamur = 4/5 * $celcius;
            echo sprintf(" Reamur (R) = %.4f \n", $reamur);
        
        }
        
        function kelvin ($celcius){
        $kelvin = $celcius + 273;
            echo sprintf("Kelvin (K) = %.4f", $kelvin);
        }

        fahrenheit($celcius);
        reamur($celcius);
        kelvin($celcius);
        ?>
    </body>
</html> 