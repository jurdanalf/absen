<?php include '../inc/conn.php'; ?>

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
            <h1>Form Tambah Berita</h1>
            <a href="../admin.php">Kembali</a>
        </div>
        <form action="add_news_process.php" method="post">
            <table>
                <tr>
                    <td><label for="topic_news">Judul</label></td>
                    <td><input type="text" name="topic_news"></td>
                </tr>
                <tr>
                    <td><label for="sender_news">Pengirim</label></td>
                    <td><input type="text" name="sender_news"></td>
                </tr>
                <tr>
                    <td><label for="body_news">Berita</label></td>
                    <td><textarea name="body_news" id="body_news" cols="55" rows="20"></textarea></td>
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