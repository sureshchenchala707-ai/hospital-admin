<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hospital Admin</title>

<!-- AdminLTE CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">Register OP</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('patients.index') }}" class="nav-link">Patients List</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('ops.index') }}" class="nav-link">OP List</a>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ url('/') }}" class="brand-link text-center">
            <span class="brand-text font-weight-light">Hospital Admin</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link"><i class="nav-icon fas fa-user-plus"></i> Register OP</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('patients.index') }}" class="nav-link"><i class="nav-icon fas fa-users"></i> Patients</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ops.index') }}" class="nav-link"><i class="nav-icon fas fa-notes-medical"></i> OP Visits</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content -->
    <div class="content-wrapper p-3">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>