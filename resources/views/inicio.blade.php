@extends('layouts.plantilla')

@section('title')
Inicio - Dorado
@endsection


@section('main')
<!-- Header section -->
<section id="header" class="header-one">
    <div class="container">
        <div class="row">

            <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
               <div class="header-thumb">
                    <h1 class="wow fadeIn" data-wow-delay="1.6s">DORADO</h1>
                    <h3 class="wow fadeInUp" data-wow-delay="1.9s">Centro de investigación</h3>
                    <h3 class="wow fadeInUp" data-wow-delay="1.9s">y Rehabilitación Integral</h3>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- Portfolio section -->
<section id="portfolio">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">

                    <!-- iso section -->
                    <div class="iso-section wow fadeInUp" data-wow-delay="1s">

                        <ul class="filter-wrapper clearfix">
                            <li><a href="#">Talleres</a></li>
                            <li><a href="#">Terápias</a></li>
                            <li><a href="#">Artes</a></li>
                            <li><a href="#">Salidas</a></li>
                            <li><a href="#">Especialidades</a></li>
                        </ul>

                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1.5s">
                            <div class="iso-box-wrapper col4-iso-box">

                                <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                    <div class="portfolio-thumb">
                                        <img src="https://picsum.photos/500/500" class="img-responsive " alt="Portfolio ">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="single-project.html "><i class="fa fa-link "></i></a>
                                                <h2>Projecto Uno</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic template col-md-4 col-sm-6 ">
                                    <div class="portfolio-thumb ">
                                        <img src="http://picsum.photos/500/500" class="img-responsive " alt="Portfolio ">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="single-project.html "><i class="fa fa-link "></i></a>
                                                <h2>Projecto Dos</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box template graphic col-md-4 col-sm-6 ">
                                    <div class="portfolio-thumb ">
                                        <img src="http://picsum.photos/500/500" class="img-responsive " alt="Portfolio ">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="single-project.html "><i class="fa fa-link "></i></a>
                                                <h2>Projecto Tres</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic template col-md-4 col-sm-6 ">
                                    <div class="portfolio-thumb ">
                                        <img src="http://picsum.photos/500/500" class="img-responsive " alt="Portfolio ">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="single-project.html "><i class="fa fa-link "></i></a>
                                                <h2>Projecto Cuatro</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box photoshop branding col-md-4 col-sm-6 ">
                                    <div class="portfolio-thumb ">
                                        <img src="http://picsum.photos/500/500" class="img-responsive " alt="Portfolio ">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="single-project.html "><i class="fa fa-link "></i></a>
                                                <h2>Projecto Cinco</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="iso-box graphic branding col-md-4 col-sm-6 ">
                                    <div class="portfolio-thumb ">
                                        <img src="http://picsum.photos/500/500" class="img-responsive " alt="Portfolio ">
                                        <div class="portfolio-overlay ">
                                            <div class="portfolio-item ">
                                                <a href="single-project.html "><i class="fa fa-link "></i></a>
                                                <h2>Projecto Seis</h2>
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