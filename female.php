<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR SISWA</title>
	<link rel="stylesheet" type="text/css" href="presis.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<div class="header"><h2>List Siswa Perempuan</h2></div>

	<table border="1">
		<tr><th>NAMA</th><th>JENIS KELAMIN</th><th>TEMPAT, TANGGAL LAHIR</th><th>ALAMAT</th><th>SEKOLAH ASAL</th><th>ACTION</th></tr>
		<?php
		include 'koneksi.php';
		$siswa_baru = mysqli_query($koneksi, "SELECT * from siswa_baru WHERE gender = 'P' order by nama");
		$id = 1;
		foreach ($siswa_baru as $row)
		{
			$gender = $row['gender'] == 'L' ? 'Laki-Laki' : 'Perempuan';
			echo "<tr>
			<td>" . $row['nama'] . "</td>
			<td>" . $row['gender'] . "</td>
			<td>" . $row['ttl'] . "</td>
			<td>" . $row['alamat'] ."</td>
			<td>" . $row['schasal'] ."</td>
			<td>
				<a href='form-edit.php?id=$row[id]'>Ubah</a>
				<a href='delete.php?id=$row[id]'>Hapus</a>
			</td>
				</tr>";
		}
		?>
	</table>

	<div class="footer">
		<b>Anak gembira, Anak berprestasi, Sekolah bergengsi<br>
		SMA JAYA SELAMANYA</b>
	</div>
</body>
</html>