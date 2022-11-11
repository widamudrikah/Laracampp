@extends('front.base')

@section('title','Detail Bootcamps')

@section('content')

 <!-- Checkout Bootcamp -->
    <section class="container checkout-bootcamp">
        <span>YOUR FUTURE CAREER</span>
        <h2>Checkout Bootcamp</h2>
    </section>
    <!-- End Checkout Bootcamp -->


    <!-- Detail Checkout -->
    <section class="container detail-checkout">
        <div class="row">

            <div class="col-md-6 left-content">              
                <div class="p-5">
                    <div class="video">
                        <img style="width: 368px; height: 255px; border-radius:20px;" class="img-fluid" src="{{ asset('storage/'.$bootcamp->thumbnail) }}" alt="{{ $bootcamp->nama_bootcamp }}">
                    </div>   
                    <div class="desc">
                        <span>{{ $bootcamp->nama_bootcamp }}</span>
                        <p>
                            {!! $bootcamp->deskripsi !!}
                        </p>
                    </div>
                </div>          
            </div>

            <div class="col-md-6 right-content d-flex justify-content-center">
                <form class="mt-4" action="{{ route('front.daftar.bootcamp') }}" method="POST">
                    @csrf

                    <input type="hidden" value="{{ $bootcamp->id }}" name="bootcamp_id">
                    {{-- <inputtype="hidden"value="{{ Auth::user()->peserta->id }}" name="peserta_id"> --}}
                    <input type="hidden" value="{{ $bootcamp->harga }}" name="harga">

                    <div class="mb-3 inputan">
                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 inputan">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" name="nama" class="form-control" id="fullName">
                    </div>
                    <div class="mb-3 inputan">
                        <label for="Occupation" class="form-label">Occupation</label>
                        <input type="text" name="pekerjaan" class="form-control" id="Occupation">
                    </div>
                    <div class="mb-3 inputan">
                        <label for="CardNumber" class="form-label">Card Number</label>
                        <input type="text" name="rekening" class="form-control" id="CardNumber">
                    </div>

                    <div class="row">
                        <div class="col-md-3 inputan-2">
                            <div class="mb-3">
                                <label for="Expired" class="form-label">Expired</label>
                                <input type="text" name="expired" class="form-control" id="Expired" placeholder="Contoh: 01/2024">
                            </div>
                        </div>
                        <div class="col-md-3 inputan-2">
                            <div class="mb-3 jarak">
                                <label for="cvc" class="form-label">CVC</label>
                                <input type="text" name="cvc" class="form-control" id="cvc" placeholder="Contoh: 220">
                            </div>
                        </div>
                    </div>

                    @guest
                        <!-- Jika Belum Login -->
                        <a href="#" class="btn btn-primary">Login Dulu</a>
                    @else
                        @if(Auth::user()->role == 3)
                            <!-- Setelah Login -->
                            <button type="submit" class="btn btn-primary">Play Now</button>
                            <p class="pay">
                                Your payment is secure and encrypted.
                            </p>
                        @else
                            <button type="button" class="btn btn-primary">Anda Tidak Bisa Daftar</button>
                        @endif                        
                    @endguest

                </form>
            </div>

        </div>
    </section>
    <!-- End Detail Checkout -->

@endsection