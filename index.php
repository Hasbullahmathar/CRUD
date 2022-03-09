<?php

require 'koneksi.php';

$datas = mysqli_query($koneksi, "SELECT * FROM apoteker");

while($result = mysqli_fetch_assoc($datas)){
    $data[] = $result;
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bullah</title>
</head>
<body>
    <h1>Penambahan DataBase</h1>
    <a href="tambah.php"><button>Tambah Data</button></a><br>
    <table cellspading="0" cellspacing="0" border="1">
        <tr>
        <th>no</th>
        <th>no_induk</th>
        <th>nama</th>
        <th>alamat</th>
        <th>tgl_lahir</th>
        </tr>
        <?php
        
        $no = 1;

        foreach ($data as $dt) : ?>
        <tr>
            <td><?=$no?></td>
            <td><?=$dt['no_induk']?></td>
            <td><?=$dt['nama']?></td>
            <td><?=$dt['alamat']?></td>
            <td><?=$dt['tgl_lahir']?></td>
            <td><a href ="update.php?x=<?=$dt['no_induk']?>"><button>edit</button></a> <a href="hapus.php?x=<?=$dt['no_induk']?>"><button>Hapus</button></a></td>

        </tr>

        <?php
        $no++;
        endforeach;
        ?>

    </table>
</body>
</html>