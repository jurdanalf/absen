<?php 
	include '../inc/conn.php';
    $id_remaja = $_GET['id_remaja'];
    $query = "SELECT * FROM tbl_remaja WHERE id_remaja = '$id_remaja'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMCA | Edit User</title>
	<link rel="stylesheet" type="text/css" href="../css/remaja.css">
</head>
<body>
	<div class="container-crud">
		<form action="proses_ubah.php?id_remaja=<?= $row['id_remaja']; ?>" method="post">
			<div class="judul">
				<h2>Ubah Data Remaja</h2>
				<a href="../remaja.php">Kembali</a>
			</div>
			<table>
				<tr>
					<td><label for="nama_remaja">Nama</label></td>
					<td><input type="text" id="nama_remaja" name="nama_remaja" placeholder="Nama...." value="<?= $row['nama_remaja']; ?>"></td>
				</tr>
				<tr>
					<td><label for="tanggal_lahir_remaja">Tanggal Lahir</label></td>
					<td><input type="date" id="tanggal_lahir_remaja" name="tanggal_lahir_remaja" placeholder="Tanggal Lahir...." value="<?= $row['tanggal_lahir_remaja']; ?>"></td>
				</tr>
				<tr>
					<td><label for="notelp_remaja">No. Telepon</label></td>
					<td><input type="number" id="notelp_remaja" name="notelp_remaja" placeholder="No. Telepon...." value="<?= $row['notelp_remaja']; ?>"></td>
				</tr>
				<tr>
					<td><label for="email_remaja">Email</label></td>
					<td><input type="email" id="email_remaja" name="email_remaja" placeholder="Email...." value="<?= $row['email_remaja']; ?>"></td>
				</tr>
				<tr>
					<td><label for="kelompok_remaja">Kelompok</label></td>
					<td>
						<select id="kelompok_remaja" name="kelompok_remaja">
                            <option selected="<?= $row['kelompok_remaja'] ?>"><?= $row['kelompok_remaja'] ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="kategori_remaja">Kategori</label></td>
					<td>
						<select id="kategori_remaja" name="kategori_remaja">
							<option selected="<?= $row['kategori_remaja']; ?>"><?= $row['kategori_remaja'] ?></option>
							<option value="SMP">SMP</option>
							<option value="SMA/SMK">SMA/SMK</option>
							<option value="PGM">PGM</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="foto_remaja">Foto</label></td>
					<td><input type="file" id="foto_remaja" name="foto_remaja"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="submit">Submit</button>
						<button type="reset">Cancel</button>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>