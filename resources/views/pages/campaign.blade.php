@extends('layouts.layout')

@section('content')
    <section class="section novi-background section-20 section-sm-30">
        <div class="container">
            <div class="row justify-content-sm-center">
                @foreach ($campaigns as $campaign)
                    <div class="col-md-2">hola</div>
                    <div class="col-xl-8">
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
                                                    datetime="{{ $campaign->campaign_date }}">{{ $campaign->campaign_date_humans }}</time>
                                            </li>
                                            <li class="list-inline-item">
                                                <span
                                                    class="text-middle icon-xxs novi-icon text-picton-blue mdi mdi-eye">&nbsp;</span>{{$campaign->views}}<span>&nbsp;Vistas</span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="text-middle icon-xxs novi-icon text-picton-blue mdi mdi-view-list">&nbsp;</span><span>&nbsp;{{$campaign->section->name}}</span>
                                            </li>
                                        </ul>
                                        <!-- Post Meta-->
                                        <h3 class="post-title"><a
                                                href="{{ route('campaign_page.detail',[$campaign->campaign_id, $campaign->id]) }}">{{ $campaign->title }}</a>
                                        </h3>
                                        <!-- Post Media-->
                                        <div class="post-media offset-top-10">
                                            <header class="post-media">
                                                @if ($campaign->type === 'video')
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        {!! $campaign->resource_name !!}
                                                    </div>
                                                @endif
                                                @if ($campaign->type === 'image')
                                                    <div data-lightgallery="group"><a class="thumbnail-classic"
                                                            href="{{ route('campaign_page.detail',[$campaign->campaign_id,$campaign->id]) }}"
                                                            target="_self">
                                                            <figure><img width="570" height="200"
                                                                    src="{{ asset('assets/images/campaign/' . $campaign->resource_name) }}"
                                                                    alt="">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                @endif
                                            </header>
                                        </div>
                                    </div>
                                    <section class="post-content offset-top-31 text-right">
                                        <a class="offset-top-24 btn btn-default"
                                            href="{{ route('campaign_page.detail', [$campaign->campaign_id, $campaign->id]) }}">Leer mas</a>
                                    </section>
                                </article>
                            </div>
                            <hr class="hr offset-top-36">
                        </section>
                    </div>
                    <div class="col-md-2">hola</div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
