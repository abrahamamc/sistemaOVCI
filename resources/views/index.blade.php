@extends('layouts.app1')


@section('carousel')
    {{--Carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/1.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/1.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection

@section('contenido')

<div class="col-md-12">
    <h3 class="text-center">Tu tienda de cómputo de confianza</h3>
    <br>
</div>


    <div class="card-columns">

        <div class="card">
            <img class="card-img-top" src="img/img-ejemplo.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Promoción 1</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card">
                <img class="card-img-top" src="img/img-ejemplo.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Promoción 2</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

              <div class="card">
                    <img class="card-img-top" src="img/img-ejemplo.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Promoción 3</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>

    </div>

    

@endsection
