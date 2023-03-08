@extends('layouts.layout')

@section('content')
    <section class="section novi-background section-98 section-sm-110">
        <div class="container">
            <h2>Eliser Nemesio Roca Tancara</h2>
            <h3><strong>Licenciado en Comunicación Social</strong></h3>
            <hr class="divider bg-mantis">
            <!-- About Me-->
            <section>
                <div class="row justify-content-sm-center offset-top-66">
                    <div class="col-xl-5 text-xl-right"><img class="img-fluid d-block mx-auto"
                            src="{{ asset('assets/images/about_me_2.jpeg') }}" width="437" height="437" alt=""
                            style="border-radius:12px !important;">
                        <div class="row justify-content-sm-center offset-top-34">
                            <div class="col-md-8 col-lg-6 col-xl-12">
                              <!--  <div class="inset-sm-left-80 inset-sm-right-80"><a class="btn btn-lg btn-block btn-primary"
                                        href="contact-me.html">get in touch</a></div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 text-left col-lg-9 offset-top-41 col-xl-5 offset-xl-top-0">
                        <div class="inset-md-left-30">
                            <p>Director y conductor del programa independiente de televisión, Así Es mi Pueblo, que se emite
                                por Canal 57.1 CVC, Tele Estrella y redes sociales, desde la ciudad de El Alto – Bolivia.
                            </p>
                            <p>Desde hace más de 10 años demostró su vocación de ayuda solidaria al prójimo, a través de una
                                labor de investigación periodística visibilizó a centenares de familias en extrema pobreza,
                                por las que realizó masivas campañas, mismas que tuvieron amplia repercusión a nivel
                                nacional e internacional. </p>
                            <p>Desarrolló su labor periodística principalmente en la ciudad de El Alto, desde el año 1992
                                hasta la fecha (31 años), empezó como locutor del programa Amanecer Tricolor que se difundió
                                en cadena a través de las radios Altiplano, Emisoras Unidas y Continental. Fue camarógrafo,
                                editor, periodista y codirector de la Red Paceña de Comunicaciones y Transmisiones Tricolor.
                                Trabajo como encargado de relaciones públicas y prensa, jefe de Unidad y Director de
                                Comunicación en diferentes instituciones públicas de Bolivia. </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section
        class="section novi-background section-top-98 section-sm-top-110 section-sm-bottom-110 section-lg-top-66 section-bottom-98 section-lg-bottom-0 bg-lightest">
        <div class="container">
            <div class="row justify-content-md-center align-items-lg-center">
                <div class="col-xl-5 d-none d-xl-inline-block"><img class="img-fluid" width="470" height="770"
                        src="{{ asset('assets/images/about_me_1.jpeg') }}" alt=""></div>
                <div class="col-md-10 col-xl-5 section-lg-bottom-50">
                    <h2>Eliser Nemesio Roca Tancara</h2>
                    <h3><strong>Licenciado en Comunicación Social</strong></h3>
                    <hr class="divider bg-mantis">
                    <div class="offset-top-66 offset-xl-top-50">
                        <!-- Icon Box Type 2-->
                        <div class="unit unit-sm flex-md-row text-md-left">
                            <div class="unit-left"><span class="icon novi-icon text-gray mdi mdi-monitor"></span></div>
                            <div class="unit-body">

                                <p>Director y conductor del programa independiente de televisión, Así Es mi Pueblo, que se emite
                                    por Canal 57.1 CVC, Tele Estrella y redes sociales, desde la ciudad de El Alto – Bolivia.
                                </p>
                            </div>
                        </div>
                        <div class="offset-top-66 offset-xl-top-34">
                            <!-- Icon Box Type 2-->
                            <div class="unit unit-sm flex-md-row text-md-left">
                                <div class="unit-left"><span class="icon novi-icon text-gray mdi mdi-newspaper"></span>
                                </div>
                                <div class="unit-body">

                                    <p>Desde hace más de 10 años demostró su vocación de ayuda solidaria al prójimo, a través de una
                                        labor de investigación periodística visibilizó a centenares de familias en extrema pobreza,
                                        por las que realizó masivas campañas, mismas que tuvieron amplia repercusión a nivel
                                        nacional e internacional. </p>
                                </div>
                            </div>
                        </div>
                        <div class="offset-top-66 offset-xl-top-34">
                            <!-- Icon Box Type 2-->
                            <div class="unit unit-sm flex-md-row text-md-left">
                                <div class="unit-left"><span class="icon novi-icon text-gray mdi mdi-newspaper"></span>
                                </div>
                                <div class="unit-body">

                                    <p>Desarrolló su labor periodística principalmente en la ciudad de El Alto, desde el año 1992
                                        hasta la fecha (31 años), empezó como locutor del programa Amanecer Tricolor que se difundió
                                        en cadena a través de las radios Altiplano, Emisoras Unidas y Continental. Fue camarógrafo,
                                        editor, periodista y codirector de la Red Paceña de Comunicaciones y Transmisiones Tricolor.
                                        Trabajo como encargado de relaciones públicas y prensa, jefe de Unidad y Director de
                                        Comunicación en diferentes instituciones públicas de Bolivia. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section novi-background section-98 section-sm-110">
        <div class="container">
          <h1>Nuestro Equipo</h1>
          <hr class="divider bg-mantis">
          <div class="row justify-content-sm-center text-center text-lg-left offset-top-66">
            <div class="col-md-5 col-lg-3"><img class="img-fluid d-inline-block" src="{{asset('assets/images/about_us_profile_1.jpeg')}}" width="270" height="270" alt="">
              <div class="text-lg-left offset-top-20">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="team-member.html">Lic. Susy Sonia Brañez Apaza</a></h5>
                </div>
              </div>
              <address class="contact-info text-lg-left">
                <ul class="list-unstyled p">
                  <li class="d-block"><span class="icon novi-icon icon-xxs mdi mdi-account text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">Conductora y periodista</a>
                  </li>
                </ul>
              </address>
            </div>
          </div>
          <div class="row justify-content-sm-center text-center text-lg-left offset-top-66">
            <div class="col-md-5 col-lg-3 offset-top-50 offset-md-top-0"><img class="img-fluid d-inline-block" src="{{asset('assets/images/about_us_profile_2.jpeg')}}" width="270" height="270" alt="">
              <div class="text-lg-left offset-top-20">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="team-member.html">Rafael Tarqui Sotomayor</a></h5>
                </div>
              </div>
              <address class="contact-info text-lg-left">
                <ul class="list-unstyled p">
                    <li class="d-block"><span class="icon novi-icon icon-xxs mdi mdi-account text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">Jefe de Piso 2</a>
                    </li>
                </ul>
              </address>
            </div>
            <div class="col-md-5 col-lg-3 offset-top-50 offset-lg-top-0"><img class="img-fluid d-inline-block" src="{{asset('assets/images/about_us_profile_3f.jpeg')}}" width="270" height="270" alt="">
              <div class="text-lg-left offset-top-20">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="team-member.html">Freddy Tarqui Ticona</a></h5>
                </div>
              </div>
              <address class="contact-info text-lg-left">
                <ul class="list-unstyled p">
                    <li class="d-block"><span class="icon novi-icon icon-xxs mdi mdi-account text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">Fotógrafo</a>
                    </li>
                </ul>
              </address>
            </div>
            <div class="col-md-5 col-lg-3 offset-top-50 offset-lg-top-0"><img class="img-fluid d-inline-block" src="{{asset('assets/images/about_us_profile_4.jpeg')}}" width="270" height="270" alt="">
              <div class="text-lg-left offset-top-20">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="team-member.html">Monica Sotomayor Quintela</a></h5>
                </div>
              </div>
              <address class="contact-info text-lg-left">
                <ul class="list-unstyled p">
                    <li class="d-block"><span class="icon novi-icon icon-xxs mdi mdi-account text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">Asis. de Coordinación General</a>
                    </li>
                </ul>
              </address>
            </div>
            <div class="col-md-5 col-lg-3 offset-top-50 offset-lg-top-0"><img class="img-fluid d-inline-block" src="{{asset('assets/images/about_us_profile_5f.jpeg')}}" width="270" height="270" alt="">
              <div class="text-lg-left offset-top-20">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="team-member.html">Wara Tarqui Sotomayor</a></h5>
                </div>
              </div>
              <address class="contact-info text-lg-left">
                <ul class="list-unstyled p">
                    <li class="d-block"><span class="icon novi-icon icon-xxs mdi mdi-account text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">Asistente 1</a>
                    </li>
                </ul>
              </address>
            </div>
            <div class="col-md-5 col-lg-3 offset-top-50 "><img class="img-fluid d-inline-block" src="{{asset('assets/images/about_us_profile_6.jpeg')}}" width="270" height="270" alt="">
              <div class="text-lg-left offset-top-20">
                <div>
                  <h5 class="font-weight-bold text-primary"><a href="team-member.html">Ramiro Santos Choque Cruz</a></h5>
                </div>
              </div>
              <address class="contact-info text-lg-left">
                <ul class="list-unstyled p">
                    <li class="d-block"><span class="icon novi-icon icon-xxs mdi mdi-account text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">Camarógrafo</a>
                    </li>
                </ul>
              </address>
            </div>
            <div class="col-md-5 col-lg-3 offset-top-50 "><img class="img-fluid d-inline-block" src="{{asset('assets/images/about_us_profile_7.jpeg')}}" width="270" height="270" alt="">
                <div class="text-lg-left offset-top-20">
                  <div>
                    <h5 class="font-weight-bold text-primary"><a href="team-member.html">Gary Roque Quispe</a></h5>
                  </div>
                </div>
                <address class="contact-info text-lg-left">
                  <ul class="list-unstyled p">
                      <li class="d-block"><span class="icon novi-icon icon-xxs mdi mdi-account text-middle"></span> <a class="d-inline-block text-middle" href="tel:1-800-7650-986">Post Productor</a>
                      </li>
                  </ul>
                </address>
              </div>
          </div>
        </div>
      </section>
@endsection