<?php

include 'koneksi.php';

$query = "SELECT s.idsimpanan, s.idnasabah, n.nmnasabah, n.norek, s.tglsimpan, s.jmlsimpanan
          FROM simpanan s
          JOIN nasabah n ON s.idnasabah = n.idnasabah
          ORDER BY s.idsimpanan ASC";

$result = mysqli_query($db, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($db));
}

?>
