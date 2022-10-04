<?php
require 'functions.php';

$movie_id= $_GET["movie_id"];

if( hapus($movie_id) > 0 ) {
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
        </script>
    ";
}

?>