<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mobil</title>
</head>
<body>
    <h1>Tambah Mobil</h1>
    <form action="{{ route('mobils.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br>

        <label>Merk:</label><br>
        <input type="text" name="merk" required><br>

        <label>Tahun:</label><br>
        <input type="number" name="tahun" required><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
