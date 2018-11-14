<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id 			= $_POST['id'];
$nama           = $_POST['nama'];
$gender         = $_POST['gender'];
$ttl        	= $_POST['ttl'];
$alamat			= $_POST['alamat'];
$schasal 		= $_POST['schasal'];
// query SQL untuk insert data
$query="UPDATE siswa_baru SET nama='$nama', gender='$gender', ttl='$ttl', alamat='$alamat', schasal='$schasal' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>