<header class="page-head">
    <!-- RD Navbar Transparent-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-logo-center rd-navbar-light" data-md-device-layout="rd-navbar-fixed"
            data-lg-device-layout="rd-navbar-static" data-lg-stick-up-offset="110px" data-lg-auto-height="true"
            data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
                <div class="container">
                    <div class="rd-navbar-top-block row justify-content-xl-center align-items-xl-center">
                        <div class="col-xs-3 col-xl-3 text-center">
                            <a href="https://www.facebook.com/asiesmipueblo2025" target="_blank"
                                style="background-color: #0165E1;color:white;"
                                class="btn btn-xs btn-icon btn-icon-left"><span
                                    class="icon novi-icon mdi mdi-facebook"></span>Asi es mi pueblo</a>
                        </div>
                        <div class="col-xs-3 col-xl-6 text-center">
                            <!--Navbar Brand-->
                            <div class="rd-navbar-brand" style="display:block !important;"><a href="index.html"><img
                                        style='margin-top: -5px;margin-left: -15px; ' width='270' height='46'
                                        src='{{ asset('assets/images/logo_h_1.png') }}' alt='' /></a></div>
                        </div>
                        <div class="col-xl-3 col-xl-3 text-center">
                                <a href="https://www.facebook.com/asiesmipueblo2025" target="_blank"
                                    style="background-color: red;color:white; width: 150px"
                                    class="btn btn-xs btn-icon btn-icon-left d-none d-xl-block" id="botonZoom2" ><span
                                        class="icon novi-icon mdi mdi-access-point" id="botonZoom" ></span>En Vivo</a>
                        </div>

                    </div>
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle"
                            data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Top Panel Toggle-->
                        <div>
                            <!--<a href="https://www.facebook.com/asiesmipueblo2025" target="_blank"
                            style="background-color: red;color:white; position: fixed; left:35%; top:10px "
                            class="btn btn-xs btn-icon btn-icon-left "><span
                                class="icon novi-icon mdi mdi-access-point"></span>En Vivo</a>-->
                            <a href="https://www.facebook.com/asiesmipueblo2025" target="_blank"
                            class="rd-navbar-search-toggle" style="right: 35px !important;"><span class="icon novi-icon mdi mdi-facebook" style="color:#0165E1;"></span></a>
                            <a href="https://www.facebook.com/asiesmipueblo2025" target="_blank"
                            class="rd-navbar-search-toggle" id="botonZoom" style="right: 0px !important;"><span class="icon novi-icon mdi mdi-access-point" style="color:red;"></span></a>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-menu-wrap">
                    <div class="container">
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-mobile-scroll">
                                <!--Navbar Brand Mobile-->
                                <div class="rd-navbar-mobile-brand"><a href="index.html"><img
                                            style='margin-top: -5px;margin-left: -15px;' width='190' height='150'
                                            src='{{ asset('assets/images/logo_v.png') }}' alt='' /></a></div>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a
                                            href="{{ route('home_page') }}"><span>Inicio</span></a>
                                    </li>
                                    <li class="{{ request()->is('campai') ? 'active' : '' }}"><a
                                            href="{{ route('breaking_news') }}"><span>Lo Ultimo</span></a>
                                    </li>
                                    <li class="{{ request()->is('campaig') ? 'active' : '' }}"><a
                                            href="{{ route('campaign_page') }}"><span>Lo mas Destacado</span></a>
                                    </li>
                                    <li class="{{ request()->is('campaign') ? 'active' : '' }}"><a
                                            href="{{ route('campaign_page') }}"><span>Campañas</span></a>
                                    </li>
                                    <li class="{{ request()->is('about_us') ? 'active' : '' }}"><a
                                            href="{{ route('about_us_page') }}"><span>Nosotros</span></a>
                                    </li>
                                    <li class="{{ request()->is('contact') ? 'active' : '' }}"><a
                                            href="{{ route('contact_page') }}"><span>Contactanos</span></a>
                                    </li>
                                    <!--request()->is('sites/*/edit')-->
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
