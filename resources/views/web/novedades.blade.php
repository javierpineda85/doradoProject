@extends('layouts.plantilla')

@section('title')
Novedades- Dorado
@endsection


@section('main')
<!-- Header section -->
<section id="header" class="header-five">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 ">
                    <div class="header-thumb">
                        <h1 class="wow fadeIn" data-wow-delay="0.6s">Novedades</h1>
                        <!-- <h3 class="wow fadeInUp" data-wow-delay="0.9s">Vestibulum at aliquam lorem</h3> -->
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- novedades -->
    <section id="about">
   
        <div class="container">
            <div class="row d-flex justify-content-around">
            @foreach($novedades as $noticia)
                <div class="card mb-5 col-md-5 m-1 p-1">
                    
                    <div class="card-body">
                        <h4 class="card-title">{{$noticia->title}}</h5>
                        <h5 class="card-subtitle">{{$noticia->subtitle}}</h5>
                        <p class="card-text">{{$noticia->body}}</p>
                        
                    </div>
                    <img src="{{$noticia->file}}" class="card-img-top"  alt="" max-width="150px" max-heigth="150px">
                </div>
            @endforeach
            </div>
        </div>
        {{$novedades->render()}}
    </section>
  
@endsection