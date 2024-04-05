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
    <link rel="shortcut icon" href="https://img.icons8.com/external-goofy-flat-kerismaker/96/external-Portfolio-graphic-design-goofy-flat-kerismaker.png" type="image/x-icon">

    <link rel="canonical" href="https://ph.linkedin.com/in/nickzworld">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        .boxHover:hover{
            -webkit-box-shadow: 0 -1px 16.5px 4.5px #ffde39;
            -moz-box-shadow: 0 -1px 16.5px 4.5px #ffde39;
            box-shadow: 0 -1px 16.5px 4.5px #ffde39;
            border-radius: 13px;
        }

        button.back-to-top{
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
        button.back-to-top:focus,{
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
            border-radius:20px;
            visibility: hidden;
        }
        button.back-to-top.show::after,
        button.back-to-top.show::before{
            visibility: visible;
        }
        button.back-to-top::after {
            border-bottom-color:#fff;
            position: relative;
            top:-24px;
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
    </style>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-50">

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
</div>


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // Back to top
    var amountScrolled = 200;
    var amountScrolledNav = 25;

    $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
            $('button.back-to-top').addClass('show');
        } else {
            $('button.back-to-top').removeClass('show');
        }
    });

    $('button.back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 500, 'easeInOutExpo'); // You can change the easing function for smoother scrolling
        return false;
    });
</script>
</body>
</html>
