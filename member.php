<?php
    include 'inc/conn.php';
    $query = "SELECT * FROM tbl_remaja ORDER BY nama_remaja ASC";
    $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MCA | Member</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="inc/css/nav.css" rel="stylesheet">
    <link href="inc/css/footer.css" rel="stylesheet">
    <link href="css/member.css" rel="stylesheet">
</head>
<body>
    <?php include 'inc/nav.php'; ?>
    <main>
        <div id="remaja">
            <h4>REMAJA MASJID AL-FATAH</h4>
            <div id="card-remaja">
                <?php foreach($result as $row) : ?>
                <div class="card-remaja">
                    <div class="gambar">
                        <img src="img/<?= $row['foto_remaja'] ?>" alt="<?= $row['nama_remaja'] ?>">
                    </div>
                    <div class="detail-remaja">
                        <h6><?= $row['nama_remaja'] ?></h6>
                        <table>
                            <tr>
                                <td><p>Kelompok</p></td>
                                <td><p><?= $row['kelompok_remaja'] ?></p></td>
                            </tr>
                            <tr>
                                <td><p>Tgl Lahir</p></td>
                                <td><p><?= $row['tanggal_lahir_remaja'] ?></p></td>
                            </tr>
                            <tr>
                                <td><p>Kategori Usia</p></td>
                                <td><p><?= $row['kategori_remaja'] ?></p></td>
                            </tr>
                            <tr>
                                <td><p>No. Telepon</p></td>
                                <td><p><?= $row['notelp_remaja'] ?></p></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <?php include 'inc/footer.php'; ?>
</body>
</html>