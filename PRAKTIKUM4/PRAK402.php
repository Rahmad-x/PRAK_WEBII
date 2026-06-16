<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK402</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <?php
    $mahasiswa = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono",   "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75]
    ];

  foreach ($mahasiswa as $key => $mhs) {
        $nilai_akhir = (0.4 * $mhs["uts"]) + (0.6 * $mhs["uas"]);
        
        $mahasiswa[$key]["akhir"] = $nilai_akhir;
        
        if ($nilai_akhir >= 80) {
            $mahasiswa[$key]["huruf"] = "A";
        } elseif ($nilai_akhir >= 70) {
            $mahasiswa[$key]["huruf"] = "B";
        } elseif ($nilai_akhir >= 60) {
            $mahasiswa[$key]["huruf"] = "C";
        } elseif ($nilai_akhir >= 50) {
            $mahasiswa[$key]["huruf"] = "D";
        } else {
            $mahasiswa[$key]["huruf"] = "E";
        }
    }
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $mhs["nama"] ?></td>
                <td><?= $mhs["nim"] ?></td>
                <td><?= $mhs["uts"] ?></td>
                <td><?= $mhs["uas"] ?></td>
                <td><?= $mhs["akhir"] ?></td>
                <td><?= $mhs["huruf"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>