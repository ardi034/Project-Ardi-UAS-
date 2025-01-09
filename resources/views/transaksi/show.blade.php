@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Detail Transaksi</h3>
        </div>
        <div class="card-body">
            <p><strong>ID Pembeli:</strong> {{ $transaksi->pembeli_id }}</p>
            <p><strong>Jumlah:</strong> {{ $transaksi->jumlah }}</p>
            <p><strong>Merk:</strong> {{ $transaksi->merk }}</p>
            <p><strong>Tanggal Pembelian:</strong> {{ $transaksi->tanggal_pembelian }}</p>
            <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@if($pembeli_id)
    <p>Pembeli ID: {{ $pembeli_id }}</p>
@else
    <p>Pembeli tidak ditemukan.</p>
@endif

@endsection
