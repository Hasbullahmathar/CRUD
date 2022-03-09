<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah data</h1>
    <form action="proses.php" method="POST">
        <label for="">Nomor Induk :<br><input type="text" name="no_induk" id=""></label><br>
        <label for="">Nama :<br><input type="text" name="nama" id=""></label><br>        
        <label for="">Alamat :<br><textarea name="alamat" id="" cols="30" rows="10"></textarea></label><br>
        <label for="">tanggal lahir :<br><input type="date" name="tgl_lahir" id=""></label><br>
        <input type="hidden" name="tipe" value ="1">
        <button type="submit">Tambahkan</button>
    </form>
</body>
</html>