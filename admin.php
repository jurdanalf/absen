<?php
    include 'inc/conn.php';
    
    $query = "SELECT * FROM tbl_remaja ORDER BY kelompok_remaja ASC";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMCA | Admin</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <?php include 'inc/nav.php'; ?>
    <main>
        <h2>DAFTAR ABSEN PENGAJIAN MUDAMUDI</h2>
        <p>CANDRABAGA BEKASI BARAT</p>
        <div class="fitur">
            <div class="search">
                <input type="text" id="livesearch" placeholder="Search....">
            </div>
            <div class="tambah">
                <a href="tambah/tambah_remaja.php">Tambah</a>
            </div>
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelompok</th>
                <th>Kategori Usia</th>
                <th>Tanggal Lahir</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
            <?php foreach($result as $row) : ?>
            <tr>
                <td><?= $row['id_remaja']; ?></td>
                <td class="left"><?= $row['nama_remaja']; ?></td>
                <td><?= $row['kelompok_remaja']; ?></td>
                <td><?= $row['kategori_remaja']; ?></td>
                <td><?= $row['tanggal_lahir_remaja']; ?></td>
                <td><?= $row['notelp_remaja']; ?></td>
                <td><?= $row['email_remaja']; ?></td>
                <td>
                    <a href="ubah/ubah_remaja.php?id_remaja=<?= $row['id_remaja'];?>">Edit</a> | 
                    <a href="hapus.php?id_remaja=<?= $row['id_remaja']; ?>" onclick="return confirm('Apakah kamu yakin?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </main>
    <?php include 'inc/footer.php' ?>
</body>
</html>