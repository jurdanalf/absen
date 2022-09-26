<?php
    include '../inc/conn.php';

    $id_news = $_GET['id_news'];
    $topic_news = $_POST['topic_news'];
    $sender_news = $_POST['sender_news'];
    $body_news = $_POST['body_news'];

    $query = "UPDATE tbl_news SET topic_news = '$topic_news', sender_news = '$sender_news', body_news = '$body_news' WHERE id_news = '$id_news'";
    $result = mysqli_query($conn,$query);

    if(!$result) {
        die;
    } else {
        echo "<script>alert('Berita berhasil diubah!'); window.location='../berita.php';</script>";
    }
?>