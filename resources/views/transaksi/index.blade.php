<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- jQuery and Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">Sistem Jual Beli Mobil</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                <!-- Dashboard Link -->
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- Model Mobil -->
                <li class="nav-item">
                    <a href="{{ route('model.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>Model Mobil</p>
                    </a>
                </li>
                <!-- Pembeli -->
                <li class="nav-item">
                    <a href="{{ route('pembeli.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pembeli</p>
                    </a>
                </li>
                <!-- Transaksi -->
                <li class="nav-item">
                    <a href="{{ route('transaksi.index') }}" class="nav-link active">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <!-- Kredit -->
                <li class="nav-item">
                    <a href="{{ route('kredit.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>Kredit</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

    <!-- /.sidebar -->

    <!-- Content Wrapper -->
    <div class="content-wrapper">
<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Daftar Transaksi</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="/nama-tabel/create" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
            </div>
        </div>
    </div>
</div>
        <!-- /.content-header -->

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Transaksi</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="transaksiTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID Pembeli</th>
                                    <th>Nama Pembeli</th>
                                    <th>Model Mobil</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                                <tbody>
                                    @forelse($transaksis as $transaksi)
                                        <tr>
                                            <td>{{ $transaksi->pembeli->id }}</td>
                                            <td>{{ $transaksi->pembeli->nama }}</td>
                                            <td>{{ $transaksi->modelMobil->model ?? 'Merk Tidak Ditemukan' }}</td>
                                            <td>{{ $transaksi->tanggal_transaksi }}</td>
                                            <td>
                                                <a href="{{ route('transaksi.show', $transaksi->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i> Detail
                                                </a>
                                                <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">Tidak ada transaksi.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                
                                
                                @foreach($transaksis as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->pembeli->id }}</td>
                                    <td>{{ $transaksi->pembeli->nama }}</td>
                                    <td>
                                        @if($transaksi->modelMobil)
                                            {{ $transaksi->modelMobil->merk }}
                                        @else
                                            Merk Tidak Ditemukan
                                        @endif
                                    </td>
                                    <td>{{ $transaksi->tanggal_transaksi }}</td>
                                    <td>
                                        <a href="{{ route('transaksi.show', $transaksi->id) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i> Detail
                                        </a>
                            
                                        <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <footer class="main-footer">
        <strong>&copy; {{ date('Y') }} Sistem Jual Beli Mobil.</strong>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#transaksiTable').DataTable({
            "responsive": true,
            "autoWidth": false
        });
    });
</script>
</body>
</html>
