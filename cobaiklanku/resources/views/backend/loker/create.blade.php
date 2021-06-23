@extends('backend/layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_document_alt"></i>LOKER</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{ url('dashboard') }}">Home</a></li>
                <li><i class="ico_document_alt"></i>Daftar Loker</li>
                <li><i class="fa fa-files-o"></i>Tambah Loker</li>
            </ol>
        </div>    
        </div>

        <!-- form -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} loker
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

                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-sucess">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal" id="loker_form" method="POST"  enctype="multipart/form-data"
                                action="{{ isset($loker) ? route('loker.update', $loker->id) : route('loker.store') }}">
                                {!! csrf_field() !!}
                                {!! isset($loker) ? method_field('PUT') : '' !!}
                                <input type="hidden" name="id" value="{{ isset($loker) ? $loker->id : '' }}"> 
                                <input type="hidden" name="pamflet_awal" value="{{ isset($loker) ? $loker->pamflet_loker : '' }}"> 
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Pamflet loker
                                        <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="file" class="form-control" id="pamflet" name="pamflet" minlenght="5"
                                        require/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cname" class="control-label col-lg-2">Judul loker
                                        <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="judul" name="judul" minlenght="2" 
                                        value="{{ isset($loker) ? $loker->judul_loker : '' }}"
                                        require/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Deksripsi
                                        <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" 
                                        value="{{ isset($loker) ? $loker->deskripsi : '' }}"
                                        require/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Deadline
                                        <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="date" class="form-control" id="deadline" name="deadline" 
                                        value="{{ isset($loker) ? $loker->deadline : '' }}"
                                        require/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="curl" class="control-label col-lg-2">Link
                                        <span class="require">*</span></label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="link" name="link" 
                                        value="{{ isset($loker) ? $loker->link : '' }}"
                                        require/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lf-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <a href="{{ route('loker.index') }}"><button class="btn btn-default"
                                            type="button">Cancel</button></a>
                                    </div>
                                </div>
                                </form>
                            </div>
                    </div>
                </section>

            </div>
        </div>
    </section>

</section>
@endsection

@push('content-css')
<link rel="stylesheet" href="{{ asset('backens/css/bootstrap-datepicker.css') }}">
@endpush
@push('content-js')
    <script src="{{ asset('backend/js/bootstrap-datepicker.js') }}"> </script>
    <script type="text/javascript">
        $('#tahun_masuk').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });$('tahun_kelluar').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        })
    </script>
@endpush
    
 