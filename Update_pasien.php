<?php
include "koneksi.php";
$id = $_POST['id_2055301154'];
$nama_pasien = $_POST['nama_pasien_2055301154'];
$alamat_pasien = $_POST['alamat_2055301154'];
$riwayat_p = $_POST['riwayat_perjalanan_2055301154'];
$hasil = $_POST['hasil_swab_2055301154'];
$tanggal = $_POST['tanggal_swab'];
$suhu = $_POST['suhu_2055301154'];


if(!empty($id) && !empty($nama_pasien) && !empty($alamat_pasien) &&
!empty($riwayat_p) && !empty($hasil) && !empty($tanggal)&& !empty($suhu)){
    mysqli_query($con, "UPDATE 31_1TIE_COVID SET id_2055301154='$id', 
    nama_pasien_2055301154='$nama_pasien', riwayat_perjalanan_2055301154='$riwayat_p', 
    hasil_swab_2055301154='$hasil',tanggal_swab='$tanggal',suhu_2055301154='$suhu' 
    WHERE id_2055301154='$id' ");

    header('location:tampil_data.php');
} else
{
    header('location:tampil_data.php');
}
