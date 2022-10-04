<?php
$GLOBALS['TitleName'] = 'Ulangan CRUD Movie';
require 'functions.php';
require 'header.php'; 

$movie = query("SELECT * FROM tbmovie");

if(isset($_POST["cari"])) {
    $movie = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TitleName; ?></title>
</head>
<body>
    <div class="container mt-5">
    <h1 class="text-center mb-5"><?= $TitleName; ?></h1>

    <div class="form-group">
        <form action="" method="post" >
            <div class="row">
                <div class="input-group mb-3">
                    <input type="text" name="keyword" class="form-control" autofocus placeholder="Masukkan keyword pencaharian" autocomplete="off">
                    <button class="btn btn-primary" type="submit" name="cari">Cari!</button>
                </div>
        </form>
    </div>

    <table class="table table-bordered text-center mb-3">
        <tr class="table-success">
            <th>No</th>
            <th>Aksi</th>
            <th>Movie title</th>
            <th>Movie Time</th>
            <th>Movie Languange</th>
            <th>Movie Release Date</th>
            <th>Movie Release Country</th>
        </tr>

        <?php $j=1; ?>
        <?php foreach($movie as $row) : ?>
        <tr>
            <td><?= $j; ?></td>
            <td>
                <a href="ubah.php?movie_id=<?= $row["movie_id"]?>" ><button class="btn btn-warning">UBAH</button></a> | 
                <a href="hapus.php?movie_id=<?= $row["movie_id"]; ?>" onclick="return confirm('apakah anda yakin?');"><button class="btn btn-danger">HAPUS</button></a>
            </td>
            <td><?= $row["movie_title"]; ?></td>
            <td><?= $row["movie_time"]; ?></td>
            <td><?= $row["movie_languange"]; ?></td>
            <td><?= $row["movie_release_date"]; ?></td>
            <td><?= $row["movie_release_country"]; ?></td>
        </tr>
        <?php $j++; ?>
        <?php endforeach; ?>
    </table>
    <a href="tambah.php"><button class="btn btn-info text-light">TAMBAH DAFTAR FILM</button></a>
    </div>
</body>
</html>