<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 200px;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>

    <form method="POST" action="">
        Nama: 1 <input type="text" name="nama1"><br>
        Nama: 2 <input type="text" name="nama2"><br>
        Nama: 3 <input type="text" name="nama3"><br>
        <button type="submit" name="urutkan">Urutkan</button>
    </form>
    <br>

    <?php
    if (isset($_POST['urutkan'])) {
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $nama3 = $_POST['nama3'];

        if ($nama1 <= $nama2 && $nama1 <= $nama3) {
            if ($nama2 <= $nama3) {
                $hasil1 = $nama1; $hasil2 = $nama2; $hasil3 = $nama3;
            } else {
                $hasil1 = $nama1; $hasil2 = $nama3; $hasil3 = $nama2;
            }
        } elseif ($nama2 <= $nama1 && $nama2 <= $nama3) {
            if ($nama1 <= $nama3) {
                $hasil1 = $nama2; $hasil2 = $nama1; $hasil3 = $nama3;
            } else {
                $hasil1 = $nama2; $hasil2 = $nama3; $hasil3 = $nama1;
            }
        } else {
            if ($nama1 <= $nama2) {
                $hasil1 = $nama3; $hasil2 = $nama1; $hasil3 = $nama2;
            } else {
                $hasil1 = $nama3; $hasil2 = $nama2; $hasil3 = $nama1;
            }
        }

        echo "<table>";
        echo "<tr><th>Output</th></tr>";
        echo "<tr><td>$hasil1</td></tr>";
        echo "<tr><td>$hasil2</td></tr>";
        echo "<tr><td>$hasil3</td></tr>";
        echo "</table>";
    }
    ?>

</body>
</html>