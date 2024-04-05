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
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    {{--    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">--}}

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/project-slider.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css"
          integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>

        .boxHover:hover {
            -webkit-box-shadow: 0 -1px 16.5px 4.5px #ffde39;
            -moz-box-shadow: 0 -1px 16.5px 4.5px #ffde39;
            box-shadow: 0 -1px 16.5px 4.5px #ffde39;
            border-radius: 13px;
        }

        button.back-to-top {
            margin: 0 !important;
            padding: 0 !important;
            background: #fff;
            height: 0px;
            width: 0px;
            overflow: hidden;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            color: transparent;
            clear: both;
            visibility: hidden;
            position: fixed;
            cursor: pointer;
            display: block;
            border: none;
            right: 50px;
            bottom: 75px;
            font-size: 0px;
            outline: 0 !important;
            z-index: 99;
            -webkit-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        button.back-to-top:hover,
        button.back-to-top:active,
        button.back-to-top:focus {
            outline: 0 !important;
        }

        button.back-to-top::before,
        button.back-to-top::after {
            content: "";
            display: block;
            vertical-align: middle;
            border-bottom: solid 10px #EA5D5F;
            border-left: solid 10px transparent;
            line-height: 0;
            border-right: solid 10px transparent;
            height: 0;
            margin: 18px auto 0;
            width: 0;
            border-radius: 20px;
            visibility: hidden;
        }

        button.back-to-top.show::after,
        button.back-to-top.show::before {
            visibility: visible;
        }

        button.back-to-top::after {
            border-bottom-color: #fff;
            position: relative;
            top: -24px;
        }

        button.back-to-top.show {
            display: block;
            background: #fff;
            color: #00ab6c;
            font-size: 25px;
            right: 25px;
            bottom: 50px;
            height: 50px;
            width: 50px;
            visibility: visible;
            box-shadow: 0px 2px 4px 1px rgba(0, 0, 0, 0.25);
            -webkit-box-shadow: 0px 2px 4px 1px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0px 2px 4px 1px rgba(0, 0, 0, 0.25);
        }

        button.back-to-top.show:active {
            box-shadow: 0px 4px 8px 2px rgba(0, 0, 0, 0.25);
            -webkit-box-shadow: 0px 4px 8px 2px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0px 4px 8px 2px rgba(0, 0, 0, 0.25);
        }

        .tagcloud a:hover {
            border-color: yellow !important;
        }

        .cover-img img {
            max-width: 100%;
            object-fit: contain;
        }

        .card {
            position: relative;
            width: 350px;
            height: 290px;
            color: #2e2d31;
            background: #131313;
            overflow: hidden;
            border-radius: 20px;
        }

        .temporary_text {
            font-weight: bold;
            font-size: 24px;
            padding: 6px 12px;
            color: #f8f8f8;
        }

        .card_title {
            font-weight: bold;
        }

        .card_content {
            position: absolute;
            left: 0;
            bottom: 0;
            /* edit the width to fit card */
            width: 100%;
            padding: 20px;
            background: #fdd638;
            border-top-left-radius: 20px;
            /* edit here to change the height of the content box */
            transform: translateY(150px);
            transition: transform .25s;
        }

        .card_content::before {
            content: '';
            position: absolute;
            top: -47px;
            right: -45px;
            width: 100px;
            height: 100px;
            transform: rotate(-70deg);
            border-radius: 50%;
            box-shadow: inset 48px 48px #fe7e39;
        }

        .card_title {
            color: #131313;
            line-height: 15px;
        }

        .card_subtitle {
            display: block;
            font-size: 12px;
            margin-bottom: 10px;
        }

        .card_description {
            font-size: 14px;
            opacity: 0;
            transition: opacity .5s;
        }

        .card:hover .card_content {
            transform: translateY(0);
        }

        .card:hover .card_description {
            opacity: 1;
            transition-delay: .25s;
        }

        .footer {
            position: relative; /* Ensure the footer is positioned */
        }

        .svg-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: -1;
        }

    </style>
</head>
<body class="font-sans antialiased">

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
                    <h2 class="ftco-heading-2">About</h2>
                    <p class="ftco-animate">Hi! Nick here, your dedicated Laravel developer with a focus on crafting
                        seamless SaaS projects. Leveraging Laravel Filament, I ensure an intuitive admin experience.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.linkedin.com/in/nickzworld"><span
                                    class="icon-linkedin-square"></span></a></li>
                        <li class="ftco-animate "><a href="https://www.fiverr.com/nick022190" class="bg-primary"><img
                                    width="50" height="50" src="https://img.icons8.com/ios/50/fiverr--v2.png"
                                    alt="fiverr--v2"/></a></li>

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
                            <li><span class="icon icon-map-marker"></span><span class="text">Pasig, Metro Manila, Philippines</span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span
                                        class="text">+63 966 933 3429</span></a></li>
                            <li><a href="mailto:nick022190@gmail.com"><span class="icon icon-envelope"></span><span
                                        class="text">nick022190@gmail.com</span></a></li>
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


</script>
</html>
