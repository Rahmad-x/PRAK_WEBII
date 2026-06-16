<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PRAK403</title>
    <style>
        table { border-collapse: collapse; width: 80%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #e0e0e0; }
        .revisi { background-color: #ffcccc; } /* Warna merah muda untuk Revisi */
        .aman { background-color: #ccffcc; }   /* Warna hijau muda untuk Tidak Revisi */
    </style>
</head>
<body>
    <?php
    $mahasiswa = [
        [
            "no" => 1, 
            "nama" => "Ridho", 
            "mk" => [
                ["nama_mk" => "Pemrograman I", "sks" => 2],
                ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
                ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
                ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
            ]
        ],
        [
            "no" => 2, 
            "nama" => "Ratna", 
            "mk" => [
                ["nama_mk" => "Basis Data I", "sks" => 2],
                ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
                ["nama_mk" => "Kalkulus", "sks" => 3]
            ]
        ],
        [
            "no" => 3, 
            "nama" => "Tono", 
            "mk" => [
                ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
                ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
                ["nama_mk" => "Komputasi Awan", "sks" => 3],
                ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
            ]
        ]
    ];

    // Menggunakan index ($key) untuk mencegah bug referensi
    foreach ($mahasiswa as $key => $mhs) {
        $total_sks = 0;
        foreach ($mhs["mk"] as $mk) {
            $total_sks += $mk["sks"];
        }
        $mahasiswa[$key]["total_sks"] = $total_sks;
        
        // Logika penentuan keterangan KRS
        if ($total_sks < 7) {
            $mahasiswa[$key]["keterangan"] = "Revisi KRS";
        } else {
            $mahasiswa[$key]["keterangan"] = "Tidak Revisi";
        }
    }
    ?>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        
        <?php foreach ($mahasiswa as $mhs) : ?>
            <?php 
                // Menentukan class warna berdasarkan keterangan
                $bg_color = ($mhs["keterangan"] == "Revisi KRS") ? "revisi" : "aman";
                
                // Looping langsung mata kuliahnya
                foreach ($mhs["mk"] as $index => $mk) : 
            ?>
                <tr>
                    <?php if ($index == 0) : // Jika ini baris pertama mata kuliah dari mahasiswa ?>
                        <td><?= $mhs["no"] ?></td>
                        <td><?= $mhs["nama"] ?></td>
                        <td><?= $mk["nama_mk"] ?></td>
                        <td><?= $mk["sks"] ?></td>
                        <td><?= $mhs["total_sks"] ?></td>
                        <td class="<?= $bg_color ?>"><?= $mhs["keterangan"] ?></td>
                    <?php else : // Jika ini baris kedua, ketiga, dst dari mahasiswa yang sama ?>
                        <td></td>
                        <td></td>
                        <td><?= $mk["nama_mk"] ?></td>
                        <td><?= $mk["sks"] ?></td>
                        <td></td>
                        <td></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>