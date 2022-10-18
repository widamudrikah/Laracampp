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
                            <th>Thumbnail</th>
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