@extends('layouts.plantilla')

@section('title')
Contacto - Dorado
@endsection


@section('main')
    <!-- Header section -->
<section id="header" class="header-four">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 ">
                    <div class="header-thumb">
                        <h1 class="wow fadeIn" data-wow-delay="0.6s">Contactanos</h1>
                        <!-- <h3 class="wow fadeInUp" data-wow-delay="0.9s">Vestibulum at aliquam lorem</h3> -->
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Contacto -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.9s">
                    <div class="google_map">
                        <!-- <div id="map-canvas">-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.9692873331064!2d-68.83288648525568!3d-32.89898027680599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e093f1bd17d95%3A0xcc1c4eeac60af041!2sDORADO%20CENTRO%20DE%20INVESTIGACION%20Y%20REHABILITACI%C3%93N%20INTEGRAL!5e0!3m2!1ses-419!2sar!4v1577461890627!5m2!1ses-419!2sar"
                            width="500" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        <!-- </div>-->
                    </div>
                </div>

                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.9s" style="background-color:white;">
                    <h1>Envianos tu mensaje!</h1>
                    <div class="contact-form">
                        <form id="contact-form" method="post" action="#">
                            <input name="name" type="text" class="form-control" placeholder="Tu nombre" required>
                            <input name="email" type="email" class="form-control" placeholder="Tu Email" required>
                            <textarea name="message" class="form-control" placeholder="Tu mensaje" rows="4" required></textarea>
                            <div class="contact-submit">
                                <input type="submit" class="form-control submit" value="Enviar mensaje">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-4 col-sm-4">
                    <div class="wow fadeInUp media" data-wow-delay="0.3s">
                        <div class="media-object pull-left">
                            <i class="fa fa-tablet"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Teléfono</h3>
                            <p>261 4310393</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="wow fadeInUp media" data-wow-delay="0.6s">
                        <div class="media-object pull-left">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Email</h3>
                            <p>info@dorado.com.ar</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="wow fadeInUp media" data-wow-delay="0.9s">
                        <div class="media-object pull-left">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Dirección</h3>
                            <p>Laprida 379, Dorrego. Guaymallén.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection