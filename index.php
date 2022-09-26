<?php
    include 'inc/conn.php';

    $query = "SELECT * FROM tbl_news";
    $result = mysqli_query($conn,$query);
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
    <div class="container">
        <main>
            <div id="news">
                <div id="judul">
                    <h1>Pengumuman</h1>
                    <span></span>
                </div>
                <?php foreach ($result as $row) : ?>
                <div class="breadcrumb">
                    <img src="img/bean.jpg" alt="">
                    <div id="detail-breadcrumb">
                        <h4><?= $row['topic_news']; ?></h4>
                        <p>by <b><?= $row['sender_news'] ?></b> - <?= $row['date_news']; ?></p>
                    </div>
                </div>
                <div class="content-news">
                    <textarea name="body" id="body" cols="150" rows="30" disabled><?= $row['body_news'] ?></textarea>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
        <aside>

        </aside>
    </div>
    <?php include 'inc/footer.php'; ?>
</body>
</html>