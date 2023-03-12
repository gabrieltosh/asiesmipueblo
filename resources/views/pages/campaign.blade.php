@extends('layouts.layout')

@section('content')
    <section class="section novi-background section-20 section-sm-30">
        <div class="container">
            <div class="row justify-content-sm-center">
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
                                            class="text-middle icon-xxs novi-icon text-picton-blue mdi mdi-clock"></span>
                                        <time class="text-middle small" datetime="2023-01-18">Enero 18, 2023</time>
                                    </li>
                                    <li class="list-inline-item"><span
                                            class="text-middle icon-xxs novi-icon text-picton-blue mdi mdi-eye">&nbsp;</span><a
                                            class="text-middle small"
                                            href="blog-default-single-left-sidebar.html#comments">42<span>&nbsp;Vistas</span></a>
                                    </li>
                                </ul>
                                <!-- Post Meta-->
                                <h3 class="post-title"><a href="blog-default-single-left-sidebar.html#">Una madre pide ayuda para dar de comer a sus 6 hijos, su esposo y su hija están postrados en cama</a></h3>
                                <!-- Post Media-->
                                <div class="post-media offset-top-34">
                                    <header class="post-media">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fasiesmipueblo2025%2Fvideos%2F6393385867357465%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                                        </div>
                                    </header>
                                </div>
                            </div>
                            <section class="post-content offset-top-31 text-right">
                                <a
                                    class="offset-top-24 btn btn-default" href="{{route('detail-campaign')}}">Leer mas</a>
                            </section>
                        </article>
                        </div>
                        <hr class="hr offset-top-36">
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
