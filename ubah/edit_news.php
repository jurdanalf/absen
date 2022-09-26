<?php
    include '../inc/conn.php';

    $id_news = $_GET['id_news'];
    $query = "SELECT * FROM tbl_news";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MCA | Tambah Berita</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/index.css" rel="stylesheet">
</head>
<body>
    <section id="add_news">
        <div class="judul">
            <h1>Form Ubah Berita</h1>
            <a href="../berita.php">Kembali</a>
        </div>
        <form action="edit_news_process.php?id_news=<?= $row['id_news']; ?>" method="post">
            <table>
                <tr>
                    <td><label for="topic_news">Judul</label></td>
                    <td><input type="text" name="topic_news" value="<?= $row['topic_news'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="sender_news">Pengirim</label></td>
                    <td><input type="text" name="sender_news" value="<?= $row['sender_news'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="body_news">Berita</label></td>
                    <td><textarea name="body_news" id="body_news" cols="55" rows="20"><?= $row['body_news'] ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" name="submit">Submit</button>
                        <button type="reset">Cancel</button>
                    </td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>