@extends('layouts.site')

@section('content')
<main>
<div id="carrosel-main"class="  ">
    <!-- slider -->
    <div id="mainSlider" class="carousel slide " style='height: 40vh; ' data-ride="carousel">
      <ol class="carousel-indicators ">
        <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
        <li data-target="#mainSlider" data-slide-to="1"></li>
        <li data-target="#mainSlider" data-slide-to="2"></li>
      </ol>
      </div>
      <a class="carousel-control-prev z-10 text-white" href="#mainSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
</main>
@endsection
