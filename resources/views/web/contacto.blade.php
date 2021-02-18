@extends('layouts.plantilla')

@section('canonical')
<link rel="canonical" href="https://www.dorado.com.ar/contacto">
@endsection

@section('title')
Contacto     |     Dorado
@endsection

@section('description')
<meta name="description" content="Nos podrás contactar por estos medios. Queremos estar cerca tuyo para poder asesorarte.">
@endsection

@section('main')
    <!-- Header section -->
<section id="header" class="header-four">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 ">
                    <div class="header-thumb">
                        <h1 class="wow fadeIn" data-wow-delay="0.3s">Contactanos</h1>
                        <h3 class="wow fadeInUp" data-wow-delay="0.5s">Sabemos que puerta vas a elegir</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Contacto -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.7s">
                    <div class="google_map">
                        <!-- <div id="map-canvas">-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.9692873331064!2d-68.83288648525568!3d-32.89898027680599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e093f1bd17d95%3A0xcc1c4eeac60af041!2sDORADO%20CENTRO%20DE%20INVESTIGACION%20Y%20REHABILITACI%C3%93N%20INTEGRAL!5e0!3m2!1ses-419!2sar!4v1577461890627!5m2!1ses-419!2sar"
                            width="500" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        <!-- </div>-->
                    </div>
                </div>

                <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.7s" style="background-color:white;">
                    <h1 class="p-3">Envianos tu mensaje!</h1>
                    <div class="contact-form p-3">
                        <form id="contact-form" method="post" action="#">
                            @csrf
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
                            <i class="fab fa-whatsapp-square" style="font-size: 30px;"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Teléfono</h3>
                            
                            <p><a href="https://wa.me/+5492613634997?text=Me%20gustaría%20conocer%20más%20sobre%20ustedes">2613634997</a></p>
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
                            <p><a href="mailto:info@dorado.com.ar?subject=Mensaje%20de%20la%20web&body=Hola!%20Me%20gustar%C3%ADa%20conocer%20m%C3%A1s%20sobre%20ustedes!">info@dorado.com.ar</a></p>
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
                            <p>Laprida 379, Dorrego. Guaymallén. Mendoza</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection