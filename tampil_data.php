<htmlx mlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tampil Pasien</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php include "koneksi.php"; ?>
<p><a href="insert_pasien.php">Tambah Data Pasien</a></p>
<table width="600" class="table"  border="1" cellspacing="0" cellpadding="0">
    <tr>
            
            <th class="alert alert-success">Id</th>
            <th class="alert alert-success">Nama</th>
            <th class="alert alert-success">Alamat</th>
            <th class="alert alert-success">Riwayat Perjalanan</th>
            <th class="alert alert-success">Hasil Swab</th>
            <th class="alert alert-success">Tanggal Swab</th>
            <th class="alert alert-success">Suhu</th>
            <th class="alert alert-success">Aksi</th>
        </tr>
        </div>
        <?php
        $query = mysqli_query($con, "Select * from 31_1TIE_COVID");
        while ($row = mysqli_fetch_array($query)) {
            ?>
        <tr>
            <td align="Center"><?php echo $row['id_2055301154']; ?></td>
            <td align="Center"><?php echo $row['nama_pasien_2055301154']; ?></td>
            <td align="Center"><?php echo $row['alamat_2055301154']; ?></td>
            <td align="Center"><?php echo $row['riwayat_perjalanan_2055301154']; ?></td>
            <td align="Center"><?php echo $row['hasil_swab_2055301154']; ?></td>
            <td align="Center"><?php echo $row['tanggal_swab']; ?></td>
            <td align="Center"><?php echo $row['suhu_2055301154']; ?></td>
            <td>
            <a href="Hapus_pasien.php?id=<?= $row['id_2055301154']; ?>">Hapus</a>
            <a href="formUpdate.php?id=<?= $row['id_2055301154']; ?>">Update</a>
            </td>
        </tr>
        <?php 
    }
    ?>
    </table>
    </body>
    </html>