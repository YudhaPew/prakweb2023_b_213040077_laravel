<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PEW Blog | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body>
    @include('dashboard.layouts.header')

    <div class="container-fluid">
        <div class="row">

            @include('dashboard.layouts.sidebar')
        </div>
    </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/dashboard.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>
