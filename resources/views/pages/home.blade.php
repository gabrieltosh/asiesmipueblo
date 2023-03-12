@extends('layouts.layout')

@section('content')

<div class="rev_slider_wrapper--holder">
    <div class="rev_slider_wrapper fullscreen-container context-dark">
      <!-- the ID here will be used in the JavaScript below to initialize the slider-->
      <div class="rev_slider fullscreenbanner" id="rev_slider_1" style="display:none">
        <!-- BEGIN MAIN SLIDE LIST-->
        <ul>
          <li data-transition="zoomout"><img class="rev-slidebg rev-slidebg" data-bgposition="center center" data-kenburns="on" data-duration="w" data-ease="Linear.easeNone" data-scalestart="140" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15" src="{{asset('assets/images/wallpaper_3f.jpeg')}}" alt="Sky">
            <div class="tp-caption" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-height="100%" data-type="row" data-columnbreak="2" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:400,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']" style="z-index: 9; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
              <div class="tp-caption" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-type="column" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;opacity:1;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                <div class="container">
                  <div class="row justify-content-sm-center align-items-sm-center">
                    <div class="col-xl-10">
                      <div class="tp-caption" data-fontsize="['62', '48', '36', '28']" data-type="text" data-lineheight="['68', '44', '42', '34']" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-frames="[{&quot;delay&quot;:&quot;+400&quot;,&quot;speed&quot;:1700,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:250px;opacity:0;fb:50px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                        <h1><span class="big text-uppercase">ASI ES MI PUEBLO</span></h1>
                      </div>
                      <div class="d-none d-md-block offset-top-30 tp-caption" data-visibility="['on', 'on', 'off', 'off']" data-type="text" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-frames="[{&quot;delay&quot;:&quot;600&quot;,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:250px;opacity:0;fb:50px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                        <h4 class="text-light">
                            Brinda ayuda a familias en extrema pobreza, mediante campañas solidarias en las que participa la población y se efectúan cada 15 días.
                        </h4>
                      </div>
                      <!--<div class="tp-caption" data-whitespace="['normal', 'normal', 'nowrap', 'normal']" data-type="text" data-fontsize="['inherit', 'inherit', 'inherit', 'inherit']" data-lineheight="['inherit', 'inherit', 'inherit', 'inherit']" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-frames="[{&quot;delay&quot;:&quot;700&quot;,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:250px;opacity:0;fb:50px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                        <div class="group group-xl offset-top-20 offset-sm-top-50"><a style="background-color: #2364AA;border-color: #2364AA" class="btn btn-primary btn-lg btn-anis-effect" href="//documentation.zemez.io/html/bootstrap/intense/" target="_blank"><span class="btn-text">Buy intense now</span></a><a class="btn btn-default btn-lg btn-anis-effect" href="#" data-waypoint-to="#section-childs"><span class="btn-text">Start a journey</span></a></div>
                      </div>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li data-transition="zoomout"><img class="rev-slidebg rev-slidebg" data-bgposition="center center" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="140" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15" src="{{asset('assets/images/wallpaper_2f.jpeg')}}" alt="Sky">
            <div class="tp-caption" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-height="100%" data-type="row" data-columnbreak="2" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:400,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']">
              <div class="tp-caption" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-type="column" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;opacity:1;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                <div class="container">
                  <div class="row justify-content-sm-center align-items-sm-center">
                    <div class="col-xl-12">
                      <div class="tp-caption" data-fontsize="['62', '48', '36', '28']" data-type="text" data-lineheight="['68', '44', '42', '34']" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-frames="[{&quot;delay&quot;:&quot;+400&quot;,&quot;speed&quot;:1700,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:250px;opacity:0;fb:50px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                        <h1><span class="big text-uppercase">ASI ES MI PUEBLO</span></h1>
                      </div>
                      <div class="d-none d-md-block offset-top-30 tp-caption" data-visibility="['on', 'on', 'off', 'off']" data-type="text" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-frames="[{&quot;delay&quot;:&quot;600&quot;,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:250px;opacity:0;fb:50px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                        <h4 class="text-light">La labor social que realiza tiene más de diez años de vigencia en la urbe alteña y está enmarcada en los valores de respeto, responsabilidad y sensibilidad social. </h4>
                      </div>
                       <!--<div class="tp-caption" data-whitespace="['normal', 'normal', 'nowrap', 'normal']" data-type="text" data-fontsize="['inherit', 'inherit', 'inherit', 'inherit']" data-lineheight="['inherit', 'inherit', 'inherit', 'inherit']" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-frames="[{&quot;delay&quot;:&quot;700&quot;,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:250px;opacity:0;fb:50px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                        <div class="group group-xl offset-top-20 offset-sm-top-50"><a class="btn btn-default btn-lg btn-anis-effect" href="index.html#section-childs"><span class="btn-text">Discover child themes</span></a></div>
                      </div>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li data-transition="zoomout"><img class="rev-slidebg rev-slidebg" data-bgposition="center center" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="140" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15" src="{{asset('assets/images/wallpaper_1f.jpeg')}}" alt="Sky">
            <div class="tp-caption" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-height="100%" data-type="row" data-columnbreak="2" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:400,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="['inherit','inherit','inherit','inherit']">
              <div class="tp-caption" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-type="column" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;opacity:1;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                <div class="container">
                  <div class="row justify-content-sm-center align-items-sm-center">
                    <div class="col-xl-12">
                      <div class="tp-caption" data-fontsize="['62', '48', '36', '28']" data-type="text" data-lineheight="['68', '44', '42', '34']" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-frames="[{&quot;delay&quot;:&quot;+400&quot;,&quot;speed&quot;:1700,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:250px;opacity:0;fb:50px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                        <h1><span class="big text-uppercase">ASI ES MI PUEBLO</span></h1>
                      </div>
                      <div class="d-none d-md-block offset-top-30 tp-caption" data-visibility="['on', 'on', 'off', 'off']" data-type="text" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-frames="[{&quot;delay&quot;:&quot;600&quot;,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:250px;opacity:0;fb:50px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                        <h4 class="text-light">La labor social que realiza tiene más de diez años de vigencia en la urbe alteña y está enmarcada en los valores de respeto, responsabilidad y sensibilidad social. </h4>
                      </div>
                       <!--<div class="tp-caption" data-whitespace="['normal', 'normal', 'nowrap', 'normal']" data-type="text" data-fontsize="['inherit', 'inherit', 'inherit', 'inherit']" data-lineheight="['inherit', 'inherit', 'inherit', 'inherit']" data-y="['center','center','center','center']" data-x="['center','center','center','center']" data-frames="[{&quot;delay&quot;:&quot;700&quot;,&quot;speed&quot;:2000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:250px;opacity:0;fb:50px;&quot;,&quot;to&quot;:&quot;o:1;fb:0;&quot;,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:400,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;fb:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]">
                        <div class="group group-xl offset-top-20 offset-sm-top-50"><a class="btn btn-default btn-lg btn-anis-effect" href="index.html#section-childs"><span class="btn-text">Discover child themes</span></a></div>
                      </div>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

@endsection
