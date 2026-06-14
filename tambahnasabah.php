<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nasabah - Bank Negara Indonesia 46</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container { max-width: 500px; background: #fff; padding: 20px; border-radius: 8px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #333; }
        .form-group input { width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; }
        .btn-submit { background-color: #005E6A; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; font-weight: bold; }
        .btn-submit:hover { background-color: #00444D; }
        .btn-back { background-color: #6c757d; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; font-size: 14px; margin-left: 10px; display: inline-block; }
        .btn-back:hover { background-color: #5a6268; }
    </style>
</head>
<body>
    <div class="header">
        <img class="logo" src="img/logobni.png" alt="">
        <div class="header-title">
            <h1>Menu Administrasi</h1>
            <p>Pendaftaran Nasabah Baru BBNI</p>
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
            <h2>TAMBAH NASABAH BARU</h2>
            <hr><br>
            
            <div class="form-container">
                <form action="simpan.php" method="POST">
                    <div class="form-group">
                        <label for="idnasabah">ID Nasabah</label>
                        <input type="text" id="idnasabah" name="idnasabah" placeholder="Contoh: NSB01" required>
                    </div>
                    <div class="form-group">
                        <label for="norek">Nomor Rekening</label>
                        <input type="text" id="norek" name="norek" placeholder="Masukkan Nomor Rekening" required>
                    </div>
                    <div class="form-group">
                        <label for="nmnasabah">Nama Nasabah</label>
                        <input type="text" id="nmnasabah" name="nmnasabah" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    
                    <button type="submit" class="btn-submit">Simpan ke Database</button>
                    <a href="index.html" class="btn-back">Batal</a>
                </form>
            </div>
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