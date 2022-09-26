<?php
    include '../inc/conn.php';

    $id_news = $_GET['id_news'];
    $query = "DELETE FROM tbl_news WHERE id_news = '$id_news'";
    $result = mysqli_query($conn,$query);
    if(!$result) {
        die;
    } else {
        echo "<script>alert('Berita berhasil dihapus!'); window.location='../berita.php';</script>";
    }
?>