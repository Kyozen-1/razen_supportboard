@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp
<!-- Basic -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Razen Supportboard | Beranda')</title>
<meta name="keywords" content="Razen Supporboard">
<meta name="description" content="Razen Supportboard">
<meta name="author" content="Kyozen">
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('images/razen-teknologi/logo/'.$profil->logo_kecil) }}">
<link rel="apple-touch-icon" href="{{ asset('images/razen-teknologi/logo/'.$profil->logo_kecil) }}">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<!-- Web Fonts  -->
<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet" type="text/css">
<!-- Vendor CSS -->
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('techbuzz/assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/animate.compat.css') }}">
<link rel="stylesheet" href="{{ asset('css/simple-line-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/magnific-popup.min.css') }}">
<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/theme.css') }}">
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/theme-elements.css') }}">
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/theme-blog.css') }}">
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/theme-shop.css') }}">
<!-- Demo CSS -->
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/razen.css') }}">
<!-- Skin CSS -->
<link id="skinCSS" rel="stylesheet" href="{{ asset('landingpage/assets/css/skins-razen.css') }}">
<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('landingpage/assets/css/custom.css') }}">
<!-- Head Libs -->
<script src="{{ asset('landingpage/assets/css/modernizr.min.js') }}"></script>
<style>
    #footer a:not(.btn):not(.no-footer-css){
        color: #fff;
    }
    .list.list-unstyled{
        color: #fff;
    }
</style>

@yield('css')
