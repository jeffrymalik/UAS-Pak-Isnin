<?php

include 'ambil_data_simpanan.php';

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
    <title>Data Simpanan - Bank Negara Indonesia 46</title>
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
            <p>Daftar Seluruh Simpanan Nasabah BBNI</p>
        </div>
    </div>

    <div class="container">
        <div class="left-section">
            <div class="menu-section">
                <h2>MENU</h2>
                <div class="menu-buttons">
                    <button class="menu-btn" onclick="window.location.href='index.html'">Home</button>
                    <button class="menu-btn" onclick="window.location.href='index.html'">Berita</button>
                    <button class="menu-btn" onclick="window.location.href='index.html'">Produk kami</button>
                    <button class="menu-btn" onclick="window.location.href='datanasabah.php'" >Data Nasabah</button>
                    <button class="menu-btn" onclick="window.location.href='datasimpanan.php'" >Data Simpanan</button>
                    <button class="menu-btn" onclick="window.location.href='tambahnasabah.php'" >Tambah Nasabah</button>
                    <button class="menu-btn" onclick="window.location.href='tambahsimpanan.php'" >Tambah Simpanan</button>
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
            <h2>DAFTAR SIMPANAN</h2>
            <hr><br>
            
            <table class="table-nasabah">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Simpanan</th>
                        <th>ID Nasabah</th>
                        <th>Nama Nasabah</th>
                        <th>No. Rekening</th>
                        <th>Tgl Simpan</th>
                        <th>Jumlah Simpanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($data) > 0): ?>

                        <?php $no = 1; ?>

                        <?php foreach($data as $simpanan): ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $simpanan['idsimpanan'] ?></td>
                                <td><?= $simpanan['idnasabah'] ?></td>
                                <td><?= $simpanan['nmnasabah'] ?></td>
                                <td><?= $simpanan['norek'] ?></td>
                                <td><?= $simpanan['tglsimpan'] ?></td>
                                <td>Rp <?= number_format($simpanan['jmlsimpanan'], 0, ',', '.') ?></td>
                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                    <tr>
                        <td colspan="7" class="no-data">
                            Belum ada data simpanan di database.
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
