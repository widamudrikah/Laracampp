<div class="modal fade" id="statusTrx{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Status Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('transaksi.status.update') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$row->id}}" name="id_trx">
                        <div class="form-group">
                           <select class="custom-select" name="status" id="status">
                                <option value="">Pilih Status</option>
                                <option value="1" @if($row->status == 1) {{ 'selected' }} @endif>Sukses</option>
                                <option value="2" @if($row->status == 2) {{ 'selected' }} @endif>Pending</option>
                                <option value="3" @if($row->status == 3) {{ 'selected' }} @endif>Batal</option>
                            </select>
                        </div>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        </div>
    </div>