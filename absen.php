<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inc/css/nav.css">
    <link rel="stylesheet" href="css/absen.css">
    <link rel="stylesheet" href="inc/css/footer.css">
</head>
<body>
    <?php include 'inc/nav.php'; ?>
    <main>
        <div class="container">
            <div class="card-img">
                <img src="img/absen.png" alt="Form Absen">
            </div>
            <h1>Form Absen</h1>
            <form action="tambah/tambah_absen.php" method="post">
                <div class="card">
                    <label for="nama_remaja">Nama Lengkap</label>
                    <input type="text" id="nama_remaja" name="nama_remaja" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="card">
                    <label for="kelompok">Kelompok</label>
                    <select id="kelompok_remaja" name="kelompok_remaja" required>
                        <option>-----</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="card">
                    <label for="kategori">Kategori Usia</label>
                    <select id="kategori_remaja" name="kategori_remaja" required>
                        <option>-----</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="PGM">PGM</option>
                    </select>
                </div>
                <div class="card">
                    <label for="email_remaja">Email</label>
                    <input type="email" id="email_remaja" name="email_remaja" placeholder="contoh@gmail.com" required>
                </div>
                <div class="card">
                    <label for="keterangan_absen">Keterangan</label>
                    <select id="keterangan_absen" name="keterangan_absen" required>
                        <option>-----</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Alfa">Alfa</option>
                    </select>
                </div>
                <div class="card">
                    <label for="waktu_absen">Tanggal</label>
                    <input type="date" name="waktu_absen" required>
                </div>
                <div class="card-btn">
                    <button class="cancel" type="reset">Cancel</button>
                    <button class="submit" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </main>
    <?php include 'inc/footer.php'; ?>
</body>
</html>