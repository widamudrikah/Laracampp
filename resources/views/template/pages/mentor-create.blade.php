@extends('template.base')

@section('title', 'Tambah Mentor Bootcamp')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mentor</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Mentor Bootcamp</h6>
            <a href="{{ route('bootcamp.create') }}" class="btn btn-primary btn-sm">
                + Kelas
            </a>
        </div>
        <div class="card-body">
        
        <form action="{{ route('crud.mentor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf 

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nama Mentor</label>
                        <input type="text" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                        @error('name')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror" id="username">
                        @error('username')
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
                        <label for="email">Alamat Email</label>
                        <input type="text" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email">
                        @error('email')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" id="password">
                        @error('password')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>                            
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="images">Foto Mentor</label>
                <div class="custom-file" id="images">
                    <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                    <input type="file" name="images" class="custom-file-input @error('images') is-invalid @enderror" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    @error('images')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>                            
                    @enderror
                </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
     </div>

@endsection