@extends('layouts.layout')

@section('content')

    <div class="swiper-container swiper-slider" data-loop="true" data-height="100vh" data-dragable="false"
        data-min-height="480px">
        <div class="swiper-wrapper text-center">
            <div class="swiper-slide" id="page-loader" data-slide-bg="images/intros/intro-04-1920x955.jpg"
                data-preview-bg="images/intros/intro-04-1920x955.jpg">
                <div class="swiper-caption swiper-parallax">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-xl-center">
                                <div class="col-xl-12">
                                    <h1><span class="big text-uppercase" data-caption-animate="fadeInUp"
                                            data-caption-delay="700">ASI ES MI PUEBLO</span></h1>
                                </div>
                                <div class="col-xl-10 offset-top-30">
                                    <h4 class="d-none d-md-block text-light" data-caption-animate="fadeInUp"
                                        data-caption-delay="900">
                                        The smartest and most flexible bootstrap template by TemplateMonster you've ever
                                        seen.
                                        Create exactly what you need with our powerful bootstrap toolkit.
                                    </h4>
                                    <div class="group group-xl offset-top-20 offset-sm-top-50"><a
                                            class="btn btn-primary btn-lg btn-anis-effect"
                                            href="//documentation.zemez.io/html/bootstrap/intense/" target="_blank"
                                            data-caption-animate="fadeInUp" data-caption-delay="1200"><span
                                                class="btn-text">Buy intense now</span></a><a
                                            class="btn btn-default btn-lg btn-anis-effect" href="#"
                                            data-custom-scroll-to="home-section-welcome"
                                            data-caption-animate="fadeInUp" data-caption-delay="1200"><span
                                                class="btn-text">Start a journey</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-preview-bg="video/intro-video/intro-video-lg.jpg">
                <div class="bg-vide" data-vide-bg="video/intro-video/intro-video-lg"
                    data-vide-options="posterType: jpg">
                    <div class="swiper-caption swiper-parallax">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row justify-content-xl-center">
                                    <div class="col-xl-12">
                                        <h1><span class="big text-uppercase" data-caption-animate="fadeInUp"
                                                data-caption-delay="700">Built as a framework</span></h1>
                                    </div>
                                    <div class="col-xl-10 offset-top-30">
                                        <h4 class="d-none d-md-block text-light" data-caption-animate="fadeInUp"
                                            data-caption-delay="900">
                                            Intense was designed as extended version of bootstrap, built as a complex
                                            and flexible solution with a dozen of completely new
                                            utilities, components and plugins.
                                        </h4>
                                        <div class="group group-xl offset-top-20 offset-sm-top-50"><a
                                                class="btn btn-icon btn-icon-left btn-default btn-lg btn-anis-effect"
                                                href="ui-kit.html" data-caption-animate="fadeInUp"
                                                data-caption-delay="1200"><span class="btn-text">See it in
                                                    action</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/intros/intro-06-1920x955.jpg"
                data-preview-bg="images/intros/intro-06-1920x955.jpg">
                <div class="swiper-caption swiper-parallax">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row justify-content-xl-center">
                                <div class="col-xl-12">
                                    <h1><span class="big text-uppercase" data-caption-animate="fadeInUp"
                                            data-caption-delay="700">ULTRA sharp & RESPONSIVE</span></h1>
                                </div>
                                <div class="col-xl-10 offset-top-30">
                                    <h4 class="d-none d-md-block text-light offset-bottom-0"
                                        data-caption-animate="fadeInUp" data-caption-delay="900">
                                        Beautiful and clean designs are optimized for all screen sizes
                                        and types. Taste a new meaning of Retina Ready.
                                    </h4>
                                    <div class="group group-xl offset-top-20 offset-sm-top-50"><a
                                            class="btn btn-icon btn-icon-left btn-primary btn-lg btn-anis-effect"
                                            href="//documentation.zemez.io/html/bootstrap/intense/" target="_blank"
                                            data-caption-animate="fadeInUp" data-caption-delay="1200"><span
                                                class="novi-icon icon mdi mdi-cart-outline"></span><span
                                                class="btn-text">Buy intense now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button swiper-button-prev swiper-parallax">
            <div class="preview">
                <div class="preview__img preview__img-3"></div>
                <div class="preview__img preview__img-2"></div>
                <div class="preview__img preview__img-1"></div>
            </div>
        </div>
        <div class="swiper-button swiper-button-next swiper-parallax">
            <div class="preview">
                <div class="preview__img preview__img-1"></div>
                <div class="preview__img preview__img-2"></div>
                <div class="preview__img preview__img-3"></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

@endsection
