@extends('landingpage.layouts.app')

@section('content')
    @php
        use App\Models\LandingPageBeranda;
        use App\Models\PivotPaketHargaFitur;

        $beranda = LandingPageBeranda::first();

        $section_1 = json_decode($beranda->section_1, true);
        $section_2 = json_decode($beranda->section_2, true);
        $section_3 = json_decode($beranda->section_3, true);
        $section_4 = json_decode($beranda->section_4, true);
        $section_5 = json_decode($beranda->section_5, true);
        $section_6 = json_decode($beranda->section_6, true);
        $section_7 = json_decode($beranda->section_7, true);
    @endphp

    <section class="section custom-bg-color-light-1 border-0 pt-5 m-0">
        <div class="container position-relative z-index-1 pt-5 mt-5">
            <div class="custom-circle custom-circle-wrapper custom-circle-big custom-circle-pos-1 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="900" data-appear-animation-duration="2s">
                <div class="bg-color-tertiary rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-2 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1450" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'transition': true, 'transitionDuration': 2000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-3 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1300">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-4 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1600">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.6, 'transition': true, 'transitionDuration': 500}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-5 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1050" data-appear-animation-duration="2s">
                <div class="bg-color-secondary rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 2000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-6 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1200" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 500}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-7 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1700">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-8 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1350" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 500}"></div>
            </div>
            <div class="row align-items-center pt-4">
                <div class="col-md-6 pb-5 mb-md-5">
                    <div class="spacer" style="height: 110px;"></div>
                    <h1 class="text-color-dark font-weight-bold text-10 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">{{$section_1?$section_1['judul']:'' }}</h1>
                    <p class="custom-text-color-grey-1 text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">{!!$section_1?$section_1['deskripsi']:'' !!}</p>
                    {{-- <a href="https://padiorganikmagelang.com/" class="btn btn-gradient btn-rounded font-weight-semibold px-5 py-3 text-3 mb-md-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">DEMO Razen GET ERP</a> --}}
                    <div class="spacer d-none d-md-block" style="height: 310px;"></div>
                </div>
                <div class="col-md-6 pb-5">
                    <a target="_blank" href="{{ asset('images/razen-supportboard/landingpage/beranda/'.$section_1['gambar']) }}">
                        <img src="{{ asset('images/razen-supportboard/landingpage/beranda/'.$section_1['gambar']) }}" class="img-fluid position-relative z-index-1 pb-5 mb-5 ms-5 top-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-appear-animation-duration="1500ms" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section position-relative bg-color-light border-0 m-0">
        <svg class="custom-section-curved-top-1" width="100%" height="600px" xmlns="http://www.w3.org/2000/svg">
            <path id="svg_1" d="m-12.66406,442.40068c352.72654,-76.36348 565.45337,5.45453 696.36219,19.99996c130.90882,14.54542 270.90852,-23.63632 367.27196,-47.27263c96.36344,-23.63631 379.99921,-154.54513 527.27163,-209.09047c147.27242,-54.54535 381.813,-92.55755 406.36076,-99.00598c12.27388,-3.22421 917.96684,-113.93032 715.00991,10.61478c-202.95693,124.5451 -210.46055,521.28714 -198.64021,540.29354c11.82034,19.0064 -2500.90899,-15.53962 -2500.0019,-16.36399c-0.90709,0.82437 -9.99798,-180.99343 -9.09089,-181.8178" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#f7f8f9"></path>
            <path id="svg_2" d="m-116.90461,507.88064c314.5448,-112.72704 523.63527,-21.81814 878.17999,12.72724c354.54471,34.54538 632.72595,-225.45407 978.17978,-294.54484c172.72691,-34.54538 291.36195,-62.7275 368.52007,-78.40952c77.15812,-15.68202 352.84215,-22.50036 359.66142,-7.04537c13.63854,30.90997 97.72734,614.54347 50.90961,639.99858c-46.81772,25.4551 -855.68236,4.54593 -1433.63569,1.81866c-577.95334,-2.72727 -1155.90718,-5.45466 -1155.45364,-5.45491" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#fbfcfc"></path>
            <path id="svg_3" d="m-115.93584,623.27542c234.54496,-132.72699 429.09001,-112.72703 678.1804,-83.63619c249.09039,29.09085 389.09011,30.90903 656.36228,-107.2725c267.27217,-138.18153 816.36193,-207.2723 1121.81584,-170.90873c305.45391,36.36356 -292.72666,-19.99996 -293.63778,-18.18228c71.36548,8.18218 627.05432,68.63506 626.48637,265.22584c-0.56794,196.59079 -20.11364,456.59134 -31.02284,531.13767c-10.90919,74.54633 -1561.82313,-36.3646 -1565.45948,-34.54642c-3.63636,1.81818 -1249.08831,-1.81818 -1248.18122,-1.81869c-0.90709,0.00051 39.09282,-234.54445 39.99992,-234.54496c-0.9071,0.00051 -4.54345,-76.36297 -3.63636,-76.36348" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#ffffff"></path>
        </svg>
        <div class="container position-relative custom-negative-margin-1 z-index-3 pb-lg-5 mb-lg-3">
            <div class="custom-circle custom-circle-medium custom-circle-pos-9 d-none d-md-block">
                <div class="bg-color-secondary rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-big custom-circle-pos-10 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1850" data-appear-animation-duration="2s">
                <div class="bg-color-tertiary rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 3, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-11 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="2000" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-1 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-12 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="2150" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-extra-small custom-circle-pos-13 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="2300" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-5">
                    <div class="row align-items-center">
                        @if ($section_2)
                            @if ($section_2['konten'] != '')
                                @php
                                    $a = 1;
                                    $numItems = count($section_2['konten']);
                                    $index_a = 0;
                                @endphp
                                @foreach ($section_2['konten'] as $item)
                                    @if (++$index_a == $numItems)
                                        <div class="col-md-6">
                                            <div class="card position-relative border-0 custom-box-shadow-1 custom-border-radius-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                                <div class="custom-dots-rect-2" style="background-image: url({{asset('landingpage/assets/img/dots-group-2.png')}});"></div>
                                                <div class="card-body text-center pt-5">
                                                <img src="{{ asset('images/razen-supportboard/landingpage/beranda/'.$item['gambar']) }}" class="img-fluid mb-4 pb-2" width="70" height="70">
                                                <h4 class="text-color-dark font-weight-semibold mb-2">{{$item['judul']}}</h4>
                                                <p>{{$item['deskripsi']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        @if ($a == 1)
                                            <div class="col-md-6">
                                                <div class="card position-relative border-0 custom-box-shadow-1 custom-border-radius-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850">
                                                    <div class="custom-dots-rect-1" style="background-image: url({{asset('landingpage/assets/img/dots-group.png')}});"></div>
                                                    <div class="card-body text-center pt-5">
                                                    <img src="{{ asset('images/razen-supportboard/landingpage/beranda/'.$item['gambar']) }}" class="img-fluid mb-4 pb-2" width="80" height="80">
                                                    <h4 class="text-color-dark font-weight-semibold mb-2">{{$item['judul']}} </h4>
                                                    <p>{{$item['deskripsi']}}</p>
                                                    </div>
                                                </div>
                                                @php
                                                    $a++;
                                                @endphp
                                        @elseif ($a == 2)
                                                <div class="card border-0 custom-box-shadow-1 custom-border-radius-1 mb-4">
                                                    <div class="card-body text-center pt-5">
                                                        <img src="{{ asset('images/razen-supportboard/landingpage/beranda/'.$item['gambar']) }}" class="img-fluid mb-4 pb-2" width="80" height="80">
                                                        <h4 class="text-color-dark font-weight-semibold mb-2">{{$item['judul']}}</h4>
                                                        <p>{{$item['deskripsi']}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $a = 1;
                                            @endphp
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                        @endif
                    </div>
                </div>
                <div class="col-lg-5 pt-lg-5 ps-lg-4 mt-lg-5">
                    <h2 class="text-color-dark font-weight-semibold text-6 line-height-3 pt-5 mt-5 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">{{$section_2?$section_2['judul'] : ''}}</h2>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">{{$section_2?$section_2['sub_judul'] : ''}}</p>
                    <p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">{!!$section_2?$section_2['deskripsi'] : ''!!}</p>
                    <a href="#" class="btn btn-gradient btn-rounded font-weight-semibold px-5 py-3 text-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">PRODUK LAINNYA</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section custom-bg-color-light-2 position-relative border-0 pt-4 m-0">
        <svg class="custom-section-curved-top-2" width="100%" height="298" xmlns="http://www.w3.org/2000/svg">
            <path id="svg_3" d="m-79.33393,-38.33344c20.00001,16.00001 346.66686,448.00024 826.66712,236.00013c240.00013,-106.00006 647.58388,-25.45831 786.45913,6.2709c138.87524,31.72921 295.36054,26.21434 359.54203,2.72919c64.18149,-23.48515 718.67317,-158.11072 742.33982,-143.77728c214.66852,222.83259 61.00168,333.66623 77.22357,376.2222c16.22188,42.55598 -2796.23167,-33.44489 -2795.56445,-33.77815c-0.33361,0.16663 -0.83375,-98.08344 -1.16708,-196.41683c-0.33334,-98.33338 -0.49987,-196.75009 -0.16626,-196.91671" stroke-width="0" stroke="#000" fill="#eff1f3"></path>
        </svg>
        <div class="container position-relative z-index-1 mt-3 mb-5">
            <div class="custom-circle custom-circle-small custom-circle-pos-14">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 1, 'horizontal': true, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-extra-small custom-circle-pos-15">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 1, 'horizontal': true, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-16">
                <div class="custom-bg-color-grey-1 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'top', 'speed': 1, 'horizontal': true, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="row text-center align-items-center pb-4 pt-lg-4 mb-3 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                @foreach ($produk_razens as $produk_razen)
                    <div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
                        <img src="{{asset('images/razen-supportboard/produk-razen/'.$produk_razen->gambar)}}" class="img-fluid" alt="" style="max-width: 90px;">
                    </div>
                @endforeach
            </div>
            <div class="row pb-2 mb-4">
                <div class="col">
                <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450">
                    <h2 class="text-color-dark font-weight-semibold text-6 line-height-3 mb-0 pe-5 me-5">{{$section_3?$section_3['judul']:'' }}</h2>
                    <p class="lead pe-5 mb-4 pb-2">{{$section_3?$section_3['deskripsi']:'' }}</p>
                    @if ($section_3)
                        @if ($section_3['konten'] != '')
                            @foreach ($section_3['konten'] as $item)
                                <div class="feature-box">
                                    <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-secondary top-0">
                                        <i class="fas {{$item['ikon']}} position-relative left-1"></i>
                                    </div>
                                    <div class="feature-box-info mb-4 pb-3">
                                        <h4 class="font-weight-bold line-height-3 custom-font-size-1 mb-1">{{$item['judul']}} </h4>
                                        <p class="mb-0">{{$item['deskripsi']}}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endif
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                <a target="_blank" href="{{ asset('images/razen-supportboard/landingpage/beranda/'.$section_3['gambar']) }}">
                    <img src="{{ asset('images/razen-supportboard/landingpage/beranda/'.$section_3['gambar']) }}" class="img-fluid appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600" alt="">
                </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-light position-relative border-0 pt-0 m-0">
        <svg class="custom-section-curved-top-3" width="100%" height="298" xmlns="http://www.w3.org/2000/svg">
            <path id="svg_2" fill="#FFF" stroke="#000" stroke-width="0" d="m-19.87006,126.33922c0,0 2.16796,-1.48437 6.92379,-3.91356c4.75584,-2.42918 12.09956,-5.80319 22.45107,-9.58247c20.70303,-7.55856 53.43725,-16.7382 101.56202,-23.22255c48.12477,-6.48434 111.6401,-10.27339 193.90533,-7.05074c41.13262,1.61132 88.20271,5.91306 140.3802,12.50726c52.17748,6.59421 -86.4742,-15.61273 171.02458,26.26208c64.37469,10.4687 130.09704,0.19531 175.01626,-5.4736c44.91922,-5.66892 49.93384,-12.28022 191.44685,-45.34647c141.51301,-33.06625 221.34662,-61.99188 426.81438,-59.4919c102.73388,1.24999 203.44102,29.65927 398.99543,109.88821c195.55441,80.22895 668.78972,-44.38181 814.0537,-9.88704c-76.25064,69.23438 407.49874,281.32592 331.2481,350.5603c-168.91731,29.52009 85.02254,247.61162 -83.89478,277.13171c84.07062,348.27313 -2948.95065,-242.40222 -2928.39024,-287.84045"></path>
        </svg>
        <div class="container position-relative z-index-1 pb-5 mb-5">
            <div class="custom-circle custom-circle-medium custom-circle-pos-17 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
                <div class="bg-color-quaternary rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-18 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="400">
                <div class="custom-bg-color-grey-1 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 2500}"></div>
            </div>
            <div class="custom-circle custom-circle-extra-small custom-circle-pos-19 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="600">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-8 text-center">
                <div class="overflow-hidden mb-2">
                    <h2 class="font-weight-bold text-color-quaternary text-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="350">{{$section_4?$section_4['judul']:'' }}</h2>
                </div>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"> {!!$section_4?$section_4['deskripsi']:'' !!}</p>
                </div>
            </div>
            <div class="row justify-content-center pb-2 mb-4">
                @foreach ($fiturs as $fitur)
                    <div class="col-md-4 col-12">
                        <div class="card border-0 custom-box-shadow-1 custom-border-radius-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-plugin-options="{'accY': -100}">
                            @if ($loop->first)
                                <div class="custom-dots-rect-3" style="background-image: url({{asset('landingpage/assets/img/dots-group-3.png')}});"></div>
                            @endif
                            <div class="card-body text-center p-5">
                            <h4 class="text-color-dark font-weight-semibold mb-3">{{$fitur->judul}}</h4>
                            <p>{{$fitur->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mb-4">
                <div class="col text-center">
                    <div class="overflow-hidden">
                        <a href="#" class="btn btn-secondary btn-outline btn-rounded font-weight-bold px-5 py-3 text-3 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">LIHAT SELENGKAPNYA (DOWNLOAD .PPT)</a>
                    </div>
                </div>
            </div>
            <div class="custom-circle custom-circle-big custom-circle-pos-20 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="200" data-appear-animation-duration="2s">
                <div class="bg-color-secondary rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 1, 'transition': true, 'transitionDuration': 2000}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-21 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="700" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-22 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1200" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-1 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 3000}"></div>
            </div>
            <div class="custom-circle custom-circle-extra-small custom-circle-pos-23 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1700" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1500}"></div>
            </div>
        </div>
    </section>

    <section class="section section-height-4 bg-color-quaternary position-relative border-0 pt-5 m-0">
        <svg class="custom-section-curved-top-4" width="100%" height="298" xmlns="http://www.w3.org/2000/svg">
            <path id="svg_2" fill="#171940" stroke="#000" stroke-width="0" d="m-16.68437,95.44889c0,0 5.33335,176.00075 660.00283,93.33373c327.33474,-41.33351 503.33549,15.3334 639.00274,35.66682c135.66725,20.33342 59.66691,9.66671 358.33487,28.33346c298.66795,18.66676 268.66829,-45.00088 382.66831,-112.00048c114.00002,-66.9996 718.31698,-59.48704 1221.66946,95.563c503.35248,155.05004 -221.83202,184.10564 -243.66935,197.60521c-21.83733,13.49958 -3008.67549,-19.83371 -3008.00467,-20.83335c-0.67082,0.99964 -30.00428,-232.33469 -10.00419,-317.66839z" class="svg-fill-color-quaternary"></path>
        </svg>
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-bold text-color-light text-7 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">{{$section_5?$section_5['judul']:'' }}</h2>
                    </div>
                    <div class="overflow-hidden mb-1">
                        <p class="lead text-color-light mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">{{$section_5?$section_5['sub_judul']:'' }}</p>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="text-color-light mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="550">{!!$section_5?$section_5['deskripsi']:'' !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <form class="custom-form-style-1 custom-form-simple-validation form-errors-light" action="../php/newsletter-subscribe.php" novalidate="novalidate">
                    <div class="row mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                    <div class="form-group col-md-6 pe-md-2">
                        <input type="text" class="form-control" value="" placeholder="Alamat Website" data-msg-required="Masukkan alamat website anda atau yang anda inginkan." required="">
                    </div>
                    <div class="form-group col-md-6 ps-md-2">
                        <input type="email" class="form-control" value="" placeholder="Alamat Email anda" data-msg-required="Masukkan alamat email anda." data-msg-email="Tolong masukkan format email yang benar." required="">
                    </div>
                    </div>
                    <div class="row justify-content-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850">
                    <div class="form-group col-auto mb-0">
                        <button type="submit" class="btn btn-gradient btn-rounded font-weight-bold px-5 py-3 text-3">KIRIM</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>

    <div class="container position-relative pb-lg-5 mb-5">
        <div class="custom-circle custom-circle-extra-small custom-circle-pos-24 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
            <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 2000}"></div>
        </div>
        <div class="custom-circle custom-circle-small custom-circle-pos-25 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="500">
            <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 3000}"></div>
        </div>
        <div class="custom-circle custom-circle-extra-small custom-circle-pos-26 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="800">
            <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'horizontal': true, 'transition': true, 'transitionDuration': 1500}"></div>
        </div>
        <div class="custom-circle custom-circle-extra-small custom-circle-pos-27 custom-bg-color-grey-2"></div>
            <div class="custom-circle custom-circle-extra-small custom-circle-pos-28 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1100">
            <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 2500}"></div>
        </div>
        <div class="custom-circle custom-circle-small custom-circle-pos-29 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1400">
            <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 3500}"></div>
        </div>
        <div class="custom-circle custom-circle-extra-small custom-circle-pos-30 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1700">
            <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 2000}"></div>
        </div>
        <div class="custom-dots-rect-4" style="background-image: url(https://razenteknologi.com/solusi/get-erp-razen/img/dots-group.png);"></div>
        <!-- <div class="row py-5 mt-5 mb-lg-3"><div class="col-lg-6 mb-5 mb-lg-0"><div class="custom-circles-group-1 counters pe-5 me-5"><div class="custom-circle custom-circle-big custom-circle-pos-31 bg-color-secondary"></div><div class="custom-circle custom-circle-small custom-circle-pos-32 custom-bg-color-grey-2"></div><div class="custom-circle custom-circle-medium custom-circle-pos-33 custom-bg-color-grey-1"></div><div class="custom-circle custom-circle-extra-small custom-circle-pos-34 custom-bg-color-grey-2"></div><div class="custom-circle custom-circle-medium custom-circle-pos-35 bg-color-quaternary"></div><div class="custom-circle custom-circle-small custom-circle-pos-36 custom-bg-color-grey-1"></div><div class="custom-circle custom-circle-big custom-circle-pos-37 bg-color-tertiary"></div><div class="custom-circle custom-circle-small custom-circle-pos-38 custom-bg-color-grey-2"></div><div class="custom-circle custom-circle-medium custom-circle-pos-39 custom-bg-color-grey-1"></div><div class="custom-circle custom-circle-extra-small custom-circle-pos-40 custom-bg-color-grey-2"></div><div class="circle-1 bg-color-secondary"><div class="counter"><strong class="text-color-light text-10 line-height-1" data-to="100" data-append="+">0</strong><label class="text-color-light text-4 mb-0">Clients</label></div></div><div class="circle-2 bg-color-tertiary"><div class="counter"><strong class="text-color-light text-10 line-height-1" data-to="1000" data-append="+">0</strong><label class="text-color-light text-4 mb-0">Projects</label></div></div><div class="circle-3 bg-color-quaternary"><div class="counter"><strong class="text-color-light text-10 line-height-1" data-to="10" data-append="+">0</strong><label class="text-color-light text-4 mb-0">Team Members</label></div></div></div></div><div class="col-lg-6"><h2 class="text-color-dark font-weight-semibold text-6 line-height-3 mb-0 pe-5 me-5">Lorem ipsum dolor sit amet, consec tetur adipiscing elit.</h2><span class="d-block mb-3 pb-2">THE EASIEST WAY</span><p class="lead font-weight-normal pe-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur.</p><div class="progress-bars custom-progress-bars-style-1 mt-4"><div class="progress-label"><span class="d-block text-3 mb-1">Better Performance</span></div><div class="progress mb-3"><span class="progress-bar-tooltip">95%</span><div class="progress-bar progress-bar-quaternary" data-appear-progress-animation="95%"></div></div><div class="progress-label"><span class="d-block text-3 mb-1">Average Improvements</span></div><div class="progress mb-3"><span class="progress-bar-tooltip">99%</span><div class="progress-bar progress-bar-quaternary" data-appear-progress-animation="99%" data-appear-animation-delay="300"></div></div><div class="progress-label"><span class="d-block text-3 mb-1">Customer Approval</span></div><div class="progress mb-3"><span class="progress-bar-tooltip">99%</span><div class="progress-bar progress-bar-quaternary" data-appear-progress-animation="99%" data-appear-animation-delay="600"></div></div></div></div></div> -->
        <div class="row">
            <div class="col">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="tabs tabs-bottom tabs-center tabs-simple">
                    <ul class="nav nav-tabs" role="tablist">
                        @foreach ($produks as $produk)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link @if($loop->first) active @endif" href="#tabsNavigationProduk{{$produk->id}}" data-bs-toggle="tab" @if($loop->first) aria-selected="true" @else aria-selected="false" tabindex="-1" @endif role="tab">
                                    <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                            <span class="box-content p-0 m-0">
                                                <i class="icon-featured {{$produk->ikon}}"></i>
                                            </span>
                                        </span>
                                    </span>
                                    <p class="mb-0 pb-0">{{$produk->judul}}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach ($produks as $produk)
                            <div class="tab-pane @if($loop->first) active @endif" id="tabsNavigationProduk{{$produk->id}}" role="tabpanel">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center">
                                            <p>{{$produk->deskripsi}}</p>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <a target="_blank" href="{{asset('images/razen-supportboard/produk/'.$produk->gambar)}}">
                                            <img src="{{asset('images/razen-supportboard/produk/'.$produk->gambar)}}" class="img-fluid position-relative z-index-1 pb-5 mb-5 ms-5 top-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-appear-animation-duration="1500ms" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-lg-4 pe-lg-0">
                <h2 class="text-color-dark font-weight-semibold text-6 line-height-3 mb-3">{{$section_6?$section_6['judul']:'' }}</h2>
                <p>{{$section_6?$section_6['deskripsi']:'' }}</p>
            </div>
            <div class="col-lg-8 ps-lg-4">
                <div class="owl-carousel custom-carousel-style-1 custom-carousel-dots-style-1" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '979': {'items': 2}, '1199': {'items': 2}}, 'margin': 0, 'loop': true, 'dots': true, 'nav': false, 'autoplay': true}">
                    @foreach ($testimonis as $testimoni)
                        <div>
                            <div class="testimonial testimonial-style-3 custom-testimonial-style-1">
                                <blockquote>
                                    <p class="mb-0">{{$testimoni->testimoni}}</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="{{asset('images/razen-supportboard/testimoni/'.$testimoni->gambar)}}" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p>
                                        <strong class="font-weight-semibold text-4 mb-1">{{$testimoni->nama}}</strong>
                                        <span class="text-2">{{$testimoni->jabatan}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="custom-circle custom-circle-medium custom-circle-pos-41 bg-color-quaternary"></div>
        <div class="custom-circle custom-circle-small custom-circle-pos-42 custom-bg-color-grey-1"></div>
        <div class="custom-circle custom-circle-extra-small custom-circle-pos-43 custom-bg-color-grey-2"></div>
    </div>

    <section class="section position-relative custom-bg-color-light-2 border-0 pt-4 m-0">
        <svg class="custom-section-curved-top-5" width="100%" height="284" xmlns="http://www.w3.org/2000/svg">
            <path id="svg_2" fill="#eff1f3" stroke="#000" stroke-width="0" d="m-30.75698,18.18081c99.6013,28.33304 337.54319,327.06425 868.97187,168.96887c265.71434,-79.04769 585.03969,-5.59538 690.67474,14.9602c105.63504,20.55559 381.87048,2.11063 555.67444,-75.27753c86.90199,-38.69407 736.04117,-78.60276 742.95015,12.26524c6.90898,90.86801 -66.08835,361.6009 -103.97283,363.40912c-37.88449,1.80823 -2793.7397,-55.67435 -2792.62804,-56.56315"></path>
        </svg>
        <div class="container position-relative z-index-1 pb-lg-4 mb-lg-5">
            <div class="custom-circle custom-circle-medium custom-circle-pos-44 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
                <div class="custom-bg-color-grey-1 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 3000}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-45 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="500">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 2000}"></div>
            </div>
            <div class="custom-circle custom-circle-extra-small custom-circle-pos-46 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="800">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element="" data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1500}"></div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-10 col-lg-8 text-center">
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-bold text-color-quaternary text-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">{{$section_7?$section_7['judul']:'' }}</h2>
                    </div>
                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">{{$section_7?$section_7['deskripsi']:'' }} </p>
                </div>
            </div>
            <div class="row pricing-table custom-pricing-table-style-1 justify-content-center mb-4">
                @foreach ($paket_hargas as $paket_harga)
                    <div class="col-md-8 col-lg-4">
                        <div class="plan text-center appear-animation @if($paket_harga->status_popular == 'ya') plan-featured bg-color-quaternary @endif" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">
                            @if ($loop->first)
                                <div class="custom-dots-rect-5" style="background-image: url({{asset('landingpage/assets/img/dots-group.png')}});"></div>
                            @endif
                            @if ($paket_harga->status_popular == 'ya')
                                <span class="plan-popular-tag text-color-light font-weight-bold">POPULAR</span>
                            @endif
                            @if ($paket_harga->status_popular == 'ya')
                                <div class="plan-header bg-color-quaternary pt-5 px-4">
                            @else
                                <div class="plan-header bg-color-light pt-5 px-4">
                            @endif
                                <h4 class="@if($paket_harga->status_popular == 'ya') text-color-light font-weight-bold @else text-color-dark font-weight-bold text-color-quaternary @endif text-5 mt-4 mb-2">{{$paket_harga->judul}}</h4>
                                <p class="@if($paket_harga->status_popular == 'ya') text-color-light font-weight-light @endif px-2 mb-0">{{$paket_harga->deskripsi}}</p>
                            </div>
                            <div class="plan-features px-4">
                                <ul>
                                    @php
                                        $get_pivot = PivotPaketHargaFitur::where('paket_harga_id', $paket_harga->id)->first();
                                        $pivot = [];
                                        if($get_pivot)
                                        {
                                            $pivot = [
                                                'status' => 'ada',
                                                'data' => PivotPaketHargaFitur::where('paket_harga_id', $paket_harga->id)->get()
                                            ];
                                        } else {
                                            $pivot = [
                                                'status' => 'tidak_ada',
                                                'data' => ''
                                            ];
                                        }
                                    @endphp
                                    @if ($pivot['status'] == 'ada')
                                        @foreach ($pivot['data'] as $item)
                                            <li @if($paket_harga->status_popular == 'ya') class="text-color-light" @endif>
                                                {{$item->deskripsi}}
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="plan-footer pt-3 pb-5">
                                <a href="kontak-kami.html" class="btn btn-secondary btn-outline btn-rounded font-weight-semibold px-5 py-3 text-3 mb-4">Pilih Paket</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
