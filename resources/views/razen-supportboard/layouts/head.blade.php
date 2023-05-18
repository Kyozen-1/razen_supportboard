@php
    use App\Models\Profil;

    $profil = Profil::first();
@endphp
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>@yield('title', 'Admin | Dashboard')</title>
<meta name="description" content="Admin Panel Razen Supportboard" />
<!-- Favicon Tags Start -->
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('acorn/acorn-elearning-portal/img/favicon/apple-touch-icon-57x57.png') }}" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('acorn/acorn-elearning-portal/img/favicon/apple-touch-icon-114x114.png') }}" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('acorn/acorn-elearning-portal/img/favicon/apple-touch-icon-72x72.png') }}" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('acorn/acorn-elearning-portal/img/favicon/apple-touch-icon-144x144.png') }}" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('acorn/acorn-elearning-portal/img/favicon/apple-touch-icon-60x60.png') }}" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('acorn/acorn-elearning-portal/img/favicon/apple-touch-icon-120x120.png') }}" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('acorn/acorn-elearning-portal/img/favicon/apple-touch-icon-76x76.png') }}" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('acorn/acorn-elearning-portal/img/favicon/apple-touch-icon-152x152.png') }}" />
<link rel="icon" type="image/png" href="{{ asset('images/razen-supportboard/logo/'.$profil->logo_kecil) }}" sizes="196x196" />
<link rel="icon" type="image/png" href="{{ asset('images/razen-supportboard/logo/'.$profil->logo_kecil) }}" sizes="96x96" />
<link rel="icon" type="image/png" href="{{ asset('images/razen-supportboard/logo/'.$profil->logo_kecil) }}" sizes="32x32" />
<link rel="icon" type="image/png" href="{{ asset('images/razen-supportboard/logo/'.$profil->logo_kecil) }}" sizes="16x16" />
<link rel="icon" type="image/png" href="{{ asset('images/razen-supportboard/logo/'.$profil->logo_kecil) }}" sizes="128x128" />
<meta name="application-name" content="&nbsp;" />
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="{{ asset('acorn/acorn-elearning-portal/img/favicon/mstile-144x144.png') }}" />
<meta name="msapplication-square70x70logo" content="{{ asset('acorn/acorn-elearning-portal/img/favicon/mstile-70x70.png') }}" />
<meta name="msapplication-square150x150logo" content="{{ asset('acorn/acorn-elearning-portal/img/favicon/mstile-150x150.png') }}" />
<meta name="msapplication-wide310x150logo" content="{{ asset('acorn/acorn-elearning-portal/img/favicon/mstile-310x150.png') }}" />
<meta name="msapplication-square310x310logo" content="{{ asset('acorn/acorn-elearning-portal/img/favicon/mstile-310x310.png') }}" />
<!-- Favicon Tags End -->
<!-- Font Tags Start -->
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/font/CS-Interface/style.css') }}" />
<!-- Font Tags End -->
<!-- Vendor Styles Start -->
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/OverlayScrollbars.min.css') }}" />

<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/glide.core.min.css') }}" />

<!-- Vendor Styles End -->
<!-- Template Base Styles Start -->
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/styles.css') }}" />
<!-- Template Base Styles End -->

<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/main.css') }}" />
<script src="{{ asset('acorn/acorn-elearning-portal/js/base/loader.js') }}"></script>
@yield('css')
