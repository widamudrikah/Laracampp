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
        
        <form action="{{ route('bootcamp.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_bootcamp">Nama Bootcamp</label>
                        <input type="text" value="{{old('nama_bootcamp')}}" name="nama_bootcamp" class="form-control @error('nama_bootcamp') is-invalid @enderror" id="nama_bootcamp">
                        @error('nama_bootcamp')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" value="{{old('harga')}}" class="form-control @error('harga') is-invalid @enderror" id="harga">
                        @error('harga')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kategori_id">Kategori Bootcamp</label>
                        <select class="custom-select @error('kategori_id') is-invalid @enderror" name="kategori_id" id="kategori_id">
                            <option value="">Pilih Kategori</option>
                            @foreach($kategori as $row)
                            <option value="{{ $row->id }}" {{ old('kategori_id') == $row->id ? 'selected' : '' }}>{{ $row->nama_kategori }}</option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kuota">Kuota</label>
                        <input type="number" name="kuota" value="{{old('kuota')}}" class="form-control @error('kuota') is-invalid @enderror" id="kuota">
                        @error('kuota')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="thumbnail">Thumbnail Bootcamp</label>
                <div class="custom-file" id="thumbnail">
                    <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                    <input type="file" name="thumbnail" class="custom-file-input @error('thumbnail') is-invalid @enderror" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    @error('thumbnail')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>                            
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3">{{old('deskripsi')}}</textarea>
                @error('deskripsi')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
     </div>

@endsection