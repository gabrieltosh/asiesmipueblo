@extends('layouts.layout')

@section('content')
    <section class="section novi-background section-sm-30" style="margin-top:10px !important">
        <div class="container">
            <div class="row justify-content-sm-center" style="margin:5px 0px !important;">
                <div class="col-md-12" style="padding:0px;">
                    <img src="{{ asset('assets/images/publicidad2.gif') }}" alt="" width="100%" style=" border-radius: 5px;">
                </div>
            </div>
            <div class="row justify-content-sm-center" style="margin-top: 0px !important">
                <div class="col-md-12 " >
                    <div id="carouselExampleIndicators" class="carousel slide custom-carousel" data-ride="carousel" >
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" style="border-radius: 5px !important;">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('assets/images/wallpaper_3f.jpeg') }}"
                                    alt="First slide">
                                <div class="carousel-caption">
                                    <h1><span class="big text-uppercase">ASI ES MI PUEBLO</span></h1>
                                    <h4 class="text-light">
                                        Brinda ayuda a familias en extrema pobreza, mediante campañas solidarias en las que
                                        participa la población y se efectúan cada 15 días.
                                    </h4>
                                </div>
                            </div>
                            <div class="carousel-item" style="border-radius: 5px !important;">
                                <img class="d-block w-100" src="{{ asset('assets/images/wallpaper_2f.jpeg') }}"
                                    alt="Second slide">
                                <div class="carousel-caption">
                                    <h1><span class="big text-uppercase">ASI ES MI PUEBLO</span></h1>
                                    <h4 class="text-light">La labor social que realiza tiene más de diez años de vigencia en
                                        la urbe
                                        alteña y está enmarcada en los valores de respeto, responsabilidad y sensibilidad
                                        social.
                                    </h4>

                                </div>
                            </div>
                            <div class="carousel-item" style="border-radius: 5px !important;">
                                <img class="d-block w-100" src="{{ asset('assets/images/wallpaper_1f.jpeg') }}"
                                    alt="Third slide">
                                <div class="carousel-caption">
                                    <h1><span class="big text-uppercase">ASI ES MI PUEBLO</span></h1>
                                    <h4 class="text-light">La labor social que realiza tiene más de diez años de vigencia en
                                        la urbe
                                        alteña y está enmarcada en los valores de respeto, responsabilidad y sensibilidad
                                        social.
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-sm-center" style="margin:5px 0px !important;">
                <div class="col-md-12" style="padding:0px;">
                    <img src="{{ asset('assets/images/publicidad1.png') }}" alt="" width="100%" style="border-radius: 5px !important;">
                </div>
            </div>

            <div class="row justify-content-sm-center" style="margin:5px 0px !important;">
                <div class="col-md-12" style="background-color: #191919; padding: 40px 0px; border-radius: 5px !important;">
                    <div class="row justify-content-sm-center grid-group-md">
                        <div class="col-6 col-lg-3">
                            <!-- Counter type 2-->
                            <a href="{{ route('campaign_page') }}">
                                <div class="counter-type-2">
                                    <img src="{{ asset('assets/images/marketing.png') }}" alt="" class="img-layout">
                                    <div class="offset-xxl-top-10" style="margin-top: 10px;">
                                        <div class="h6 text-uppercase text-spacing-60 font-weight-bold">NUEVA
                                            CAMPAÑA</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-3">
                            <!-- Counter type 2-->
                            <a href="{{ route('campaign_page') }}">
                                <div class="counter-type-2"><img src="{{ asset('assets/images/newspaper4.png') }}"
                                        alt="" class="img-layout">
                                    <div class="offset-xxl-top-10" style="margin-top: 10px;">
                                        <div class="h6 text-uppercase text-spacing-60 font-weight-bold">LO ULTIMO
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-3">
                            <!-- Counter type 2-->
                            <a href="{{ route('campaign_page') }}">
                                <div class="counter-type-2"><img src="{{ asset('assets/images/newspaper3.png') }}"
                                        alt="" class="img-layout">
                                    <div class="offset-xxl-top-10" style="margin-top: 10px;">
                                        <div class="h6 text-uppercase text-spacing-60 font-weight-bold">LO MAS
                                            DESTACADO
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-lg-3">
                            <!-- Counter type 2-->
                            <a href="{{ route('campaign_page') }}">
                                <div class="counter-type-2"><img src="{{ asset('assets/images/live.png') }}"
                                        alt="" class="img-layout">
                                    <div class="offset-xxl-top-10" style="margin-top: 10px;">
                                        <div class="h6 text-uppercase text-spacing-60 font-weight-bold">EN VIVO
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade show" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered modal-md" role="document" >
                    <div class="modal-content" style="border-radius: 11px">
                        <div class=" position-relative">
                            <button type="button" class="close position-absolute  rounded-circle" data-dismiss="modal"
                                aria-label="Close" style="top: 15px; right: 15px; background-color: white; border: none;">
                                <span aria-hidden="true">&nbsp;&times;&nbsp; </span>
                            </button>
                            <img src="{{ asset('assets/images/publicidad5.gif') }}" alt="" width="100%" style="border-radius: 10px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript">
        $(window).load(function() {
            $('#exampleModalCenter').modal('show');
            var delayMs = 15500; // delay in milliseconds

            setTimeout(function() {
                $('#exampleModalCenter').modal('hide');
            }, delayMs);
            var carousel = document.getElementById('myCarousel');
        });
    </script>
@endsection
