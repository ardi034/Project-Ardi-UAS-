<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pages</title>
    <!-- Link to Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        table {
            margin-bottom: 30px;
        }
        .table th, .table td {
            text-align: center;
        }
        .table th {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Admin Dashboard</h1>

        <!-- Mobil Table -->
        <section>
            <h2>Mobil Table</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Mobil</th>
                        <th>Tahun</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mobils as $mobil)
                        <tr>
                            <td>{{ $mobil->id }}</td>
                            <td>{{ $mobil->nama_mobil }}</td>
                            <td>{{ $mobil->tahun }}</td>
                            <td>{{ number_format($mobil->harga, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <!-- Transaksi Table -->
        <section>
            <h2>Transaksi Table</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mobil ID</th>
                        <th>Pembeli ID</th>
                        <th>Harga Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksis as $transaksi)
                        <tr>
                            <td>{{ $transaksi->id }}</td>
                            <td>{{ $transaksi->mobil_id }}</td>
                            <td>{{ $transaksi->pembeli_id }}</td>
                            <td>{{ number_format($transaksi->harga_transaksi, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <!-- Pembeli Table -->
        <section>
            <h2>Pembeli Table</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pembeli</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembelis as $pembeli)
                        <tr>
                            <td>{{ $pembeli->id }}</td>
                            <td>{{ $pembeli->nama_pembeli }}</td>
                            <td>{{ $pembeli->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <!-- Credit Table -->
        <section>
            <h2>Credit Table</h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pembeli ID</th>
                        <th>Jumlah Kredit</th>
                        <th>Durasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($credits as $credit)
                        <tr>
                            <td>{{ $credit->id }}</td>
                            <td>{{ $credit->pembeli_id }}</td>
                            <td>{{ number_format($credit->jumlah_kredit, 0, ',', '.') }}</td>
                            <td>{{ $credit->durasi }} months</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

    </div>

    <!-- Bootstrap JS and Popper.js (optional for dropdowns and other features) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
