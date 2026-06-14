<?php

include 'koneksi.php';

$query_nasabah = "SELECT idnasabah, nmnasabah, norek FROM nasabah ORDER BY nmnasabah ASC";
$result_nasabah = mysqli_query($db, $query_nasabah);

$nasabah_list = [];
while ($row = mysqli_fetch_assoc($result_nasabah)) {
    $nasabah_list[] = $row;
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Simpanan - Bank Negara Indonesia 46</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input, .form-group select { width: 100%; padding: 8px; border: 1px solid #ddd; box-sizing: border-box; }
        .btn-simpan { background-color: #005E6A; color: white; padding: 10px 20px; border: none; cursor: pointer; }
        .btn-batal { background-color: #aaa; color: white; padding: 10px 20px; border: none; cursor: pointer; margin-left: 8px; }
        .alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 10px; margin-bottom: 15px; }
        .alert-error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 10px; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="header">
        <img class="logo" src="img/logobni.png" alt="">
        <div class="header-title">
            <h1>Menu Administrasi</h1>
            <p>Tambah Data Simpanan Nasabah BBNI</p>
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
            <h2>TAMBAH DATA SIMPANAN</h2>
            <hr><br>

            <?php if(isset($_GET['status'])): ?>
                <?php if($_GET['status'] === 'berhasil'): ?>
                    <div class="alert-success">Data simpanan berhasil ditambahkan!</div>
                <?php elseif($_GET['status'] === 'gagal'): ?>
                    <div class="alert-error">Gagal menambahkan data. Silakan coba lagi.</div>
                <?php endif; ?>
            <?php endif; ?>

            <form action="simpansimpanan.php" method="POST">

                <div class="form-group">
                    <label for="idnasabah">Nasabah</label>
                    <select name="idnasabah" id="idnasabah" required>
                        <option value="">-- Pilih Nasabah --</option>
                        <?php foreach($nasabah_list as $n): ?>
                            <option value="<?= $n['idnasabah'] ?>">
                                <?= $n['nmnasabah'] ?> (<?= $n['norek'] ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tglsimpan">Tanggal Simpan</label>
                    <input type="date" name="tglsimpan" id="tglsimpan" value="<?= date('Y-m-d') ?>" required>
                </div>

                <div class="form-group">
                    <label for="jmlsimpanan">Jumlah Simpanan (Rp)</label>
                    <input type="number" name="jmlsimpanan" id="jmlsimpanan" min="0" step="1000" placeholder="Contoh: 500000" required>
                </div>

                <button type="submit" class="btn-simpan">Simpan</button>
                <button type="button" class="btn-batal" onclick="window.location.href='datasimpanan.php'">Batal</button>

            </form>
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
