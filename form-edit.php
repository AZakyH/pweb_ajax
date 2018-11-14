<?php
include 'koneksi.php';
$id         = $_GET['id'];
$siswa_baru  = mysqli_query($koneksi, "select * from siswa_baru where id='$id'");
$row        = mysqli_fetch_array($siswa_baru);
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
        <title>Form Pengubahan Prestasi Siswa</title>
        <link rel="stylesheet" type="text/css" href="presis.css">
    </head>
    <div class="header"><h2>Form Pengubahan Prestasi Siswa</h2></div>
    <body>
        <form method="post" action="update.php">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id">
            <table>
                <tr><td>Nama</td><td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td></tr>
                <tr><td>Jenis Kelamin</td><td>
                        <input type="radio" name="gender" value="P" <?php echo active_radio_button("P", $row['gender'])?>>Perempuan
                        <input type="radio" name="gender" value="L" <?php echo active_radio_button("L", $row['gender'])?>>Laki-Laki
                    </td></tr>
                    <tr><td>Tempat, Tanggal Lahir</td><td><input type="text" value="<?php echo $row['ttl'];?>" name="ttl"></td></tr>
                    <tr><td>Alamat</td><td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td></tr>
                <tr><td>Sekolah Asal</td><td><input type="text" value="<?php echo $row['schasal'];?>" name="schasal"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
    <div class="footer">
        <b>Anak gembira, Anak berprestasi, Sekolah bergengsi<br>
        SMA JAYA SELAMANYA</b>
    </div>
</html>