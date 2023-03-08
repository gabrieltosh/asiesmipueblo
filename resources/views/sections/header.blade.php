<header class="page-head">
    <!-- RD Navbar Transparent-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar-static rd-navbar-logo-center rd-navbar-light" data-md-device-layout="rd-navbar-fixed"
            data-lg-device-layout="rd-navbar-static" data-lg-stick-up-offset="110px" data-lg-auto-height="true"
            data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
                <div class="container">
                    <div class="rd-navbar-top-block row justify-content-xl-center align-items-xl-center">
                        <div class="col-xl-3">
                            <p class="d-none d-xl-block">Llamanos: <span class="novi-icon mdi mdi-phone"></span> <a
                                    href="tel:#">1-800-1234-567</a></p>
                        </div>
                        <div class="col-xl-6 text-center">
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand"><a href="index.html"><img
                                        style='margin-top: -5px;margin-left: -15px;' width='350' height='90'
                                        src='{{asset("assets/images/logo_h.png")}}' alt='' /></a></div>
                        </div>
                        <div class="col-xl-3">
                            <div class="form-search-wrap">
                                <!-- RD Search Form-->
                                <!--<form class="form-search rd-search" action="search-results.html" method="GET">
                                    <div class="form-group">
                                        <label class="form-label form-search-label form-label-sm"
                                            for="rd-navbar-form-search-widget">Search</label>
                                        <input
                                            class="form-search-input input-sm form-control form-control-gray-lightest input-sm"
                                            id="rd-navbar-form-search-widget" type="text" name="s"
                                            autocomplete="off">
                                    </div>
                                    <button class="form-search-submit" type="submit"><span
                                            class="novi-icon mdi mdi-magnify"></span></button>
                                </form>-->
                            </div>
                        </div>
                    </div>
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle"
                            data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Top Panel Toggle-->
                        <button class="rd-navbar-search-toggle"
                            data-rd-navbar-toggle=".rd-navbar, .form-search-wrap"><span></span></button>
                    </div>
                </div>
                <div class="rd-navbar-menu-wrap">
                    <div class="container">
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-mobile-scroll">
                                <!--Navbar Brand Mobile-->
                                <div class="rd-navbar-mobile-brand"><a href="index.html"><img
                                            style='margin-top: -5px;margin-left: -15px;' width='138' height='31'
                                            src='images/intense/logo-dark.png' alt='' /></a></div>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="{{route('home_page')}}"><span>Inicio</span></a>
                                    </li>
                                    <li><a class="new" href="{{route('campaign_page')}}"><span>Campañas</span></a>
                                    </li>
                                    <li><a href="{{route('about_us_page')}}"><span>Nosotros</span></a>
                                    </li>
                                    <li><a href="{{route('contact_page')}}"><span>Contactanos</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--Swiper-->
</header>
