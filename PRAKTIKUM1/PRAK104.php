<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum 104</title>
        <style>
                table{
                    border-collapse: collapse;
                    border: 1px solid black;
                    font-family: serif;
                }
                th, td{
                    border: 1px solid black;
                    padding: 5px 10px;
                    text-align: left;
                }
                .outer-border{
                    border: 3px double black;
                    display: inline-block;
                    padding: 2px;
                }
                th{
                    font-weight: bold;
                    font-size: 1.1em;
                }
        </style>
    </head>
    <body>

    <div class="outer-border">
        <table>
        <thead>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
        </thead>
        <tbody>

            <?php
        $listSamsung = [
            "Samsung Galaxy S22",
            "Samsung Galaxy S22+",
            "Samsung Galaxy A03",
            "Samsung Galaxy Xcover 5"];
            
            foreach ($listSamsung as $hp){
                echo "<tr><td>$hp</td></tr>";
                }
                ?>
        </tbody>    
        </table>
    </div>
    </body>
</html> 