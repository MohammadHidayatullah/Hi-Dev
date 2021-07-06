<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>IKLANKU</title>
<!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href= "{{ asset ('frontend/assets/css/templatemo-art-factory.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('frontend/assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" type="text/css" href= "{{ asset ('frontend/assets/css/home.css') }}">
</head>
<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    @include('frontend/layouts/navbar')

    <!-- *** Content Webinar Start ****-->
    
   <!-- ***** Features Small Start ***** -->
   <section class="section" id="services">
    <div class="container">
        <div class="row text-center mb-5 " style ="margin-top: -70px;">
        </div>
        <div class="row justify-content-center">

          @foreach ($loker as $item)
            <div class="col-md-3 mb-3">
                <div class="card mb-5" style="width: 18rem;">
                    <img src="{{ asset('images/loker/'. $item->pamflet_loker) }}" class="card-img-top" class="img-fluid" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item->judul_loker }}</h5>
                      <p class="card-text" style="overflow: hidden; display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical;">
                        {{ $item->deskripsi }} </p>
                      <a href="{{ url('detailloker/'. $item->id) }}" class="btn btn-outline-info">Read More</a>
                    </div>
                </div>
            </div>
          @endforeach
            
            <!-- ***** Pagination Start ***** -->
            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            <!-- ***** Pagination End ***** -->
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- *** Content Webinar End ****-->





    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('frontend/assets/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imgfix.min.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
    
</body>
</html>