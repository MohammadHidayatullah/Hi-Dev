<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Add Webinar</title>

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