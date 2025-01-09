<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mobil</title>
</head>
<body>
    <h1>Edit Mobil</h1>
    <form action="{{ route('mobils.update', $mobil->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $mobil->nama }}" required><br>

        <label>Merk:</label><br>
        <input type="text" name="merk" value="{{ $mobil->merk }}" required><br>

        <label>Tahun:</label><br>
        <input type="number" name="tahun" value="{{ $mobil->tahun }}" required><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ $mobil->harga }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
