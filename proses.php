<?php

require 'koneksi.php';

$tipe = $_POST["tipe"];
$noin_awal=$_POST["noin_awal"];

$no_induk=$_POST["no_induk"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$tgl_lahir=$_POST["tgl_lahir"];

if($tipe == 1){
    mysqli_query($koneksi, "INSERT INTO apoteker VALUES('$no_induk', '$nama', '$alamat', '$tgl_lahir')");
}

else if($tipe==2){
    mysqli_query($koneksi,"UPDATE apoteker SET no_induk='$no_induk', nama='$nama', alamat='$alamat' WHERE no_induk='$noin_awal'");
}

?>