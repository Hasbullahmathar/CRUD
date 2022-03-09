<?php

require 'koneksi.php';

$no_in = $_GET["x"];

mysqli_query($koneksi, "DELETE FROM apoteker WHERE no_induk=$no_in");

if(mysqli_affected_rows($koneksi)>0){
    echo "
    <script>
        alert('Terhapus!');
        document.location='index.php';
    </script>

    ";
}
?>