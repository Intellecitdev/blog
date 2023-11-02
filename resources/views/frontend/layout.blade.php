<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="@yield('meta_keywords')" />
    {{-- canonical tag --}}
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="description" content="@yield('meta_description')" />
    <meta name="author" content="@yield('author')" />
    <meta name="google-site-verification" content="8Di8r-WtxyHrQYXgcCSvBAo2eNLE3GLFriCrhBSRWaI" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://www.chinabazarb2b.com/img/frontend/brand/favicon-32x32.png"
        type="image/x-icon" sizes="32x32">
    <link rel="icon" href="https://www.chinabazarb2b.com/img/frontend/brand/favicon-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://www.chinabazarb2b.com/img/frontend/brand/favicon-180x180.png">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('/frontend/css/styles.css') }}" rel="stylesheet" />
    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPPPKW96"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</head>

<body>
    <!-- Responsive navbar-->
    @include('frontend.fixed.nav')
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
     
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KPPPKW96');</script>
<!-- End Google Tag Manager -->

</body>

</html>
