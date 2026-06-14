<?php

include 'ambil_data.php';

$data = [];

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nasabah - Bank Negara Indonesia 46</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .table-nasabah { width: 100%; border-collapse: collapse; margin-top: 15px; background-color: #fff; }
        .table-nasabah th, .table-nasabah td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        .table-nasabah th { background-color: #005E6A; color: white; font-weight: bold; }
        .table-nasabah tr:nth-child(even) { background-color: #f9f9f9; }
        .table-nasabah tr:hover { background-color: #f1f1f1; }
        .no-data { text-align: center; font-style: italic; color: #777; padding: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <img class="logo" src="img/logobni.png" alt="">
        <div class="header-title">
            <h1>Menu Administrasi</h1>
            <p>Daftar Seluruh Nasabah BBNI</p>
        </div>
    </div>

    <div class="container">
        <div class="left-section">
            <div class="menu-section">
                <h2>MENU</h2>
                <div class="menu-buttons">
                    <button class="menu-btn" onclick="showDefault()">Home</button>
                    <button class="menu-btn" onclick="showBerita()">Berita</button>
                    <button class="menu-btn" onclick="showProduk()">Produk kami</button>
                    <button class="menu-btn" onclick="window.location.href='datanasabah.php'" >Data Nasabah</button>
                    <button class="menu-btn" onclick="window.location.href='datasimpanan.php'" >Data Simpanan</button>
                    <button class="menu-btn" onclick="window.location.href='tambahnasabah.php'" >Tambah Nasabah</button>
                    <button class="menu-btn" onclick="window.location.href='tambahsimpanan.php'" >Tambah Nasabah</button>
                    <button class="menu-btn" onclick="window.location.href='ebanking.html'">E-Banking</button>
                </div>
            </div>

            <div class="kalkulator-section">
                <h2>KALKULATOR</h2>
                <div class="kalkulator-label">Hitung Kurs Rupiah → Dolar</div>
                <div class="menu-buttons">
                    <button class="menu-btn" onclick="window.location.href='hkurs.html'">Hitung Kurs</button>
                </div>
            </div>
        </div>

        <div class="main-content">
            <h2>DAFTAR NASABAH</h2>
            <hr><br>
            
            <table class="table-nasabah">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Nasabah</th>
                        <th>Nomor Rekening</th>
                        <th>Nama Nasabah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($data) > 0): ?>

                        <?php $no = 1; ?>

                        <?php foreach($data as $nasabah): ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $nasabah['idnasabah'] ?></td>
                                <td><?= $nasabah['norek'] ?></td>
                                <td><?= $nasabah['nmnasabah'] ?></td>
                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                    <tr>
                        <td colspan="4" class="no-data">
                            Belum ada data nasabah di database.
                        </td>
                    </tr>

                    <?php endif; ?>

                    </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <div class="footer-section">
            <h3>Kantor Pusat</h3>
            <p>Gedung Grha BNI<br>Jl. Jenderal Sudirman Kav. 1<br>Jakarta Pusat 10220<br>Indonesia.</p>
        </div>
    </div>
</body>
</html>