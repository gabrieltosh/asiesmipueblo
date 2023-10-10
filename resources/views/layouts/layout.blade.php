<!DOCTYPE html>
<html lang="es">

<head>
    <title>Asi es mi pueblo</title>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="icon" href="{{ asset('assets/images/logo_ico.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:300,300italic,400,700,900%7CYesteryear">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 70%;
        }

        .carousel-caption h1,
        .carousel-caption h4 {
            margin: 0;
        }

        @keyframes zoomOut {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.2);
            }
        }

        .carousel-item img {
            animation: zoomOut 10s infinite alternate;
        }

        .carousel-item {
            width: 100%;
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }

        .carousel {
            width: 100%;
            height: 500px;
            /* Ancho deseado del carrusel */
            margin: 0 auto;
            /* Centrar horizontalmente el carrusel */
        }

        .custom-carousel img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .img-layout {
            width: 75px;
            height: 75px;
        }

        @media (max-width: 767px) {
            .carousel-caption h1 {
                font-size: 24px;
            }

            .carousel-caption h4 {
                font-size: 16px;
            }

            .img-layout {
                width: 40px;
                height: 40px;
            }
        }

        .modal {
            z-index: 2020;
            /* Asegúrate de que el z-index sea mayor que otros elementos de la página */
        }

        #botonZoom {
            animation: zoomAnimacion 1s ease infinite alternate !important;
            transform-style: preserve-3d !important;
            animation-timing-function: ease;
        }

        @keyframes zoomAnimacion {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.15);
            }

            100% {
                transform: scale(1);
            }
        }

        #botonZoom2 {
            animation: zoomAnimacion2 1.5s ease infinite alternate !important;
            transform-style: preserve-3d !important;
            animation-timing-function: ease;
        }

        @keyframes zoomAnimacion2 {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
    <div class="page text-center">
        @include('sections.header')

        @yield('content')

        @include('sections.footer')
    </div>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/revolution.min.js') }}"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0&appId=442371417264737&autoLogAppEvents=1"
        nonce="74umaDRq"></script>
    @yield('script')
</body>

</html>
