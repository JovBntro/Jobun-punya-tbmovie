<?php
require 'functions.php';
$GLOBALS['TitleName'] = 'Ulangan CRUD Movie';
require 'header.php'; 

if ( isset($_POST["submit"])) {
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Film</title>
</head>
<body>
    <div>
    <h1>Tambah Film</h1>

    <form action="" method="post">
        <ul>
            <p>
                <label for="movie_title"> Movie Title : </label>
                <input type="text" name="movie_title" id="movie_title" required>
            </p>
            <p>
                <label for="movie_time"> Movie Time : </label>
                <input type="text" name="movie_time" id="movie_time" required>
            </p>
            <p>
                <label for="movie_languange"> Movie Languange : </label>
                <input type="text" name="movie_languange" id="movie_languange" required>
            </p>
            <p>
                <label for="movie_release_date"> Movie Release Date : </label>
                <input type="text" name="movie_release_date" id="movie_release_date" required>
            </p>
            <p>
                <label for="movie_release_country"> Movie Release Country : </label>
                <input type="text" name="movie_release_country" id="movie_release_country" required>
            </p>
            <button type="submit" name="submit" class="btn btn-primary">Tambahkan Film</button>
    </div>
</body>
</html>