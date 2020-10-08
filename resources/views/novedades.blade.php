@extends('layouts.plantilla')

@section('title')
Nosotros - Dorado
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

                <div class="card mb-3 col-md-5 m-2 p-2">
                    <img src="http://lorempixel.com/300/300/" class="card-img-top"  alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">Curabitur scelerisque varius condimentum. Duis mattis ante feugiat venenatis sagittis. Nullam tincidunt hendrerit tortor. Aliquam ac tortor et sem tincidunt venenatis quis imperdiet nisl. Aliquam sagittis nibh erat, sed dapibus sapien porta commodo. Fusce nec laoreet tortor, nec convallis odio. Vivamus purus orci, pretium id placerat quis, laoreet nec lacus. Pellentesque metus enim, vulputate a enim id, blandit elementum purus. In hac habitasse platea dictumst. Donec sapien neque, posuere vitae viverra id, auctor a lorem. Cras dictum arcu in iaculis tincidunt.</p>
                        
                    </div>
                </div>
                <div class="card mb-3 col-md-5 m-2 p-2">
                    <img src="http://lorempixel.com/300/300/" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title bold">Título</h5>
                        <p class="card-text">Curabitur scelerisque varius condimentum. Duis mattis ante feugiat venenatis sagittis. Nullam tincidunt hendrerit tortor. Aliquam ac tortor et sem tincidunt venenatis quis imperdiet nisl. Aliquam sagittis nibh erat, sed dapibus sapien porta commodo. Fusce nec laoreet tortor, nec convallis odio. Vivamus purus orci, pretium id placerat quis, laoreet nec lacus. Pellentesque metus enim, vulputate a enim id, blandit elementum purus. In hac habitasse platea dictumst. Donec sapien neque, posuere vitae viverra id, auctor a lorem. Cras dictum arcu in iaculis tincidunt.</p>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection