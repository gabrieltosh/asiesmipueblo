@extends('layouts.layout')

@section('content')
    <section class="section novi-background section-20">
        <div class="container">
            <div class="row justify-content-sm-center" style="margin-top: 0px !important">

                <div class="col-md-10">
                    <div class="row justify-content-sm-center" style="margin-top: 0px !important">
                        <div class="col-md-12">
                            <img src="{{ asset('assets/images/publicidad2.gif') }}" alt="" width="100%">
                        </div>
                    </div>
                    <div class="row justify-content-md-center text-left" style="margin-top: 10px !important">
                        <div class="col-md-12 col-lg-12">
                            <!-- Bootstrap Accordion-->
                            <div class="offset-top-0" role="tablist" aria-multiselectable="true" id="accordion-1">
                                <div class="container section-20">
                                    <div class="row justify-content-sm-center">
                                        @if (count($new->files) == 0)
                                            <div class="col-lg-12">
                                            @else
                                                <div class="col-lg-8">
                                        @endif
                                        <div class="inset-lg-right-20">
                                            <!-- Blog Default Single-->
                                            <section>
                                                <!-- Post Event-->
                                                <article class="post post-event">
                                                    <!-- Post media-->
                                                    <header class="post-media">
                                                        @if ($new->type == 'video')
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                {!! $new->resource_name !!}
                                                            </div>
                                                        @endif
                                                        @if ($new->type == 'image')
                                                            <div data-lightgallery="group"><a class="thumbnail-classic"
                                                                    data-lightgallery="item"
                                                                    href="{{ asset('assets/images/news/' . $new->resource_name) }}">
                                                                    <figure><img width="570" height="321"
                                                                            src="{{ asset('assets/images/news/' . $new->resource_name) }}"
                                                                            alt="">
                                                                    </figure>
                                                                </a>
                                                        @endif
                                                    </header>
                                                    <!-- Post content-->
                                                    <section class="post-content text-left offset-top-20">
                                                        <!-- Post Title-->
                                                        <h4 class="offset-top-10"><strong>
                                                                {{ $new->title }}</strong></h3>
                                                            <!-- Post Body-->
                                                            <div class="post-body">
                                                                {!! $new->description !!}
                                                            </div>
                                                            <!-- Post meta-->
                                                            <div class="post-meta context-dark">
                                                                <time datetime="2023-02-27"><span
                                                                        class="post-meta-day">{{ $new->campaign_date_day }}</span><span
                                                                        class="big text-uppercase post-meta-month">{{ $new->campaign_date_month }}</span><span
                                                                        class="big text-uppercase post-meta-month">{{ $new->campaign_date_year }}</span></time>
                                                            </div>
                                                    </section>
                                                </article>
                                            </section>
                                        </div>
                                    </div>
                                    @if (count($new->files) > 0)
                                        <div class="col-lg-4 col-xl-4 offset-top-66 offset-lg-top-0">
                                            <!-- Section Blog Events-->
                                            <aside class="text-left">
                                                <h6 class=" text-uppercase text-spacing-60">Imagenes</h6>
                                                <div class="text-subline"></div>
                                                <div class="offset-top-34">
                                                    <div class="group-xs " data-lightgallery="group"
                                                        data-flickr-tags="tm58888_landscapes">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="row">
                                                                    @foreach ($new->files as $file)
                                                                        <div class="col-md-6"
                                                                            style="padding:1px;margin:0px">

                                                                            <a class="flickr-item thumbnail-classic"
                                                                                data-lightgallery="item"
                                                                                href="{{ asset('assets/images/news/' . $file->name) }}"
                                                                                data-image_c="href"
                                                                                data-type="flickr-item"><img width="90"
                                                                                    height="90" data-title="alt"
                                                                                    src="{{ asset('assets/images/news/' . $file->name) }}"
                                                                                    alt="" data-image_q="src"></a>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 d-none d-md-block" style="padding:0px;">
                <img src="{{ asset('assets/images/UrgeBo-350x600-Ani-23.jpg') }}" alt="" width="100%" style="margin-bottom: 10px;border-radius: 5px !important;">
                <img src="{{ asset('assets/images/Arte350x450_0.jpg') }}" alt="" width="100%" style="margin-bottom: 10px;border-radius: 5px !important;">
            </div>
        </div>

    </section>
@endsection
