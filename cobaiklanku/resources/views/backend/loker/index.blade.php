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
                                        <td>
                                            <form action="{{ $item->status == 1 ? route('loker.nonactive',$item->id) : route('loker.active',$item->id)  }}" method="POST">
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
                                                <form action="{{ route('loker.destroy', $item->id) }}" method="POST">
                                                    <a class="btn btn-warning" href="{{ route('loker.edit', $item->id) }}">
                                                        <i class="fa fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin menghapus data?')">
                                                    <i class="fa fa-trash-o"></i></button>
                                                </form>
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
