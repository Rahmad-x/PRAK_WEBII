<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="string_input" required>
        <button type="submit" name="submit">submit</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $string_input = $_POST['string_input'];
        
        $panjang_string = strlen($string_input);

        echo "<b>Input:</b><br>";
        echo "$string_input<br><br>";
        echo "<b>Output:</b><br>";
        
        for ($i = 0; $i < $panjang_string; $i++) {
            
            $karakter = $string_input[$i]; 
            
            for ($j = 0; $j < $panjang_string; $j++) {
                if ($j == 0) {
                    echo strtoupper($karakter);
                } 
                else {
                    echo strtolower($karakter);
                }
            }
        }
    }
    ?>
</body>
</html>