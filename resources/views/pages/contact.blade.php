@extends('layouts.layout')

@section('content')
    <div class="bg-black context-dark parallax-container" data-parallax-img="{{asset('assets/images/wallpaper_3f.jpeg')}}">
        <div class="parallax-content">
            <div class="container">
                <div
                    class="section-110 section-cover row justify-content-lg-center align-items-lg-center justify-content-xxl-end">
                    <div class="col-lg-12 col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-lg-6 col-xxl-6 text-lg-left text-xxl-center">
                                <h3 class="text-uppercase font-weight-bold">Como encontranos</h3>
                                <hr class="divider hr-xl-left-0 bg-mantis">
                                <p>Si tienes alguna pregunta, solo llena el formulario de contacto, y nosotros de contestaremos inmediatamente. Si tu vives cerca visitanos.</p>
                                <address class="contact-info offset-top-50">
                                  <p class="h6 text-uppercase font-weight-bold text-picton-blue letter-space-none offset-top-none">Nuestra dirección</p>
                                  <p>Bolivar s/n (al lado de la parroquia Cuerpo de Cristo) zona Villa Adela, El Alto, 591 La Paz, Bolivia</p>
                                  <p class="h6 text-uppercase font-weight-bold text-picton-blue letter-space-none offset-top-none">Llamanos</p>
                                  <p><a href="tel:77500190">77500190</a>&nbsp;&nbsp;&nbsp;<a href="tel:71926270">71926270</a></p>
                                  <p class="h6 text-uppercase font-weight-bold text-picton-blue letter-space-none offset-top-none">Escribenos al Whatsapp</p>
                                  <p>
                                    <a target="_blank" href="https://wa.me/59171926270?text=Hola!!%20necesito%20informacion%20acerca%20del%20programa" class="btn btn-xs btn-primary btn-icon btn-icon-left"><span class="icon novi-icon mdi mdi-whatsapp"></span>+591 71926270</a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a target="_blank" href="https://wa.me/59177500190?text=Hola!!%20necesito%20informacion%20acerca%20del%20programa" class="btn btn-xs btn-primary btn-icon btn-icon-left"><span class="icon novi-icon mdi mdi-whatsapp"></span>+591 77500190</a>
                                  </p>
                                  <p class="h6 text-uppercase font-weight-bold text-picton-blue letter-space-none offset-top-none">Correo</p>
                                  <p><a href="mailto:contacto@asiesmipueblo.com.bo">contacto@asiesmipueblo.com.bo</a></p>
                                </address>
                            </div>
                            <div class="col-lg-6 col-xxl-6 offset-md-top-66">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-6 col-lg-8">
                                        <!-- RD Mailform-->
                                        <form class="rd-mailform text-left" data-form-output="form-output-global"
                                            data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                            <div class="form-group">
                                                <label class="form-label" for="form-reg-name">Nombre</label>
                                                <input class="form-control" id="form-reg-name" type="text"
                                                    data-constraints="@Required" name="name">
                                            </div>
                                            <div class="form-group offset-top-20 offset-md-top-30">
                                                <label class="form-label" for="form-reg-email">Correo Electronico</label>
                                                <input class="form-control" id="form-reg-email" type="email"
                                                    data-constraints="@Required @Email" name="email">
                                            </div>
                                            <div class="form-group offset-top-20 offset-md-top-30">
                                                <label class="form-label" for="contact-us-message">Mensaje</label>
                                                <textarea class="form-control" id="contact-us-message" name="message" data-constraints="@Required"></textarea>
                                            </div>
                                            <div class="group offset-top-30">
                                                <div class="group-item element-fullwidth">
                                                    <button class="btn btn-block btn-deluge" type="submit">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="google-map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1858.1152959547096!2d-68.21150591249635!3d-16.519818462835342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s57MHFQHQ%2BR65!5e0!3m2!1sen!2sbo!4v1678233653269!5m2!1sen!2sbo" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
