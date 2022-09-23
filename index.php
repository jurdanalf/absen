<?php
    include 'inc/conn.php';

    $query = "SELECT * FROM tbl_remaja ORDER BY nama_remaja ASC";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCA | Home</title>
    <link rel="stylesheet" href="inc/css/nav.css">
    <link rel="stylesheet" href="inc/css/footer.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include 'inc/nav.php'; ?>
    <main>
        <div class="container">
            <div id="pgm">
                <h4>REMAJA USIA PGM</h4>
                <div id="card-pgm">
                    <?php foreach($result as $row) : ?>
                    <div class="card-pgm">
                        <div class="gambar">
                            <img src="img/<?= $row['foto_remaja'] ?>" alt="<?= $row['nama_remaja'] ?>">
                        </div>
                        <div class="detail-pgm">
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
                                    <td><p>No. Telp</p></td>
                                    <td><p><?= $row['notelp_remaja'] ?></p></td>
                                </tr>
                                <tr>
                                    <td><p>Email</p></td>
                                    <td><p><?= $row['email_remaja'] ?></p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
    <?php include 'inc/footer.php'; ?>
</body>
</html>