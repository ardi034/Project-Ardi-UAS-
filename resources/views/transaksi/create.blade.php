<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Tambah Data Transaksi</h3>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('transaksi.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="pembeli_id" class="form-label">Pembeli</label>
                                <select class="form-control @error('pembeli_id') is-invalid @enderror" id="pembeli_id" name="pembeli_id">
                                    <option value="">Pilih Pembeli</option>
                                    @foreach($pembelis as $pembeli)
                                        <option value="{{ $pembeli->id }}" {{ old('pembeli_id') == $pembeli->id ? 'selected' : '' }}>
                                            {{ $pembeli->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('pembeli_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="mobil_id" class="form-label">Mobil</label>
                                <select class="form-control @error('mobil_id') is-invalid @enderror" id="mobil_id" name="mobil_id">
                                    <option value="">Pilih Mobil</option>
                                    @foreach($mobils as $mobil)
                                        <option value="{{ $mobil->id }}" {{ old('mobil_id') == $mobil->id ? 'selected' : '' }}>
                                            {{ $mobil->merk }} <!-- or any other field you want to show -->
                                        </option>
                                    @endforeach
                                </select>
                                @error('mobil_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                                <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror" id="tanggal_transaksi" name="tanggal_transaksi" value="{{ old('tanggal_transaksi') }}">
                                @error('tanggal_transaksi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
