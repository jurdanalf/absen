<?php
    include 'inc/conn.php';

    $query = "SELECT * FROM tbl_news ORDER BY id_news ASC";
    $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/berita.css" rel="stylesheet">
    <link href="inc/css/nav.css" rel="stylesheet">
    <link href="inc/css/footer.css" rel="stylesheet">
</head>
<body>
    <?php include 'inc/nav.php'; ?>
    <main>
        <h4>BERITA ACARA KEGIATAN</h4>
        <p>CANDRABAGA BEKASI BARAT</p>
        <div class="tambah">
            <a href="tambah/add_news.php">Tambah Berita</a>
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Judul Berita</th>
                <th>Pengirim Berita</th>
                <th>Isi Berita</th>
                <th></th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach($result as $row) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['topic_news']; ?></td>
                <td><?= $row['sender_news']; ?></td>
                <td><textarea name="" id="" cols="100" rows="10" disabled><?= $row['body_news']; ?></textarea></td>
                <td>
                    <a href="ubah/edit_news.php?id_news=<?= $row['id_news']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
                    </a> 
                    <a href="hapus/hapus_berita.php?id_news=<?= $row['id_news']; ?>" onclick="return confirm('Apakah kamu yakin?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/></svg>
                    </a>
                </td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </table>
    </main>
    <?php include 'inc/footer.php'; ?>
</body>
</html>