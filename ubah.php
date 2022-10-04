<?php
$GLOBALS['TitleName'] = 'Ulangan CRUD Movie';
require 'header.php'; 
require 'functions.php';

$movie_id = $_GET["movie_id"];

$movie= query("SELECT * FROM tbmovie WHERE movie_id = $movie_id")[0];

if ( isset($_POST["submit"])) {
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal dubah');
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
    <title>Ubah Daftar Film</title>
</head>
<body>
    <h1>Ubah Daftar Film</h1>

    <form action="" method="post">
        <input type="hidden" name="movie_id" value="<?= $movie["movie_id"]; ?>">
        <ul>
            <p>
                <label for="movie_title">Movie Title : </label>
                <input type="text" name="movie_title" id="movie_title" required value="<?= $movie["movie_title"]; ?>">
            </p>
    
            <p>
                <label for="movie_time">Movie Time : </label>
                <input type="text" name="movie_time" id="movie_time" required value="<?= $movie["movie_time"]; ?>">
            </p>
            <p>
                <label for="movie_languange">Movie Languange : </label>
                <input type="text" name="movie_languange" id="movie_languange" required value="<?= $movie["movie_languange"]; ?>">
            </p>
            <p>
                <label for="movie_release_date">Movie Release Date : </label>
                <input type="text" name="movie_release_date" id="movie_release_date" required value="<?= $movie["movie_release_date"]; ?>">
            </p>
            <p>
                <label for="movie_release_country">Movie Release Country : </label>
                <input type="text" name="movie_release_country" id="movie_release_country" required value="<?= $movie["movie_release_country"]; ?>">
            </p>
            <button type="submit" name="submit">Ubah data Film</button>
    </form>

</body>
</html>