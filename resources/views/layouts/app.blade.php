<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-end" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4">
                <h4>Asset Management</h4>
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('kategori-asset.index') }}" class="list-group-item list-group-item-action">Kategori Asset</a>
                <a href="{{ route('sub-kategori-asset.index') }}" class="list-group-item list-group-item-action">Sub Kategori Asset</a>
                <a href="{{ route('distributor.index') }}" class="list-group-item list-group-item-action">Distributor</a>
                <a href="{{ route('merk.index') }}" class="list-group-item list-group-item-action">Merk</a>
                <a href="{{ route('satuan.index') }}" class="list-group-item list-group-item-action">Satuan</a>
                <a href="{{ route('master-barang.index') }}" class="list-group-item list-group-item-action">Master Barang</a>
                <a href="{{ route('depresiasi.index') }}" class="list-group-item list-group-item-action">Depresiasi</a>
                <a href="{{ route('pengadaan.index') }}" class="list-group-item list-group-item-action">Pengadaan</a>
                <a href="{{ route('lokasi.index') }}" class="list-group-item list-group-item-action">Lokasi</a>
                <a href="{{ route('mutasi-lokasi.index') }}" class="list-group-item list-group-item-action">Mutasi Lokasi</a>
                <a href="{{ route('opname.index') }}" class="list-group-item list-group-item-action">Opname</a>
                <a href="{{ route('hitung-depresiasi.index') }}" class="list-group-item list-group-item-action">Hitung Depresiasi</a>
                <a href="#" class="list-group-item list-group-item-action text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                
                <!-- Form logout -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>            </div>
        </div>
        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
                    <span class="navbar-text ms-auto">
                        Welcome, {{ Auth::user()->name ?? 'User' }}
                    </span>
                </div>
            </nav>
            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('wrapper').classList.toggle('toggled');
        });
    </script>
</body>
</html>
