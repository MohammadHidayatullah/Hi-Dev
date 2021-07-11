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
    <!-- ** Preloader Start ** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ** Preloader End ** -->


    @include('frontend/layouts/navbar')

    <!-- * Content Webinar Start **-->

   <!-- ** Features Small Start ** -->
   <section class="section" id="services">
     <header class="panel-heading">
      {{ isset($admin_lecturer) ? 'Mengubah' : ' ' }}
     </header>
      @if ($errors->any())
       <div class="alert alert-danger">
        <strong>OPPS!</strong> There were some problems with your input. <br> <br>
         <ul>
          @foreach ($error->all() as $error)
           <li>{{ $error }}</li>
             @endforeach
         </ul>
       </div>
       @endif

     <div class="container">
        <div class="row  justify-content-center" >
            <div class="col-md-8">
             <div class="form">
             <form class="form-validate form-horizontal" id="addwebinar_form" method="POST"  enctype="multipart/form-data"
                 action="{{ isset($webinar) ? route('addwebinar.update', $webinar->id ) : route('addwebinar.store') }}">
                    {!! csrf_field() !!}
                    {!! isset($webinar) ? method_field('PUT') : '' !!}
                <input type="hidden" name="id" value="{{ isset($webinar) ? $webinar->id : '' }}">
                <div class="mb-2">
                    <label for="formFile" class="form-label" >Pamflet Webinar</label>
                    <input class="form-control" type="file" name="pamflet"
                    {{ $errors->has('pamflet') ? 'is-invalid' : '' }}
                    value="{{ isset($webinar) ? $webinar->pamflet_webinar : '' }}" require/>
                    @if ($errors->has('pamflet'))
                        <span class="text-danger small">
                            <p>{{ $errors->first('pamflet')}}</p>
                        </span>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label" >Judul Webinar</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul Webinar"
                    {{ $errors->has('judul') ? 'is-invalid' : '' }}
                    value="{{ isset($webinar) ? $webinar->judul_webinar : ' ' }}" require/>
                    @if ($errors->has('judul'))
                        <span class="text-danger small">
                            <p>{{ $errors->first('judul')}}</p>
                        </span>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Deskripsi Webinar</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Webinar"
                    {{ $errors->has('deskripsi') ? 'is-invalid' : '' }}
                    value="{{ isset($webinar) ? $webinar->deskripsi : '' }}" require/>
                    @if ($errors->has('deskripsi'))
                        <span class="text-danger small">
                            <p>{{ $errors->first('deskripsi')}}</p>
                        </span>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Terakhir Pendaftaran</label>
                    <input type="date" class="form-control" name="deadline" placeholder=" "
                    {{ $errors->has('deadline') ? 'is-invalid' : '' }}
                    value="{{ isset($webinar) ? $webinar->deadline : '' }}" require/>
                    @if ($errors->has('deadline'))
                        <span class="text-danger small">
                            <p>{{ $errors->first('deadline')}}</p>
                        </span>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Link Pendaftaran</label>
                    <input type="text" class="form-control" name="link" placeholder="Link Pendaftaran"
                    {{ $errors->has('link') ? 'is-invalid' : '' }}
                    value="{{ isset($webinar) ? $webinar->link : '' }}" require/>
                    @if ($errors->has('link'))
                        <span class="text-danger small">
                            <p>{{ $errors->first('link')}}</p>
                        </span>
                    @endif
                </div>
                 <button type="button" class="btn btn-danger btn-sm">Kembali
                 <a href="{{ route('listwb') }}"></button>
                 <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                 <a href="{{ route('webinar.index') }}"><button class="btn btn-default">
                </div>
              </div>
            </div>
        </div>
  </section>
    <!-- ** Features Small End ** -->

    <!-- * Content Webinar End **-->

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
