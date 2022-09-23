<?php
    include '../inc/conn.php';

    $id_remaja = $_GET['id_remaja'];
    $nama_remaja = $_POST['nama_remaja'];
    $tanggal_lahir_remaja = $_POST['tanggal_lahir_remaja'];
    $notelp_remaja = $_POST['notelp_remaja'];
    $email_remaja = $_POST['email_remaja'];
    $kelompok_remaja = $_POST['kelompok_remaja'];
    $kategori_remaja = $_POST['kategori_remaja'];
    $foto_remaja = $_POST['foto_remaja'];

    $query = "UPDATE tbl_remaja SET nama_remaja = '$nama_remaja', tanggal_lahir_remaja = '$tanggal_lahir_remaja', notelp_remaja = '$notelp_remaja', email_remaja = '$email_remaja', kelompok_remaja = '$kelompok_remaja', kategori_remaja = '$kategori_remaja', foto_remaja = '$foto_remaja' WHERE id_remaja = '$id_remaja'";
    $result = mysqli_query($conn,$query);

    if(!$result){
        die("Update gagal!" . mysqli_errno($conn) . " - " . mysqli_error($conn));
    } else {
        echo "<script>alert('Data berhasil diubah!'); window.location='../admin.php'</script>";
    }
?>