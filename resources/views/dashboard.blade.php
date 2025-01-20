@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex flex-column min-vh-100">
    <!-- Konten Utama -->
    <div class="container py-5 flex-grow-1">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mb-4" style="font-size: 2.5rem; color: #007bff;">Welcome to Asset Management Dashboard</h1>
                <p class="mb-5 text-muted">Gunakan menu di sebelah kiri untuk menavigasi sistem dan mengelola aset Anda secara efisien.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card border-primary shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Master Barang</h5>
                        <p class="card-text">Kelola semua aset dan detailnya.</p>
                        <a href="{{ route('master-barang.index') }}" class="btn btn-primary">Pergi ke Master Barang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Kategori Asset</h5>
                        <p class="card-text">Melihat dan mengatur kategori aset.</p>
                        <a href="{{ route('kategori-asset.index') }}" class="btn btn-success">Pergi ke Kategori</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-danger shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Depresiasi</h5>
                        <p class="card-text">Melacak dan menghitung Depresiasi.</p>
                        <a href="{{ route('hitung-depresiasi.index') }}" class="btn btn-danger">Pergi ke Depresiasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-3 border-top">
        <div class="container text-center">
            <p class="mb-0 text-muted">© {{ date('Y') }} Asset Management System. All rights reserved.</p>
            <p class="mb-0">
                <a href="#" class="text-decoration-none text-primary me-3">Privacy Policy</a>
                <a href="#" class="text-decoration-none text-primary">Terms of Service</a>
            </p>
        </div>
    </footer>
</div>
@endsection
