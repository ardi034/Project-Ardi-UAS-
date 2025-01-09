<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Jual Beli Mobil</title>

    <!-- Memuat Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Memuat AdminLTE CSS -->
    <link href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css" rel="stylesheet">

    <!-- Memuat font dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Memuat file CSS hasil Laravel Mix -->
    <link rel="stylesheet" href="{{ mix('css/admin.css') }}">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .sidebar-dark-primary {
            background-color: #2f3b52;
        }
        .brand-link {
            color: #fff !important;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .brand-logo {
        width: 90px;
        height: 70px;
        margin-right: 10px;
        vertical-align: middle;
        }
        .brand-text {
        font-size: 1.3em;
        color:rgb(248, 249, 250)/* Warna teks */
        }
        .main-sidebar {
            border-right: none;
        }
        .main-footer {
            background-color: #f8f9fa;
            padding: 10px;
        }
        .small-box {
            border-radius: 10px;
            padding: 20px;
            color: white;
            margin-bottom: 20px;
        }
        .small-box h3 {
            font-size: 2rem;
            font-weight: bold;
        }
        .card-header {
            background-color: #f4f6f9;
        }
        .card-body {
            background-color: #fff;
        }
        .content-wrapper {
            background-color: #f4f6f9;
        }
        .nav-link.active {
            background-color: #007bff;
        }
        .nav-link:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand -->
<a href="#" class="brand-link">
    <img src="images/car.png" alt="" class="brand-logo">
    <span class="brand-text">OTO</span>
</a>
    <!-- Sidebar Content -->
    <div class="sidebar">
        <!-- Sidebar Navigation -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
                <!-- Dashboard Link -->
                <li class="nav-item">
                    <a href="/" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- Model Mobil Link -->
                <li class="nav-item">
                    <a href="/model-mobil" class="nav-link">
                        <i class="nav-icon fas fa-car"></i>
                        <p>Model Mobil</p>
                    </a>
                </li>
                <!-- Pembeli Link -->
                <li class="nav-item">
                    <a href="/pembeli" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pembeli</p>
                    </a>
                </li>
                <!-- Transaksi Link -->
                <li class="nav-item">
                    <a href="/Transaksi" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <!-- Kredit Link -->
                <li class="nav-item">
                    <a href="/kredit" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>Kredit</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>


        <!-- Konten Utama -->
        <div class="content-wrapper">
            <div class="container mt-4">
                <h1 class="mb-4">Selamat Datang di Sistem Jual Beli Mobil</h1>

                <!-- Statistik -->
                <div class="row">
                    <!-- Model Mobil -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>100</h3>
                                <p>Model Mobil</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-car"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Pembeli -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>100</h3>
                                <p>Pembeli</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Transaksi -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>100</h3>
                                <p>Transaksi</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Kredit -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>0</h3>
                                <p>Kredit</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-credit-card"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Info Tambahan -->
                <div class="row">
                    <!-- Model Mobil Terbaru -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Model Mobil Terbaru</h5>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Toyota Avanza - 2024</li>
                                    <li>Honda HR-V - 2024</li>
                                    <li>Mitsubishi Pajero Sport - 2024</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Pembeli Terdaftar -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Pembeli Terdaftar</h5>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Muhammad Ardiansyah</li>
                                    <li>Syifa Handayani</li>
                                    <li>Sopo Jarwo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Daftar Transaksi dan Kredit -->
                <div class="row">
                    <!-- Transaksi Terakhir -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Transaksi Terakhir</h5>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Muhammad Ardiansyah membeli Toyota Avanza - 2024</li>
                                    <li>Syifa Handayani membeli Honda HR-V 2024</li>
                                    <li>Sopo Jarwo membeli Pajero Sport - 2024</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Kredit Terakhir -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Kredit Terakhir</h5>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Muhammad Ardiansyah - Kredit 50%</li>
                                    <li>Syifa Handayani - Kredit 30%</li>
                                    <li>Sopo Jarwo - Kredit 70%</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                <b>Version</b> 3.2.0
            </div>
            <strong>&copy; 2024 Sistem Jual Beli Mobil</strong>
        </footer>
    </div>

    <!-- Memuat AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <!-- Memuat JavaScript Bootstrap dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb19fCSjK00OXF0iXOxzJXlzOTl0nfa2Rc1TDb6X3p9ZaBxxX" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0p3pF1aFc43LPT5Ff5d2lcfzZh5sIWUzQ1QZz5y4yNX3n4z4" crossorigin="anonymous"></script>

    <!-- Memuat file JavaScript hasil Laravel Mix -->
    <script src="{{ mix('js/admin.js') }}"></script>

</body>

</html>
