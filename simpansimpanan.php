<?php

include 'koneksi.php';

// Ambil data dari form
$idnasabah   = $_POST['idnasabah'];
$tglsimpan   = $_POST['tglsimpan'];
$jmlsimpanan = $_POST['jmlsimpanan'];

// Query simpan
$query = "INSERT INTO simpanan (idnasabah, tglsimpan, jmlsimpanan)
VALUES ('$idnasabah', '$tglsimpan', '$jmlsimpanan')";

// Eksekusi
$simpan = mysqli_query($db, $query);

// Validasi
if($simpan){
    echo "
    <script>
        alert('Data Simpanan berhasil disimpan!');
        window.location.href='datasimpanan.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Gagal menyimpan data');
        window.history.back();
    </script>
    ";
}

mysqli_close($db);

?>