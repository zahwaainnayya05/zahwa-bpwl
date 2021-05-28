<?php
include "koneksi.php";
$nama_pasien = $_POST['nama_pasien_2055301154'];
$alamat_pasien = $_POST['alamat_2055301154'];
$riwayat_p = $_POST['riwayat_perjalanan_2055301154'];
$hasil = $_POST['hasil_swab_2055301154'];
$tanggal = $_POST['tanggal_swab'];
$suhu = $_POST['suhu_2055301154'];


if(!empty($nama_pasien) && !empty($alamat_pasien) &&
!empty($riwayat_p) && !empty($hasil)&& !empty($tanggal)&& !empty($suhu) )
{
    mysqli_query($con, "INSERT INTO 31_1TIE_COVID (nama_pasien_2055301154, alamat_2055301154, 
    riwayat_perjalanan_2055301154,hasil_swab_2055301154, tanggal_swab,suhu_2055301154)
    VALUES ('$nama_pasien','$alamat_pasien','$riwayat_p','$hasil','$tanggal', '$suhu')");
    header('location:tampil_data.php');
} else 
{
    header('location:Insert_data_pasien.php');
}
?>
