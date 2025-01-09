<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Model Mobil</title>
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
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Sistem Jual Beli Mobil</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('model.index') }}" class="nav-link active">
                                <i class="nav-icon fas fa-car"></i>
                                <p>Model Mobil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pembeli.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Pembeli</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('transaksi.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-money-check-alt"></i>
                                <p>Transaksi</p>
                            </a>
                        </li>
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

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Daftar Model Mobil</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        @php
                            // Array gambar mobil
                            $gambarMobil = [
                                'images/avanza.jpeg',
                                'images/hrv.jpeg',
                                'images/pajero.jpeg',
                                'images/fortuner.jpeg',
                                'images/civic.jpeg'
                            ];
                        @endphp

                        @foreach (range(1, 100) as $i)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <!-- Ambil gambar secara acak -->
                                    <img src="{{ $gambarMobil[array_rand($gambarMobil)] }}" class="card-img-top" alt="Model Mobil {{ $i }}">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Model Mobil {{ $i }}</strong></h5>
                                        <p class="card-text">
                                            Model Mobil {{ $i }} adalah kendaraan yang dirancang untuk kebutuhan modern, menawarkan kenyamanan, performa, dan gaya.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">Version 3.2.0</div>
            <strong>&copy; 2025 Model Mobil.</strong> All rights reserved.
        </footer>
    </div>
</body>

</html>
