<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>
    <!-- Bootstrap CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom CSS -->
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
</head>
<body>
    
    <!-- Navbar -->
    @include('backend.layouts.partials.navbar')

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('backend.layouts.partials.sidebar')

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Footer -->
    @include('backend.layouts.partials.footer')

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom JS -->
    <script src="{{ asset('js/backend.js') }}"></script>

    @stack('scripts')
</body>
</html>
