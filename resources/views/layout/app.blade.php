<!DOCTYPE html>
<html>
<head>
    <title>Hospital Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Optional: AdminLTE CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

    <!-- Simple Navbar -->
    <nav>
        <a href="{{ route('patients.index') }}">Patients List</a> |
        <a href="{{ route('ops.index') }}">OP List</a> |
        <a href="/">Register OP</a>
    </nav>

    <div class="content-wrapper" style="padding:20px;">
        @yield('content')
    </div>

</div>

<!-- AdminLTE JS -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>