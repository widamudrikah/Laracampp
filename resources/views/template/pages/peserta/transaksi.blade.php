@extends('template.base')

@section('title', 'Transaksi')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Transaksi</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            <th>Rekening</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $row)
                            <tr>
                                <td>{{ $row->kode_trx }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->rekening }}</td>
                                <td>Rp <?php echo number_format($row->total_harga + $row->kode_unik); ?></td>
                                <td>
                                    @if($row->status == 1)
                                        <span class="badge badge-success">Berhasil</span>
                                    @elseif($row->status == 2)
                                        <span class="badge badge-warning">Pending</span>
                                    @elseif($row->status == 3)
                                        <span class="badge badge-danger">Batal</span>
                                    @endif
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
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