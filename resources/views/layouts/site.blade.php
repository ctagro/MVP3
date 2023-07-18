<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fazenda Santa Luiza</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
 
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  
  <script src="https://kit.fontawesome.com/d16df3d597.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
 
  <script src="{{asset('js/progressbar.min.js')}}"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top " >
        <a class="navbar-brand" href="{{ route('site.home.index') }}" style="font-size: 20px;">
          <img id="logo" class="" src="img/logo/MVP3logoWhite.png" alt="" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
           <!--   <a class="nav-item nav-link" id="home-menu" href="{{ route('site.home.index') }}">Home</span></a>
      <a class="nav-item nav-link" id="about-menu" href="{ route('galeria') }}">Galeria</a>
          <a class="nav-item nav-link" id="services-menu" href="{ route('site.products.index')}}">Culturas</a>
            <a class="nav-item nav-link" id="services-menu" href="{ route('category.index')}}">Fertilizantes</a>
            <a class="nav-item nav-link" id="services-menu" href="{ route('site.category.herbicida')}}">Herbicidas</a>
            <a class="nav-item nav-link" id="portfolio-menu" href="{route('site.project.index')}}">Ceasa</a> -->
            <a class="nav-item nav-link" id="contact-menu" href="{{route('admin.home.index')}}">
            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>            </a>
          </div>
        </div>
      </nav>
    </div>

  @yield('content')  
<!-- Hamburger menu list -->
  <!-- Rodapé -->
  <footer>
    <div id="contact-area ">
      <div class="container  ">
          <div class="row text-white">
            <div class="col-md-12">
              <h3 class="contact-title text-white">Entre em contato conosco</h3>
            </div>
            <div class="col-md-4 contact-box d-flex">
              <i class="fas fa-phone text-white"></i>
              <p class="contact-tile text-white"> (11)95056-5771</p>
             
            </div>
            <div class="col-md-4 contact-box d-flex ">
              <i class="fas fa-envelope text-white"></i>
              <p class=' text-white'> jp.loures.vale@gmail.com</p>
            </div>
            <div class="col-md-4 contact-box d-flex">
              <i class="fas fa-map-marker-alt text-white"></i>
              <p><span class="contact-tile text-white">Fazenda Santa Luiza - Antônio Carlos - MG</p>
            </div>
      
          </div>
      </div>
    </div>
    <div id="copy-area">
      <div class="container text-white">
        <div class="row">
            <div class="col-md-12 text-white">
              <p>Desenvolvido por <a href="#" target="_blank">João Procópio C. Loures Vale</a class=" text-white"> &copy; 2021</p>
            </div>
        </div>
      </div>
    </div>
  </header>
  </footer>
</body>


<!-- Scripts -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('lightbox/js/lightbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>

<script>
    $("#toggle").click(function () {
        $(this).toggleClass("on")
        $("#resize").toggleClass("active")
    })
 
</script>
</html>

