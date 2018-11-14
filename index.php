<?php
include 'koneksi.php';
// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR SISWA</title>
	<link rel="stylesheet" type="text/css" href="presis.css">
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<div class="header"><h2>Informasi Siswa</h2></div>
	<h3 style="text-align: center">Form Penambahan Siswa</h3>
	 <table>
	                <tr><td>Nama</td><td><input type="text" value="Paijo" id="nama"></td></tr>
	                 <tr><td>Jenis Kelamin</td><td>
	                        <input type="radio" class="gender" name="gender" value="P" >Perempuan
	                        <input type="radio" class="gender" name="gender" value="L" >Laki-Laki
	                </td></tr>
	                <tr><td>Tempat, Tanggal Lahir</td><td><input type="text" value="Paris, 14 Februari 1999" id="ttl"></td></tr>
	                <tr><td>Alamat</td><td><input type="text" value="Jl. Edelweiss no. 8, Sidoarjo, Jawa Timur, Indonesia" id="alamat"></td></tr>
	                <tr><td>Sekolah Asal</td><td><input type="text" value="SMP Schememe 1 Surabaya" id="schasal"></td></tr>
	                <tr><td colspan="2"><button id="insertdong"> Tambah Siswa </button></td></tr>
	            </table>
				<script type="text/javascript" src="skrip.js"></script>
				<br>
        Tampilkan siswa
    <select>
        <option onclick="tampil()">Semua</option>
        <option onclick="male()">Laki-laki</option>
        <option onclick="female()">Perempuan</option>
    </select>
         <div id="coba">
 
	<div class="footer">
		<b>Anak gembira, Anak berprestasi, Sekolah bergengsi<br>
		SMA JAYA SELAMANYA</b>
	</div>
</body>
</html>