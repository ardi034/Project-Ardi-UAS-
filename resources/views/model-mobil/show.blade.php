<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar dan Sidebar (sama seperti sebelumnya) -->

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Detail Mobil</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Card untuk Detail Mobil -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>{{ $mobil->nama }}</strong></h5>
                                    <p><strong>Merk:</strong> {{ $mobil->merk }}</p>
                                    <p><strong>Tahun:</strong> {{ $mobil->tahun }}</p>
                                    <p><strong>Harga:</strong> Rp {{ number_format($mobil->harga, 0, ',', '.') }}</p>
                                    
                                    @if($mobil->foto)
                                        <p><strong>Foto:</strong></p>
                                        <img src="{{ Storage::url($mobil->foto) }}" class="img-fluid" alt="Foto Mobil">
                                    @else
                                        <p>No photo available</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- Footer (sama seperti sebelumnya) -->
    </div>
</body>

</html>
