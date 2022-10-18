@extends('template.base')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
    </div>

     <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Kategori Bootcamp</h6>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal2">
                + Kategori
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if(Session::get('Ok'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('Ok') }}
                </div>
                @endif
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="30%">Nama Kategori</th>
                            <th width="30%">Slug</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori as $row)
                        <tr>
                            <td>{{ $row->nama_kategori }}</td>
                            <td>{{ $row->slug }}</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#edit{{ $row->id }}" class="btn btn-success btn-sm"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                        @include('template.modal.kategori.edit')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
     </div>

    <!-- Modal Tambah Data-->
    @include('template.modal.kategori.tambah')

@endsection

@section('css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sbadmin2/js/demo/datatables-demo.js') }}"></script>
@endsection