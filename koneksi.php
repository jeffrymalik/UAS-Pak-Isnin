<?php
$hostname = "localhost";
$username = "root";
$password = "";

$database_name = "BBNI";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error)
{
	echo "Koneksi ke database GAGAL";
	die("error !");
}	
?>