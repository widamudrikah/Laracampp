@extends('template.base')

@section('title', 'Transaksi Bootcamp')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    </div>

     <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Transaksi Bootcamp</h6>
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
                            <th>Kode Transaksi</th>
                            <th>Nama</th>
                            <th>Total Bayar</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $row)
                        <tr>
                            <td>{{ $row->kode_trx }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->total_harga + $row->kode_unik }}</td>
                            <td>
                                @if($row->status == 1)
                                    <span class="badge badge-success">Sukses</span>
                                @elseif($row->status == 2)
                                    <span class="badge badge-warning">Pending</span>
                                @elseif($row->status == 3)
                                    <span class="badge badge-danger">Batal</span>
                                @endif
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#statusTrx{{$row->id}}" class="btn btn-success btn-sm"><i class="fa-solid fa-pen"></i></a>
                                <a href="#" data-toggle="modal" data-target="#delete{{ $row->id }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                        @include('template.modal.transaksi.status-trx')
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