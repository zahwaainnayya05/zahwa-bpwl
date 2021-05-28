<?php
include "koneksi.php";
$id = $_GET['id'];

if (!empty($id)) {
    mysqli_query($con, "DELETE FROM 31_1TIE_COVID WHERE id_2055301154='$id'");
    header('location:tampil_data.php');
} else  
{
    header('location:tampil_data.php');
}