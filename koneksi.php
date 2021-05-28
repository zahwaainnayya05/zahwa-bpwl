<?php
// Pastikan menggunakan instruksi untuk mengkoneksikan ke database
$con = mysqli_connect("localhost","root","","covid_1tie_31");
// Mengecek apakah koneksi gagal?
 if (mysqli_connect_errno($con))
{
echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
}

    ?>