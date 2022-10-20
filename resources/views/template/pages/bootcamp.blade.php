@extends('template.base')

@section('title', 'Kelas Bootcamp')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bootcamp</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Kelas Bootcamp</h6>
            <a href="{{ route('bootcamp.create') }}" class="btn btn-primary btn-sm">
                + Kelas
            </a>
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
                            <th width="10%">Thumbnail</th>
                            <th>Nama Bootcamp</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Kuota</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bootcamp as $row)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/'.$row->thumbnail) }}" alt="{{ $row->nama_bootcamp }}" class="img-fluid">
                            </td>
                            <td>{{ $row->nama_bootcamp }}</td>
                            <td>{{ $row->harga }}</td>
                            <td>{{ $row->deskripsi }}</td>
                            <td>{{ $row->kuota }}</td>
                            <td>{{ $row->kategori->nama_kategori }}</td>
                            <td>
                                @if($row->status == 1)
                                <span class="badge badge-success">Tersedia</span>
                                @elseif($row->status == 2)
                                <span class="badge badge-danger">Penuh</span>
                                @endif
                            </td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">Edit</a>
                                <a href="#" data-toggle="modal" data-target="#delete{{ $row->id }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                        @include('template.modal.bootcamp.delete')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
     </div>

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