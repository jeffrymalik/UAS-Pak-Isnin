<?php
include 'koneksi.php';

$query = "SELECT * FROM nasabah";
$result = mysqli_query($db, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($db));
}
?>