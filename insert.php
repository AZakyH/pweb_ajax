<?php
include 'koneksi.php';
// menyimpan data kedalam variabel

$nama           = $_POST['nama'];
$gender         = $_POST['gender'];
$ttl        	= $_POST['ttl'];
$alamat			= $_POST['alamat'];
$schasal 		= $_POST['schasal'];

// query SQL untuk insert data

$sql = "INSERT INTO siswa_baru (nama, gender, ttl, alamat, schasal)
VALUES ('$nama', '$gender', '$ttl', '$alamat', '$schasal')";

if ($koneksi->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
// mengalihkan ke halaman index.php
//header("location:index.php");
?>
<!-- It works Alhamdulillah -->