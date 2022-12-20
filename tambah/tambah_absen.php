<?php
    include '../inc/conn.php';

    $nama_remaja = $_POST['nama_remaja'];
    $kelompok_remaja = $_POST['kelompok_remaja'];
    $kategori_remaja = $_POST['kategori_remaja'];
    $email_remaja = $_POST['email_remaja'];
    $keterangan_absen = $_POST['keterangan_absen'];
    $waktu_absen = $_POST['waktu_absen'];

    $query = "INSERT INTO tbl_absen (nama_remaja,kelompok_remaja,kategori_remaja,email_remaja,keterangan_absen,waktu_absen) VALUES ('$nama_remaja','$kelompok_remaja','$kategori_remaja','$email_remaja','$keterangan_absen','$waktu_absen')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo "<script>alert('Maaf absen anda gagal!');</script>";
    } else {
        echo "<script>alert('Absen anda berhasil!'); window.location='../index.php'</script>";
    }
?>