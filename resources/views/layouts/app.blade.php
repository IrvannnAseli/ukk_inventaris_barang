<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #wrapper {
            display: flex;
            min-height: 100vh;
            overflow: hidden;
        }

        #sidebar-wrapper {
            min-width: 250px;
            max-width: 250px;
            transition: all 0.3s ease;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -250px;
        }

        .sidebar-heading {
            background: linear-gradient(to right, #007bff, #00d4ff);
            color: white;
        }

        .list-group-item {
            border: none;
            transition: background 0.2s ease;
        }

        .list-group-item:hover {
            background: #007bff;
            color: white;
        }

        #page-content-wrapper {
            flex: 1;
        }

        .navbar {
            background: linear-gradient(to right, #007bff, #00d4ff);
            color: white;
        }

        .navbar-text {
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-end" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4">
                <h4>Asset Management</h4>
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('kategori-asset.index') }}" class="list-group-item list-group-item-action">Kategori
                    Asset</a>
                <a href="{{ route('sub-kategori-asset.index') }}" class="list-group-item list-group-item-action">Sub
                    Kategori Asset</a>
                <a href="{{ route('distributor.index') }}"
                    class="list-group-item list-group-item-action">Distributor</a>
                <a href="{{ route('merk.index') }}" class="list-group-item list-group-item-action">Merk</a>
                <a href="{{ route('satuan.index') }}" class="list-group-item list-group-item-action">Satuan</a>
                <a href="{{ route('master-barang.index') }}" class="list-group-item list-group-item-action">Master
                    Barang</a>
                <a href="{{ route('depresiasi.index') }}" class="list-group-item list-group-item-action">Depresiasi</a>
                <a href="{{ route('pengadaan.index') }}" class="list-group-item list-group-item-action">Pengadaan</a>
                <a href="{{ route('lokasi.index') }}" class="list-group-item list-group-item-action">Lokasi</a>
                <a href="{{ route('mutasi-lokasi.index') }}" class="list-group-item list-group-item-action">Mutasi
                    Lokasi</a>
                <a href="{{ route('opname.index') }}" class="list-group-item list-group-item-action">Opname</a>
                <a href="{{ route('hitung-depresiasi.index') }}" class="list-group-item list-group-item-action">Hitung
                    Depresiasi</a>
                <a href="#" class="list-group-item list-group-item-action text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <!-- Form logout -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="menu-toggle">☰ Menu</button>
                    <!-- Tombol Dashboard -->
                    <a href="{{ route('dashboard') }}" class="btn btn-primary ms-2">Dashboard</a>
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
    @yield('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('wrapper').classList.toggle('toggled');
        });
    </script>
</body>

</html>