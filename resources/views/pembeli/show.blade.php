@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pembeli</h1>

    <p><strong>Nama:</strong> {{ $pembeli->name }}</p>
    <p><strong>Alamat:</strong> {{ $pembeli->alamat }}</p>
    <p><strong>Nomor Telepon:</strong> {{ $pembeli->telepon }}</p>

    <a href="{{ route('pembeli.index') }}" class="btn btn-secondary">Kembali ke Daftar Pembeli</a>
</div>
@endsection
