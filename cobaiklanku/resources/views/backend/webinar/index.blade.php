@extends('backend/layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_document_alt"></i>WEBINAR</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="{{ url('dashboard') }}">Home</a></li>
                <li><i class="ico_document_alt"></i>Daftar Webinar</li>
                <li><i class="fa fa-files-o"></i>Tambah Webinar</li>
            </ol>
        </div>
        </div>

        <!-- form -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        WEBINAR
                    </header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-sucess">
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                            <table class="table table-striped table-advance table-hover">
                                <tbody>
                                    <tr>
                                        <th>Pamflet Webinar</th>
                                        <th>Judul Webinar</th>
                                        <th>Deskripsi</th>
                                        <th>Deadline</th>
                                        <th>Link</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($webinar as $item)
                                    <tr>
                                        <td><img src="{{ asset('images/webinar') }}/{{ $item->pamflet_webinar }}" class="img-thumbnail" width="300px"></td>
                                        <td>{{ $item->judul_webinar }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->deadline}}</td>
                                        <td>{{ $item->link}}</td>
                                        <td>
                                            <form action="{{ $item->status == 1 ? route('webinar.nonactive',$item->id) : route('webinar.active',$item->id)  }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                @if ($item->status == 1)
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-times"></i> Non Aktifkan</button>
                                                @else
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check"></i> Aktifkan</button>
                                                @endif
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <form action="{{ route('webinar.destroy', $item->id) }}" method="POST">
                                                    <a class="btn btn-warning" href="{{ route('webinar.edit', $item->id) }}">
                                                        <i class="fa fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin menghapus data?')">
                                                    <i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </section>

            </div>
        </div>
    </section>

</section>
@endsection
