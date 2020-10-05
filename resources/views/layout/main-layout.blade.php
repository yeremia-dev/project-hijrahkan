<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/logo2.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo2.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Hijrahkan
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('template/ui-kit/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/ui-kit/assets/css/now-ui-kit.css?v=1.3.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('template/ui-kit/assets/demo/demo.css') }}" rel="stylesheet" />

    @yield('style')

</head>

<body class="index-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-success fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/" rel="tooltip">
                <img src="{{ asset('img/logo2.png') }}" width="18px">
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/" onclick="scrollToDownload()">
                        <i class="fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentang-kami" onclick="scrollToDownload()">
                        <i class="fas fa-user"></i>
                        <p>Tentang Kami</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper">
    <div class="page-header clear-filter" filter-color="">
        <div class="page-header-image" data-parallax="true" style="background-image:url('{{ asset('img/bg-yerdev2.jpg') }}');">
        </div>
        <div class="container">
            @yield('content')
        </div>
    </div>
{{--    <footer class="footer" data-background-color="black">--}}
{{--        <div class=" container ">--}}
{{--            <nav>--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="https://www.creative-tim.com">--}}
{{--                            Creative Tim--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="http://presentation.creative-tim.com">--}}
{{--                            About Us--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="http://blog.creative-tim.com">--}}
{{--                            Blog--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--            <div class="copyright" id="copyright">--}}
{{--                &copy;--}}
{{--                <script>--}}
{{--                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))--}}
{{--                </script>, Designed by--}}
{{--                <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by--}}
{{--                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
</div>
<!--   Core JS Files   -->
<script src="{{ asset('template/ui-kit/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/ui-kit/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/ui-kit/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('template/ui-kit/assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('template/ui-kit/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ asset('template/ui-kit/assets/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('template/ui-kit/assets/js/now-ui-kit.js?v=1.3.0') }}" type="text/javascript"></script>


<script>
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>
</body>

</html>