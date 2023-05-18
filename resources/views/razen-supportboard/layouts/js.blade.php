<!-- Vendor Scripts Start -->
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/OverlayScrollbars.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/autoComplete.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/clamp.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/icon/acorn-icons.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/icon/acorn-icons-interface.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/icon/acorn-icons-learning.js') }}"></script>

<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/glide.min.js') }}"></script>

<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/Chart.bundle.min.js') }}"></script>

<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/jquery.barrating.min.js') }}"></script>

<!-- Vendor Scripts End -->

<!-- Template Base Scripts Start -->
<script src="{{ asset('acorn/acorn-elearning-portal/js/base/helpers.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/base/globals.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/base/nav.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/base/search.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/base/settings.js') }}"></script>
<!-- Template Base Scripts End -->
<!-- Page Specific Scripts Start -->

<script src="{{ asset('acorn/acorn-elearning-portal/js/cs/glide.custom.js') }}"></script>

<script src="{{ asset('acorn/acorn-elearning-portal/js/cs/charts.extend.js') }}"></script>

<script src="{{ asset('acorn/acorn-elearning-portal/js/pages/dashboard.elearning.js') }}"></script>

<script src="{{ asset('acorn/acorn-elearning-portal/js/common.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/scripts.js') }}"></script>
<!-- Page Specific Scripts End -->
<script>
    const settings = new Settings({
        @if (Auth::guard('razen_supportboard')->check())
            attributes: {
                color: "{{Auth::guard('razen_supportboard')->user()->color_layout?Auth::guard('razen_supportboard')->user()->color_layout:'light-blue'}}",
                navcolor: "{{Auth::guard('razen_supportboard')->user()->nav_color?Auth::guard('razen_supportboard')->user()->nav_color:'light'}}",
                behaviour: "{{Auth::guard('razen_supportboard')->user()->behaviour?Auth::guard('razen_supportboard')->user()->behaviour:'pinned'}}",
                layout: "{{Auth::guard('razen_supportboard')->user()->layout?Auth::guard('razen_supportboard')->user()->layout:'fluid'}}",
                radius: "{{Auth::guard('razen_supportboard')->user()->radius?Auth::guard('razen_supportboard')->user()->radius:'flat'}}",
                placement: "{{Auth::guard('razen_supportboard')->user()->placement?Auth::guard('razen_supportboard')->user()->placement:'vertical'}}",
            }
        @endif
    });
    $('.option').click(function(){
        // var color_layout =  $('a[data-parent="color"]').attr('data-value');
        // var nav_color = $('a[data-parent="navcolor"]').attr('data-value');
        // var behaviour = $('a[data-parent="behaviour"]').attr('data-value');
        // var radius = $('a[data-parent="radius"]').attr('data-value');
        var color_layout =  $('#color a.option.active').attr('data-value');
        var nav_color = $('#navcolor a.option.active').attr('data-value');
        var behaviour = $('#behaviour a.option.active').attr('data-value');
        var layout = $('#layout a.option.active').attr('data-value');
        var radius = $('#radius a.option.active').attr('data-value');
        var placement = $('#placement a.option.active').attr('data-value');
        $.ajax({
            url: "{{ route('razen-supportboard.admin.dashboard.change') }}",
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                color_layout: color_layout,
                nav_color: nav_color,
                layout: layout,
                behaviour: behaviour,
                radius:radius,
                placement:placement
            }
        });
    });
</script>
@yield('js')
