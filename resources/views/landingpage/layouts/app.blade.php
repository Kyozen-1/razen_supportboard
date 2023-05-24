<html class="history svg video supports boxshadow csstransforms3d csstransitions backgroundcliptext webkit chrome win js sticky-header-enabled"><head>
    @include('landingpage.layouts.head')
</head>
    @php
        use App\Models\Profil;
        use Carbon\Carbon;

        $profil = Profil::first();
    @endphp
    <body>
        <div class="body">
            <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 70, 'stickyHeaderContainerHeight': 70}" style="height: 147.8px;">
                <div class="header-body border-top-0 appear-animation" data-appear-animation="fadeIn">
                    <div class="header-top" style="height: 47px;">
                        <div class="container">
                            <div class="header-row">
                                <div class="header-column justify-content-start">
                                    <div class="header-row">
                                        <nav class="header-nav-top">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <span class="ws-nowrap custom-text-color-grey-1 text-2 ps-0">
                                                        <i class="icon-envelope icons text-4 top-3 left-1 me-1"></i>
                                                        <a href="mailto:{{$profil->email}}" class="text-color-default text-color-hover-primary">{{$profil->email}}</a>
                                                    </span>
                                                </li>
                                                <li class="nav-item d-none d-md-block">
                                                    <span class="ws-nowrap custom-text-color-grey-1 text-2">
                                                    <i class="icon-clock icons text-4 top-3 left-1 me-1"></i> {{$profil->kerja_dari_hari}} - {{$profil->kerja_sampai_hari}} {{$profil->kerja_dari_jam}} - {{$profil->kerja_sampai_jam}} </span>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="header-column justify-content-end">
                                    <div class="header-row">
                                        <ul class="header-social-icons social-icons social-icons-clean d-none d-lg-block me-3">
                                            @php
                                                use App\Models\PivotProfilMediaSosial;

                                                $pivots = PivotProfilMediaSosial::where('profil_id', $profil->id)->get();
                                            @endphp
                                            @foreach ($pivots as $pivot)
                                                <li>
                                                    <a href="{{$pivot->tautan}}" target="_blank" title="{{$pivot->media_sosial->nama}}">
                                                        <i class="{{$pivot->media_sosial->kode_ikon}}"></i>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <a href="https://api.whatsapp.com/send?phone={{$profil->no_hp}}&amp;text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::................" class="btn btn-tertiary font-weight-semibold text-3 px-4 custom-height-1 rounded-0 align-items-center d-none d-md-flex text-color-light">
                                        <i class="icon-phone icons text-4 me-2"></i> +{{$profil->no_hp}} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-container container" style="height: 100px;">
                        <div class="header-row p-relative px-0">
                            <div class="header-column px-lg-3">
                                <div class="header-row">
                                    <div class="header-logo" style="width: 0px; height: 50px;">
                                        <a href="{{ route('beranda') }}">
                                            <img alt="Razen GET ERP" src="{{ asset('images/razen-supportboard/logo/'.$profil->logo) }}" height="50">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column w-100 ms-2 ms-xl-5 ps-2 pe-lg-3">
                                <div class="header-row justify-content-end justify-content-lg-start">
                                    <div class="header-nav header-nav-links justify-content-lg-start">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li>
                                                        <a class="nav-link active current-page-active" href="{{ route('beranda') }}"> Beranda </a>
                                                    </li>
                                                    {{-- <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="#">
                                                            Demo Aplikasi <i class="fas fa-chevron-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="nav-link" target="_blank" href="https://geterp.razen.co.id/">Web app</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown dropdown-mega">
                                                        <a class="dropdown-item dropdown-toggle active current-page-active" href="#">
                                                            Solusi Lainnya <i class="fas fa-chevron-down"></i>
                                                            <i class="fas fa-chevron-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <div class="dropdown-mega-content">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <span class="dropdown-mega-sub-title">Servis</span>
                                                                            <ul class="dropdown-mega-sub-nav">
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/services">Custom mobile app</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/services">Custom website</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <span class="dropdown-mega-sub-title">Pemerintahan</span>
                                                                            <ul class="dropdown-mega-sub-nav">
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/pemerintahan/">Mitigasi Bencana</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/pemerintahan/">Pariwisata</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/pemerintahan/">Sekolah Pro</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/pemerintahan/">Pertanian</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/pemerintahan/">Perpusdes</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/pemerintahan/">Desa Digital</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/pemerintahan/">Smart Kabupaten</a>
                                                                                </li>
                                                                                <!-- <li><a class="dropdown-item" href="elements-image-frames.html">Image Frames  <span class="tip tip-dark p-relative bottom-2">hot</span></a></li> -->
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <span class="dropdown-mega-sub-title">Swasta</span>
                                                                            <ul class="dropdown-mega-sub-nav">
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/get-erp-razen/">GET ERP</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/get-store-razen/">GET STORE</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/get-project-razen/">GET PROJECT</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/get-crm-razen/">GET CRM</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/get-lms-razen/">GET LMS</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <span class="dropdown-mega-sub-title">Startup</span>
                                                                            <ul class="dropdown-mega-sub-nav">
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="https://mamiclean.com">Mami Clean</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="https://www.pendekarbengkel.com/">Pendekar Bengkel</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="https://marketplace.demo.razen.co.id/">Banguntani</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/rintisan-startup">Subcon</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="https://akadsah.com/">Akadsah</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="https://vokasee.id/#">Vokasee.id</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="https://jasa.demo.razen.co.id/#/">Laden</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="/rintisan-startup">Frigle</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" target="_blank" href="https://kolhype.com/">KolHype</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li> --}}
                                                    <li>
                                                        <a class="nav-link" href="https://api.whatsapp.com/send?phone={{$profil->no_hp}}&amp;text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::................"> Kontak Kami </a>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Login
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('razen-supportboard.login') }}">CMS</a>
                                                            <a class="dropdown-item" href="{{ url('/') }}/supportboard/admin.php">Support Board</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                    </div>
                                    <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                        <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                            <div class="d-none d-xxl-flex custom-header-1-extra-links">
                                                <a class="btn btn-outline-primary font-weight-semibold text-3 py-3 border-radius p-relative bottom-1 custom-header-1-btn-1" href="https://api.whatsapp.com/send?phone={{$profil->no_hp}}&amp;text=Halo%20kak,%20saya%20ingin%20membahas%20sebuah%20proyek" target="_blank">
                                                    <span class="px-4 d-block ws-nowrap">Hubungi Sales</span>
                                                </a>
                                                {{-- <a class="btn btn-primary font-weight-semibold text-3 py-3 border-radius p-relative bottom-1 custom-header-1-btn-1" href="{{ url('/') }}/supportboard/admin.php">
                                                    <span class="px-4 d-block ws-nowrap">Login</span>
                                                </a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div role="main" class="main">
                @yield('content')
            </div>
            <footer id="footer" class="bg-color-tertiary position-relative mt-0">
                <svg class="custom-section-curved-top-7" width="100%" height="400" xmlns="http://www.w3.org/2000/svg">
                    <path id="svg_2" fill="#171940" stroke="#000" stroke-width="0" d="m-16.68437,95.44889c0,0 5.33335,176.00075 660.00283,93.33373c327.33474,-41.33351 503.33549,15.3334 639.00274,35.66682c135.66725,20.33342 59.66691,9.66671 358.33487,28.33346c298.66795,18.66676 268.66829,-45.00088 382.66831,-112.00048c114.00002,-66.9996 718.31698,-59.48704 1221.66946,95.563c503.35248,155.05004 -221.83202,184.10564 -243.66935,197.60521c-21.83733,13.49958 -3008.67549,-19.83371 -3008.00467,-20.83335c-0.67082,0.99964 -30.00428,-232.33469 -10.00419,-317.66839z" class="svg-fill-color-tertiary"></path>
                </svg>
                <div class="container position-relative mt-0 mb-4">
                    <div class="row py-5">
                        <div class="col-lg-3 mb-5 mb-lg-0">
                            <h4 class="font-weight-bold text-color-light text-5 ls-0 pb-1 mb-2">ABOUT US</h4>
                            <p style="color:#fff">Kami merupakan perusahaan jasa berbasis di Yogyakarta dengan fokus layanan pada pengembangan bisnis, infrastruktur dan perangkat lunak untuk segmen Pemerintahan, Bisnis dan UMKM.</p>
                            <a href="{{ route('beranda') }}">
                                <img src="{{ asset('images/razen-supportboard/logo/'.$profil->logo) }}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 mb-4 mb-lg-0">
                            <h4 class="font-weight-bold text-color-light text-5 ls-0 pb-1 mb-2">INFORMASI</h4>
                            <ul class="list list-unstyled">
                                <li class="mb-1">
                                    <a href="https://tech.razen.co.id">Portfolio</a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://razen.co.id">About Us</a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://tech.razen.co.id/produk/kontak-kami">Kontak Kami</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 mb-4 mb-lg-0">
                            <h4 class="font-weight-bold text-color-light text-5 ls-0 pb-1 mb-2">SERVIS</h4>
                            <ul class="list list-unstyled">
                                <li class="mb-1">
                                    <a href="https://tech.razen.co.id">Web &amp; Android</a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://razenproject.com">3D Asset</a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://razenproject.com">Desain Arsitektur</a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://razenstudio.com">Digital Marketing</a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://razenstudio.com">Social Media Marketing</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h4 class="font-weight-bold text-color-light text-5 ls-0 pb-1 mb-2">KONTAK KAMI</h4>
                            <ul class="list list-unstyled">
                                <li class="mb-1"> Alamat: {{$profil->alamat}} </li>
                                <li class="mb-1"> No.Hp: <a href="https://api.whatsapp.com/send?phone={{$profil->no_hp}}&amp;text=Hai%20Razen%20Teknologi,%20Saya%20dengan%20:................%20%20Dari%20:................%20Keperluan::................">+62 822-9944-9494</a>
                                </li>
                                <li class="mb-1"> Email: <a href="#">{{$profil->email}}</a>
                                </li>
                            </ul>
                            <ul class="social-icons custom-social-icons-style-1">
                                @foreach ($pivots as $pivot)
                                    <li>
                                        <a href="{{$pivot->tautan}}" target="_blank" title="{{$pivot->media_sosial->nama}}">
                                            <i class="{{$pivot->media_sosial->kode_ikon}}"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright bg-color-tertiary">
                    <div class="container py-2">
                        <hr class="bg-color-light opacity-1 mb-0">
                        <div class="row justify-content-center py-4">
                            <div class="col-auto">
                                <p class="text-color-light opacity-5 text-3">{{$profil->pt}} © Copyright {{Carbon::now()->year}}. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>

    @include('landingpage.layouts.js')
</html>
