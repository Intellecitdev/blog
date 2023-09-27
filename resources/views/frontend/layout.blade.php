<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="@yield('meta_keywords')" />
    <meta name="description" content="@yield('meta_description')" />
    <meta name="author" content="@yield('author')" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('/frontend/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    {{-- @include('frontend.fixed.nav') --}}
    <!-- Page header with logo and tagline-->
    @include('frontend.fixed.header')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            @yield('main')
            <!-- Side widgets-->
            @include('frontend.fixed.sidebar')
        </div>
        @stack('relatedPost')
    </div>
    <!-- Footer-->
    @include('frontend.fixed.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('frontend/js/scripts.js') }}"></script>
</body>

</html>
