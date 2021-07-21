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
          @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
             @endforeach
         </ul>
       </div>
       @endif

        <div class="container">
            <div class="row  justify-content-center" >
                <div class="col-md-8">
                    <div class="form">
                    <form class="form-validate form-horizontal" id="addloker_form" method="POST"  enctype="multipart/form-data"
                    action="{{ isset($loker) ? route('addloker.update', $loker->id ) : route('addloker.store') }}">
                        {!! csrf_field() !!}
                        {!! isset($loker) ? method_field('PUT') : '' !!}
                    <input type="hidden" name="id" value="{{ isset($loker) ? $loker->id : '' }}">
                    <div class="mb-3">
                        <label for="formFile" class="form-label" >Pamflet Lowongan Pekerjaan</label>
                        <input class="form-control" type="file" name="pamflet"
                        {{ $errors->has('pamflet') ? 'is-invalid' : '' }}
                        value="{{ isset($loker) ? $loker->pamflet_loker : Request::old('pamflet') }}" require/>
                        @if ($errors->has('pamflet'))
                            <span class="text-danger small">
                                <p>{{ $errors->first('pamflet')}}</p>
                            </span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" >Judul Lowongan Pekerjaan</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul Lowongan Pekerjaan"
                        {{ $errors->has('judul') ? 'is-invalid' : '' }}
                        value="{{ isset($loker) ? $loker->judul_loker : Request::old('judul') }}" require/>
                        @if ($errors->has('judul'))
                            <span class="text-danger small">
                                <p>{{ $errors->first('judul')}}</p>
                            </span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Deskripsi Lowongan Pekerjaan</label>
                        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Lowongan Pekerjaan"
                        {{ $errors->has('deskripsi') ? 'is-invalid' : '' }}
                        value="{{ isset($loker) ? $loker->deskripsi : Request::old('deskripsi') }}" require/>
                        @if ($errors->has('deskripsi'))
                        <span class="text-danger small">
                            <p>{{ $errors->first('deskripsi')}}</p>
                        </span>
                    @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Terakhir Pendaftaran</label>
                        <input type="date" class="form-control" name="deadline" placeholder=" "
                        {{ $errors->has('deadline') ? 'is-invalid' : '' }}
                        value="{{ isset($loker) ? $loker->deadline : Request::old('deadline') }}" require/>
                        @if ($errors->has('deadline'))
                            <span class="text-danger small">
                                <p>{{ $errors->first('deadline')}}</p>
                            </span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Link Pendaftaran</label>
                        <input type="text" class="form-control" name="link" placeholder="Link Pendaftaran"
                        {{ $errors->has('link') ? 'is-invalid' : '' }}
                        value="{{ isset($loker) ? $loker->link : Request::old('link') }}" require/>
                        @if ($errors->has('link'))
                            <span class="text-danger small">
                                <p>{{ $errors->first('link')}}</p>
                            </span>
                        @endif
                    </div>
                    <div class="mt-4 d-grid gap-2 d-md-flex justify-content-md-end ">
                        <button type="button" class="btn btn-danger">Kembali
                        <a href="{{ route('listloker') }}"></button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('loker.index') }}"><button class="btn btn-default">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>



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
