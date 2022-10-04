<?php

$conn = mysqli_connect("localhost", "root", "", "dbmovie");

function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;
        
    $movie_title = htmlspecialchars($data["movie_title"]);
    $movie_time = htmlspecialchars($data["movie_time"]);
    $movie_languange = htmlspecialchars($data["movie_languange"]);
    $movie_release_date = htmlspecialchars($data["movie_release_date"]);
    $movie_release_country = htmlspecialchars($data["movie_release_country"]);
       
    $query = "INSERT INTO tbmovie
                    VALUES
                ('', '$movie_title', '$movie_time', '$movie_languange', '$movie_release_date', '$movie_release_country')";

    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
    
    }

function hapus($movie_id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbmovie WHERE movie_id = $movie_id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $movie_id = $data["movie_id"];
    $movie_title = htmlspecialchars($data["movie_title"]);
    $movie_time = htmlspecialchars($data["movie_time"]);
    $movie_languange = htmlspecialchars($data["movie_languange"]);
    $movie_release_date = htmlspecialchars($data["movie_release_date"]);
    $movie_release_country = htmlspecialchars($data["movie_release_country"]);
    
    $query = "UPDATE tbmovie SET 
                movie_title = '$movie_title',
                movie_time = '$movie_time',
                movie_languange = '$movie_languange',
                movie_release_date = '$movie_release_date',
                movie_release_country = '$movie_release_country'
              WHERE movie_id = $movie_id ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query =" SELECT * FROM tbmovie
                WHERE
                movie_title LIKE '%$keyword%' OR
                movie_time LIKE '%$keyword%' OR
                movie_languange LIKE '%$keyword%' OR
                movie_release_date LIKE '%$keyword%' OR
                movie_release_country LIKE '%$keyword%' 
                ";
    return query($query);
}
?>