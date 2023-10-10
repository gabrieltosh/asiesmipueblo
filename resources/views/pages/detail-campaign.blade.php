@extends('layouts.layout')

@section('content')
    <section class="section novi-background section-20">
        <div class="container">
            <div class="row ustify-content-sm-center" style="margin-top: 0px !important">
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
                                @foreach ($campaigns as $campaign)
                                    <div class="card card-classic"><a
                                            class="card-header {{ $detail_id == $campaign->id ? '' : 'collapsed' }}"
                                            href="#" data-toggle="collapse"
                                            data-target="#accordion-1--card-{{ $campaign->id }}-content"
                                            id="accordion-1--card-{{ $campaign->id }}-header" aria-expanded="true"
                                            aria-controls="accordion-1--card-{{ $campaign->id }}-content"><strong>{{ $campaign->section->name }}</strong></a>
                                        <div class="collapse {{ $detail_id == $campaign->id ? 'show' : '' }}"
                                            id="accordion-1--card-{{ $campaign->id }}-content"
                                            aria-labelledby="accordion-1--card-{{ $campaign->id }}-header"
                                            data-parent="#accordion-1">
                                            <div class="container section-20">
                                                <div class="row ">
                                                    @if (count($campaign->files) == 0)
                                                        <div class="col-lg-12" style="width: 100%">
                                                        @else
                                                            <div class="col-lg-8" style="width: 100%">
                                                    @endif
                                                    <div class="inset-lg-right-20">
                                                        <!-- Blog Default Single-->
                                                        <section>
                                                            <!-- Post Event-->
                                                            <article class="post post-event">
                                                                <!-- Post media-->
                                                                <header class="post-media">
                                                                    @if ($campaign->type == 'video')
                                                                        <div
                                                                            class="embed-responsive embed-responsive-16by9">
                                                                            {!! $campaign->resource_name !!}
                                                                        </div>
                                                                    @endif
                                                                    @if ($campaign->type == 'image')
                                                                        <div data-lightgallery="group"><a
                                                                                class="thumbnail-classic"
                                                                                data-lightgallery="item"
                                                                                href="{{ asset('assets/images/campaign/' . $campaign->resource_name) }}">
                                                                                <figure><img width="570" height="321"
                                                                                        src="{{ asset('assets/images/campaign/' . $campaign->resource_name) }}"
                                                                                        alt="">
                                                                                </figure>
                                                                            </a>
                                                                    @endif
                                                                </header>
                                                                <!-- Post content-->
                                                                <section class="post-content text-left offset-top-20">
                                                                    <!-- Post Title-->
                                                                    <h4 class="offset-top-10"><strong>
                                                                            {{ $campaign->title }}</strong></h3>
                                                                        <!-- Post Body-->
                                                                        <div class="post-body">
                                                                            {!! $campaign->description !!}
                                                                        </div>
                                                                        <!-- Post meta-->
                                                                        <div class="post-meta context-dark">
                                                                            <time datetime="2023-02-27"><span
                                                                                    class="post-meta-day">{{ $campaign->campaign_date_day }}</span><span
                                                                                    class="big text-uppercase post-meta-month">{{ $campaign->campaign_date_month }}</span><span
                                                                                    class="big text-uppercase post-meta-month">{{ $campaign->campaign_date_year }}</span></time>
                                                                        </div>
                                                                </section>
                                                            </article>
                                                        </section>
                                                    </div>
                                                </div>
                                                @if (count($campaign->files) > 0)
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
                                                                                @foreach ($campaign->files as $file)
                                                                                    <div class="col-md-6"
                                                                                        style="padding:1px;margin:0px">
                                                                                        <a class="flickr-item thumbnail-classic"
                                                                                            data-lightgallery="item"
                                                                                            href="{{ asset('assets/images/campaign/' . $file->name) }}"
                                                                                            data-image_c="href"
                                                                                            data-type="flickr-item"><img
                                                                                                width="50"
                                                                                                height="50"
                                                                                                data-title="alt"
                                                                                                src="{{ asset('assets/images/campaign/' . $file->name) }}"
                                                                                                alt=""
                                                                                                data-image_q="src"></a>
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 d-none d-md-block" style="padding:0px;">
            <img src="{{ asset('assets/images/UrgeBo-350x600-Ani-23.jpg') }}" alt="" width="100%" style="margin-bottom: 10px;border-radius: 5px !important;">
                    <img src="{{ asset('assets/images/Arte350x450_0.jpg') }}" alt="" width="100%" style="margin-bottom: 10px;border-radius: 5px !important;">
            </div>
        </div>
        </div>
    </section>
@endsection
