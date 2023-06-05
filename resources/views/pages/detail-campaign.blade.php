@extends('layouts.layout')

@section('content')
    <section class="section novi-background section-20 section-md-top-41">
        <div class="container">
            <div class="row justify-content-md-center text-left">
                <div class="col-md-2">hola</div>
                <div class="col-md-8 col-lg-10">
                    <!-- Bootstrap Accordion-->
                    <div class="offset-top-0" role="tablist" aria-multiselectable="true" id="accordion-1">
                        @foreach ($campaigns as $campaign)
                            <div class="card card-classic"><a
                                    class="card-header {{ $detail_id == $campaign->id ? '' : 'collapsed' }}" href="#"
                                    data-toggle="collapse" data-target="#accordion-1--card-{{ $campaign->id }}-content"
                                    id="accordion-1--card-{{ $campaign->id }}-header" aria-expanded="true"
                                    aria-controls="accordion-1--card-{{ $campaign->id }}-content"><strong>{{ $campaign->section->name }}</strong></a>
                                <div class="collapse {{ $detail_id == $campaign->id ? 'show' : '' }}"
                                    id="accordion-1--card-{{ $campaign->id }}-content"
                                    aria-labelledby="accordion-1--card-{{ $campaign->id }}-header"
                                    data-parent="#accordion-1">
                                    <div class="container section-20">
                                        <div class="row justify-content-sm-center">
                                            @if (count($campaign->files) == 0)
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
                                                            @if ($campaign->type == 'video')
                                                                <div class="embed-responsive embed-responsive-16by9">
                                                                    {!! $campaign->resource_name !!}
                                                                </div>
                                                            @endif
                                                            @if ($campaign->type == 'image')
                                                                <div data-lightgallery="group"><a class="thumbnail-classic"
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
                                            <div class="col-lg-4 col-xl-3 offset-top-66 offset-lg-top-0">
                                                <!-- Section Blog Events-->
                                                <aside class="text-left">
                                                    <h6 class=" text-uppercase text-spacing-60">Imagenes</h6>
                                                    <div class="text-subline"></div>
                                                    <div class="offset-top-34">
                                                        <div class="group-xs " data-lightgallery="group"
                                                            data-flickr-tags="tm58888_landscapes">
                                                            @foreach ($campaign->files as $file)
                                                                <a class="flickr-item thumbnail-classic"
                                                                    data-lightgallery="item"
                                                                    href="{{ asset('assets/images/campaign/' . $file->name) }}"
                                                                    data-image_c="href" data-type="flickr-item"><img
                                                                        width="90" height="90" data-title="alt"
                                                                        src="{{ asset('assets/images/campaign/' . $file->name) }}"
                                                                        alt="" data-image_q="src"></a>
                                                            @endforeach

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
    </section>
@endsection
