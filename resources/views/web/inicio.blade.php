@extends('layouts.plantilla')

@section('canonical')
<link rel="canonical" href="https://www.dorado.com.ar/inicio">
@endsection

@section('title')
Inicio     |     Dorado
@endsection

@section('description')
<meta name="description" content="Somos un equipo de profesionales de la salud y la educación orientados al desempeño y aplicación de estrategias y programas inter y transdisicplinarios.">
@endsection

@section('main')
<!-- Header section -->
<section id="header" class="header-one">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 ">
               <div class="header-thumb">
                    <h1 class="wow fadeIn" data-wow-delay="0.3s">DORADO</h1>
                    <h3 class="wow fadeInUp" data-wow-delay="0.6s">Investigación, inclusión y diversidad</h3>
                   <!-- <h3 class="wow fadeInUp" data-wow-delay="0.6s">y Rehabilitación Integral</h3> -->
                </div>
            </div>

        </div>
    </div>
</section>
    <!-- novedades -->
    <section id="about">
   
        <div class="container">
            <div class="row d-flex justify-content-between">
            @foreach($novedades as $noticia)
                <div class="card mb-4 col-md-4 p-1">
                    
                    <div class="card-body">
                        <h4 class="card-title">{{$noticia->title}}</h5>
                        <h5 class="card-subtitle">{{$noticia->subtitle}}</h5>
                        <p class="card-text">{{$noticia->body}}</p>
                        
                    </div>
                    <img src="{{$noticia->file}}" class="card-img-top"  alt="" max-width="140px" max-heigth="140px">
                </div>
            @endforeach
            </div>
        </div>
        {{$novedades->render()}}
    </section>
    <!-- Portfolio section -->
<section id="portfolio">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">

                    <!-- iso section -->
                    <div class="iso-section wow fadeInUp" data-wow-delay="0.5s">


                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                            <div class="iso-box-wrapper col4-iso-box">

                                <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img src="../img/area-familia.webp" class="img-responsive " alt="area-familia">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="/area-familia"><i class="fa fa-link "></i></a>
                                                <h2>Área Familia</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic template col-md-4 col-sm-6 ">
                                    <div class="portfolio-thumb ">
                                        <img src="../img/inclusion-social.webp" class="img-responsive " alt="inclusion-social">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="/inclusion-social-y-educativa"><i class="fa fa-link "></i></a>
                                                <h2>Inclusión Social y educativa</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box template graphic col-md-4 col-sm-6 ">
                                    <div class="portfolio-thumb ">
                                        <img src="../img/prestaciones.webp" class="img-responsive " alt="prestaciones">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="#"><i class="fa fa-link "></i></a>
                                                <h2>Prestaciones de Apoyo</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic template col-md-4 col-sm-6 ">
                                    <div class="portfolio-thumb ">
                                        <img src="../img/taller-inclusivos.webp" class="img-responsive " alt="talleres-inclusivos">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="/talleres-inclusivos-de-acceso-universal"><i class="fa fa-link "></i></a>
                                                <h2>Talleres Inclusivos De Acceso Universal</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box photoshop branding col-md-4 col-sm-6 ">
                                    <div class="portfolio-thumb ">
                                        <img src="../img/investigacion.webp" class="img-responsive " alt="investigacion">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="/investigacion-y-estudios-objetivos"><i class="fa fa-link "></i></a>
                                                <h2>Investigación y Estudios Objetivos</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               <div class="iso-box graphic branding col-md-4 col-sm-6 ">
                                    <div class="portfolio-thumb ">
                                        <img src="../img/novedades.webp" class="img-responsive " alt="novedades">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="/novedades"><i class="fa fa-link "></i></a>
                                                <h2>Novedades</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection