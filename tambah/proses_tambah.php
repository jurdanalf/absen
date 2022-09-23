<?php 
	include '../inc/conn.php';

	$nama_remaja = $_POST['nama_remaja'];
	$kelompok_remaja = $_POST['kelompok_remaja'];
	$kategori_remaja = $_POST['kategori_remaja'];
	$tanggal_lahir_remaja = $_POST['tanggal_lahir_remaja'];
	$notelp_remaja = $_POST['notelp_remaja'];
	$email_remaja = $_POST['email_remaja'];
	$foto_remaja = $_POST['foto_remaja'];

	$query = "INSERT INTO tbl_remaja(nama_remaja,kelompok_remaja,kategori_remaja,tanggal_lahir_remaja,notelp_remaja,email_remaja,foto_remaja) VALUES ('$nama_remaja','$kelompok_remaja','$kategori_remaja','$tanggal_lahir_remaja','$notelp_remaja','$email_remaja','$foto_remaja')";
	$result = mysqli_query($conn,$query);

	if (!$result) {
		die("Query error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
	} else {
		echo "<script>alert('Input data berhasil!'); window.location='../admin.php'</script>";
	}
?>