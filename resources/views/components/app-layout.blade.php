@props(['about', 'cvfile'])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Romnick Sevilla Porfolio') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Romnick Sevilla - Portfolio, Romnick Sevilla portfolio">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Linkedin">
    <meta name="twitter:title" content="Romnick Sevilla - Philippines | Propesyunal na Profile | LinkedIn">

    <meta property="profile:first_name" content="Romnick">
    <meta property="profile:last_name" content="Sevilla">
    <meta property="og:url" content="https://ph.linkedin.com/in/nickzworld">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="shortcut icon"
          href="https://img.icons8.com/external-goofy-flat-kerismaker/96/external-Portfolio-graphic-design-goofy-flat-kerismaker.png"
          type="image/x-icon">

    <link rel="canonical" href="https://ph.linkedin.com/in/nickzworld">

    {{--    <link rel="stylesheet"--}}
    {{--          href="https://cdn.jsdelivr.net/npm/@forevolve/bootstrap-dark@1.0.0/dist/css/toggle-bootstrap-dark.min.css"/>--}}

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/project-slider.css') }}">

 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

</head>
<body class="font-sans antialiased">
<button class="back-to-top" type="button"></button>
@include('layouts.navigation')

<!-- Page Heading -->
@if (isset($header))
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
@endif

<!-- Page Content -->
<main>
    {{ $slot }}
</main>


<footer class="ftco-footer ftco-section ftco-animate">
    <div class="container">
        <div class="row">
            <div class="col-md mb-5">
                <div class="ftco-footer-widget">
                    <p class="ftco-animate">{{ $about->introFooter }}</p>
                    <h2 class="ftco-heading-2">Let's Connect</h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        @if(!empty($about->facebook))
                            <li class="ftco-animate">
                                <a target="_blank" href="{{ $about->facebook }}">
                                    <span class="icon-facebook"></span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($about->linkedIn))
                            <li class="ftco-animate">
                                <a target="_blank" href="{{ $about->linkedIn }}">
                                    <span class="icon-linkedin-square"></span>
                                </a>
                            </li>
                        @endif


                    </ul>
                </div>
            </div>

            <div class="col-md mb-5">
                <div class="ftco-footer-widget mb-4 ml-md-4 ftco-animate" id="ftco-nav">
                    <h2 class="ftco-heading-2">Quick Links</h2>
                    <ul class="list-unstyled ftco-animate">
                        <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="#resume-experience"><span class="icon-long-arrow-right mr-2"></span>Experience</a>
                        </li>
                        <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="#skills-section"><span class="icon-long-arrow-right mr-2"></span>Skills</a></li>
                        <li><a href="#projects-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a>
                        </li>
                        <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md mb-5">
                <div class="ftco-footer-widget ftco-animate">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span
                                    class="text">{{ $about->address }}</span>
                            </li>
                            <li><a href="tel:{{ $about->mobile }}"><span class="icon icon-phone"></span><span
                                        class="text">{{ $about->mobile }}</span></a></li>
                            <li><a href="mailto:{{ $about->email }}"><span class="icon icon-envelope"></span><span
                                        class="text">{{ $about->email }}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    NickzRivers &copy;
                    <script>document.write(new Date().getFullYear());</script>
                </p>
            </div>
        </div>
    </div>
    <div class="svg-container">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%"
             viewBox="0 160 1600 900" preserveAspectRatio="xMidYMax slice">
            <defs>
                <linearGradient id="bg">
                    <stop offset="0%" style="stop-color:rgba(240, 255, 0, 0.09)"></stop>
                    <stop offset="50%" style="stop-color:rgba(255, 240, 0, 0.3)"></stop>
                    <stop offset="100%" style="stop-color:rgba(245, 230, 83, 0.62)"></stop>
                </linearGradient>
                <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
	s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z"/>
            </defs>
            <g>
                <use xlink:href='#wave' opacity=".3">
                    <animateTransform
                        attributeName="transform"
                        attributeType="XML"
                        type="translate"
                        dur="10s"
                        calcMode="spline"
                        values="270 230; -334 180; 270 230"
                        keyTimes="0; .5; 1"
                        keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                        repeatCount="indefinite"/>
                </use>
                <use xlink:href='#wave' opacity=".6">
                    <animateTransform
                        attributeName="transform"
                        attributeType="XML"
                        type="translate"
                        dur="8s"
                        calcMode="spline"
                        values="-270 230;243 220;-270 230"
                        keyTimes="0; .6; 1"
                        keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                        repeatCount="indefinite"/>
                </use>
                <use xlink:href='#wave' opacty=".9">
                    <animateTransform
                        attributeName="transform"
                        attributeType="XML"
                        type="translate"
                        dur="6s"
                        calcMode="spline"
                        values="0 230;-140 200;0 230"
                        keyTimes="0; .4; 1"
                        keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                        repeatCount="indefinite"/>
                </use>
            </g>
        </svg>

    </div>

</footer>

</body>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script id="rendered-js">
    var swiper = new Swiper('.blog-slider', {
        spaceBetween: 10,
        effect: 'fade',
        loop: true,
        autoplay: true,
        navigation: {
            nextEl: '.slider-button-next',
            prevEl: '.slider-button-prev',
        },
        autoHeight: true,
        pagination: {
            el: '.blog-slider__pagination',
            clickable: false
        }
    });


</script>
<script>
    // Back to top
    var amountScrolled = 200;
    var amountScrolledNav = 25;

    $(window).scroll(function () {
        if ($(window).scrollTop() > amountScrolled) {
            $('button.back-to-top').addClass('show');
        } else {
            $('button.back-to-top').removeClass('show');
        }
    });

    $('button.back-to-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 500, 'easeInOutExpo'); // You can change the easing function for smoother scrolling
        return false;
    });


    const chk = $('#chk');
    chk.on('change', function () {
        $('body').toggleClass('dark');

    });

    // SOCIAL PANEL JS
    const floating_btn = $('.floating-btn');
    const close_btn = $('.close-btn');
    const social_panel_container = $('.social-panel-container');

    floating_btn.on('click', function () {
        social_panel_container.toggleClass('visible');
    });

    close_btn.on('click', function () {
        social_panel_container.removeClass('visible');

    })

</script>
</html>
