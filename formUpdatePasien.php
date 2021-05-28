<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Data Matakuliah</title>
</head>
<body>
<?php include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM 31_1TIE_COVID WHERE id_2055301154 = '$id'");
$m = mysqli_fetch_object($query);
?>
<a href="tampil_data.php">UPDATE PASIEN</a>
<form method="post" action="Update_pasien.php">
<input type="hidden" value="<?php print $m->ID;?>" name="id_2055301154" />
<table width="600" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>Nama Pasien </td>
<td>:</td>
<td><input type="text" name="nama_pasien_2055301154" value="<?php print $m->nama_pasien; ?>" width="100%" required/></td>
</tr>
<tr>
<td>Alamat Pasien</td>
<td>:</td>
<td><input type="text" name="alamat_2055301154" value="<?php print $m->alamat_pasien; ?>" width="100%" required/></td>
</tr>
<tr>
<td>Riwayat Perjalanan</td>
<td>:</td>
<td><input type="text" name="riwayat_perjalanan_2055301154" value="<?php print $m->riwayat_p; ?>" width="100%" required/></td>
</tr>
<tr>
<td>Hasil Swab</td>
<td>:</td>
<td><input type="text" name="hasil_swab_2055301154" value="<?php print $m->hasil; ?>" width="100%" required/></td>
</tr>
<tr>
<td>Tanggal Swab</td>
<td>:</td>
<td><input type="text" name="tanggal_swab" value="<?php print $m->tanggal; ?>" width="100%" required/></td>
</tr>
<td>Suhu</td>
<td>:</td>
<td><input type="text" name="suhu_2055301154" value="<?php print $m->suhu; ?>" width="100%" required/></td>
</tr>
<tr>
<td colspan="3"><input type="submit" value="Save" /></td>
</tr>
</form>
</table>
</body>
</html>