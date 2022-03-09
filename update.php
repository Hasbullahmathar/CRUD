<?php
require 'koneksi.php';

$no_in = $_GET["x"];

$datas = mysqli_query($koneksi, "SELECT * FROM apoteker WHERE no_induk=$no_in");

$data = mysqli_fetch_assoc($datas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h1>Update data</h1>
    <form action="proses.php" method="POST">
        <label for="">Nomor Induk :<br><input type="text" name="no_induk" id="" value="<?=$data['no_induk']?>"></label><br>
        <label for="">Nama :<br><input type="text" name="nama" id="" value="<?=$data['nama']?>"></label><br>        
        <label for="">Alamat :<br><textarea name="alamat" id="" cols="30" rows="10"><?=$data['alamat']?></textarea></label><br>
        <label for="">tanggal lahir :<br><input type="date" name="tgl_lahir" id=""></label><br>
        <input type="hidden" name="tipe" value ="2">
        <input type="hidden" name="noin_awal" value="<?=$no_in?>">
        <button type="submit">Tambahkan</button>
    </form>
</body>
</html>