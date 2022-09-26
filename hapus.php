<?php 
	include 'inc/conn.php';
	$id_remaja = $_GET['id_remaja'];
	$query = "DELETE FROM tbl_remaja WHERE id_remaja='$id_remaja'";
	$result = mysqli_query($conn,$query);
	if (!$result) {
		die("Gagal!");
	} else {
		echo "<script>alert('Data berhasil dihapus!'); window.location='remaja.php'</script>";
	}
?>