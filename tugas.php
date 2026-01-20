<?php
$mahasiswa = [
    ["nim" => "2023001", "nama" => "Andi", "nilai" => 85],
    ["nim" => "2023002", "nama" => "Budi", "nilai" => 72],
    ["nim" => "2023003", "nama" => "Citra", "nilai" => 90],
    ["nim" => "2023004", "nama" => "Dewi", "nilai" => 60],
];

// Hitung jumlah mahasiswa yang lulus
$jumlahLulus = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Mahasiswa</h2>
<table>
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $mhs): ?>
            <?php
            // Tentukan keterangan
            $keterangan = ($mhs["nilai"] >= 80) ? "Lulus" : "Tidak Lulus";
            // Hitung jumlah lulus
            if ($mhs["nilai"] >= 80) {
                $jumlahLulus++;
            }
            ?>
            <tr>
                <td><?= htmlspecialchars($mhs["nim"]) ?></td>
                <td><?= htmlspecialchars($mhs["nama"]) ?></td>
                <td><?= $mhs["nilai"] ?></td>
                <td><?= $keterangan ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<p><strong>Jumlah mahasiswa yang lulus: <?= $jumlahLulus ?></strong></p>

</body>
</html>