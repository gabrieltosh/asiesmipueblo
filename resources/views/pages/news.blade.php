@extends('layouts.layout')

@section('content')
    <section class="section novi-background section-sm-30" style="margin-top:10px !important">
        <div class="container">
            <div class="row justify-content-sm-center" style="margin-top: 0px !important;margin-bottom: 10px;">
                <div class="col-md-12">
                    <img src="{{ asset('assets/images/publicidad2.gif') }}" alt="" width="100%" style="border-radius: 5px !important;">
                </div>
            </div>
            <div class="row justify-content-sm-center" style="margin-top: 0px !important">
                <div class="col-md-10">
                    <div class="row justify-content-sm-center" style="margin-top:0px !important">
                        @foreach ($news as $new)
                            <div class="col-xl-12" >
                                <!-- Blog Default Single-->
                                <section>
                                    <!-- Post Wide-->
                                    <div class="offset-top-36">

                                        <article class="post post-default text-left">
                                            <!-- Post Header-->
                                            <div class="header post-header">
                                                <!-- Post Meta-->
                                                <ul class="post-controls list-inline list-inline-sm p text-dark">
                                                    <li class="list-inline-item"><span
                                                            class="text-middle icon-xxs novi-icon text-picton-blue mdi mdi-timer"></span>
                                                        <time class="text-middle small"
                                                            datetime="{{ $new->new_date }}">{{ $new->new_date_humans }}</time>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <span
                                                            class="text-middle icon-xxs novi-icon text-picton-blue mdi mdi-eye">&nbsp;</span>{{$new->views}}<span>&nbsp;Vistas</span>
                                                    </li>

                                                </ul>
                                                <!-- Post Meta-->
                                                <h3 class="post-title"><a
                                                        href="{{ route('news.detail',[$new->id]) }}">{{ $new->title }}</a>
                                                </h3>
                                                <!-- Post Media-->
                                                <div class="post-media offset-top-10">
                                                    <header class="post-media">
                                                        @if ($new->type === 'video')
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                {!! $new->resource_name !!}
                                                            </div>
                                                        @endif
                                                        @if ($new->type === 'image')
                                                            <div data-lightgallery="group"><a class="thumbnail-classic"
                                                                    href="{{ route('news.detail',[$new->id]) }}"
                                                                    target="_self">
                                                                    <figure><img width="570" height="200"
                                                                            src="{{ asset('assets/images/news/' . $new->resource_name) }}"
                                                                            alt="">
                                                                    </figure>
                                                                </a>
                                                            </div>
                                                        @endif
                                                    </header>
                                                </div>
                                            </div>
                                            <section class="post-content offset-top-31 text-right">
                                                <a class="btn btn-default" style="margin-top:10px !important;"
                                                    href="{{ route('news.detail', [$new->id]) }}">Leer mas</a>
                                            </section>
                                        </article>
                                    </div>
                                    <hr class="hr" style="margin-top:10px !important">
                                </section>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-2 d-none d-md-block">
                    <img src="{{ asset('assets/images/UrgeBo-350x600-Ani-23.jpg') }}" alt="" width="100%" style="margin-bottom: 10px;border-radius: 5px !important;">
                    <img src="{{ asset('assets/images/Arte350x450_0.jpg') }}" alt="" width="100%" style="margin-bottom: 10px;border-radius: 5px !important;">
                </div>
            </div>

        </div>
    </section>
@endsection
