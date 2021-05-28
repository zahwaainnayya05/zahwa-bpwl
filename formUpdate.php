<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" >
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<title>UPDATE PASIEN</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <?php include "koneksi.php";
    $id = $_GET['id'];
    $resti = mysqli_query($con, "SELECT * FROM 31_1TIE_COVID WHERE id_2055301154 = '$id'");
    $m = mysqli_fetch_array($resti);
  ?>
  <a href="tampil_data.php">Update Pasien</a>
  <form method="post" action="Update_pasien.php">
    <input type="hidden" value="<?php print $m[0];?>" name="2055301118_id" />
    <table width="600" border="0" class="table" cellspacing="0" cellpadding="0">
      <tr class="table-danger">
        <td>Nama Pasien</td>
        <td>:</td>
        <td><input type="text" name="nama_pasien_2055301154" value="<?php print $m[1]; ?>" width="100%" required/></td>
      </tr>
      <tr class="table-danger">
        <td>Alamat Pasien</td>
        <td>:</td>
        <td><input type="text" name="alamat_2055301154" value="<?php print $m[2]; ?>" width="100%" required/></td>
      </tr>
      <tr class="table-danger">
        <td>Riwayat Perjalanan</td>
        <td>:</td>
        <td> <input type="text" name="riwayat_perjalanan_2055301154" value="<?php print $m[3];?>"width="100%" required/></td>
      </tr>
      <tr class="table-danger">
        <td>Hasil Swab</td>
        <td>:</td>
        <td> <input type="text" name="hasil_swab_2055301154" value="<?php print $m[4];?>" width="100%" required/></td>
      </tr>
      <tr class="table-danger">
        <td>Tanggal Swab</td>
        <td>:</td>
        <td> <input type="text" name="tanggal_swab" value="<?php print $m[5];?>" width="100%" required/></td>
      </tr>
      <tr class="table-danger">
        <td>Suhu</td>
        <td>:</td>
        <td> <input type="text" name="suhu_2055301154" value="<?php print $m[6];?>" width="100%" required/></td>
      </tr>
      <tr>
        <td><br><input type="submit" class="btn btn-success" name="submit" value="Simpan" /> </td>
      </tr>
  </form>
  </table>
</body>
</html>