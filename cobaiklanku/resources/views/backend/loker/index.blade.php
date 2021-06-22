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
                        LOKER
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
                                        <th>Pamflet Loker</th>
                                        <th>Judul Loker</th>
                                        <th>Deskripsi</th>
                                        <th>Deadline</th>
                                        <th>Link</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($loker as $item)
                                    <tr>
                                        <td>{{ $item->pamflet_loker }}</td>
                                        <td>{{ $item->judul_loker }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->deadline}}</td>
                                        <td>{{ $item->link}}</td>
                                        <td>{{ $item->status}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <form
                                                    action="{{route('loker.konfirmasi',$item->id)}}"
                                                    method="POST">
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-primary"
                                                        onclick="return confirm('Pakah Anda Yakin Ingin Mengaktifkan Data Ini?')">
                                                        <i class="fa fa-check"></i></button>
                                                </form>
                                                <form action="{{ route('loker.destroy', $item->id) }}" method="POST">

                                                    <a class="btn btn-warning" href="{{ route('loker.edit', $item->id) }}">
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
