<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <form action="proses.php" method="post">
        Nama : <input type="text" name="nama" > <br>
        Kelas : 
        <select name="kelas" >
            <option value="">--pilih kelas--</option>
            <option value="Kelas 3A">Kelas 3A</option>
            <option value="Kelas 3B">Kelas 3B</option>
            <option value="Kelas 3C">Kelas 3C</option>
        </select> <br>
        Jenis Kelamin : <select name="jeniskelamin">
            <option value="">--pilih jenis kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuang</option>
        </select> <br>
        <input type="submit" value="Simpan" name="simpan">
    </form>
</body>
</html>