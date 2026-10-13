<?php
function statuskelulusan(float $ipk): string {
    if ($ipk >= 3.50) return 'Sangat Memuaskan';
    if ($ipk >= 3.00) return 'Memuaskan';
    return 'Perlupeningkatan';
}

$mahasiswa = [
    'nim' => '2524210049',
    'nama' => 'Khairul Anwar',
    'prodi' => 'Teknik Informatika',
    'smester' => 5,
    'ipk' => 3.75,
];
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Biodata Mahasiswa</title>
</head>

<body>
    <h1>Biodata Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $kunci => $nilai): ?>
            <li><?=  ucfirst($kunci) ?>: <?= htmlspecialchars((string)$nilai) ?></li>
        <?php endforeach; ?>
    </ul>
    <p>Predikat: <?= statuskelulusan($mahasiswa['ipk']) ?></p>
</body>

</html>
