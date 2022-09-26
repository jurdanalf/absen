<?php
    include '../inc/conn.php';

    $topic_news = $_POST['topic_news'];
	$sender_news = $_POST['sender_news'];
	$body_news = $_POST['body_news'];

	$query = "INSERT INTO tbl_news(topic_news,sender_news,body_news) VALUES ('$topic_news','$sender_news','$body_news')";
	$result = mysqli_query($conn,$query);

	if (!$result) {
		die("Query error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
	} else {
		echo "<script>alert('Input berita berhasil!'); window.location='../berita.php'</script>";
	}
?>