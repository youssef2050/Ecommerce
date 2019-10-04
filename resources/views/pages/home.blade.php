@extends('layouts.app')
@section('content')
<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="\images\slider.png" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="\images\slider.png" alt="dvdv slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="\images\slider.png" alt="dvdv slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="\images\slider.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="\images\slider.png" alt="Third slide">
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
  <br>
  <br>
  <br>
      <div class="row justify-content-center">
          <div class="col-md-4">
              <div class="card">
                  <div class="card-body">
                    <div container style="margin:20px;">
                      <img src="\images\box.png" alt="FREE SHIPPING">
                      <div style="float: right;">
                        <p>FREE SHIPPING</p>
                        <p>On orders over $100</p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <div class="card-body">
                    <div container style="margin:20px;">
                      <img src="\images\airport.png" alt="FAST DELIVERY">
                      <div style="float: right;">
                        <p>FAST DELIVERY</p>
                        <p>Get your item within 1 week</p>
                      </div>

                    </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card">
                  <div class="card-body">
                    <div container style="margin:20px;">
                      <img src="\images\offer.png" alt="50% OFF WINTER SALE">
                      <div style="float: right;">
                        <p>50% OFF WINTER SALE</p>
                        <p>Use code Namira50</p>
                      </div>

                    </div>
                  </div>
              </div>
          </div>
      </div>
      <br>
      <br>
      <br>
    <div class="row" style="background-color:#EFEFEF;padding:20px">
    <div class="col-sm-6 col-md-6 col-lg-4">
        <img src="\images\Image1.png" alt="prodect"class="img-responsive fit-image">
        <p>youssef</p>
        <p>250$</p>
        <p><abbr>350$</abbr></p>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
        <img src="\images\Image1.png" alt="prodect"class="img-responsive fit-image">
        <p>youssef</p>
        <p>250$</p>
        <p><abbr>350$</abbr></p>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
        <img src="\images\Image1.png" alt="prodect"class="img-responsive fit-image">
        <p>youssef</p>
        <p>250$</p>
        <p><abbr>350$</abbr></p>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
        <img src="\images\Image1.png" alt="prodect"class="img-responsive fit-image">
        <p>youssef</p>
        <p>250$</p>
        <p><abbr>350$</abbr></p>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
        <img src="\images\Image1.png" alt="prodect"class="img-responsive fit-image">
        <p>youssef</p>
        <p>250$</p>
        <p><abbr>350$</abbr></p>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-4">
        <img src="\images\Image1.png" alt="prodect"class="img-responsive fit-image">
        <p>youssef</p>
        <p>250$</p>
        <p><abbr>350$</abbr></p>
      </div>
    </div>
</div>
@endsection
