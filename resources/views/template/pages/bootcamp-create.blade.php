@extends('template.base')

@section('title', 'Bootcamp Baru')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bootcamp</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Buat Bootcamp</h6>
            <a href="{{ route('bootcamp.create') }}" class="btn btn-primary btn-sm">
                + Kelas
            </a>
        </div>
        <div class="card-body">
        
        <form action="{{ route('bootcamp.store') }}" method="POST">
            @csrf 
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_bootcamp">Nama Bootcamp</label>
                        <input type="text" name="nama_bootcamp" class="form-control" id="nama_bootcamp">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kategori_id">Kategori Bootcamp</label>
                        <select class="custom-select" name="kategori_id" id="kategori_id">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kuota">Kuota</label>
                        <input type="number" name="kuota" class="form-control" id="kuota">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="thumbnail">Thumbnail Bootcamp</label>
                <div class="custom-file" id="thumbnail">
                    <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
     </div>

@endsection