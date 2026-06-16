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
                    font-size: 24px;
                    padding: 20px 10px;
                    color: black;
                    background-color: red;
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
            "flagship_1" =>"Samsung Galaxy S22",
            "flagship_2" =>"Samsung Galaxy S22+",
            "budget_1" =>"Samsung Galaxy A03",
            "rugged_1" =>"Samsung Galaxy Xcover 5"];
            
            foreach ($listSamsung as $key => $hp){
                echo "<tr><td>$hp</td></tr>";
                }
                ?>
        </tbody>    
        </table>
    </div>
    </body>
</html> 