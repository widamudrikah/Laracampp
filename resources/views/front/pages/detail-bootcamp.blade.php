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
                        <img class="img-fluid" src="{{ asset('laracamp/images/item.png') }}" alt="View Video">
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
                <form class="mt-4">
                    <div class="mb-3 inputan">
                        <label for="exampleInputEmail1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" value="febryan1453@gmail.com" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 inputan">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" value="Febryan">
                    </div>
                    <div class="mb-3 inputan">
                        <label for="Occupation" class="form-label">Occupation</label>
                        <input type="text" class="form-control" id="Occupation" value="Web Developer">
                    </div>
                    <div class="mb-3 inputan">
                        <label for="CardNumber" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="CardNumber" value="082191170349">
                    </div>

                    <div class="row">
                        <div class="col-md-3 inputan-2">
                            <div class="mb-3">
                                <label for="Expired" class="form-label">Expired</label>
                                <input type="text" class="form-control" id="Expired" value="01/2024">
                            </div>
                        </div>
                        <div class="col-md-3 inputan-2">
                            <div class="mb-3 jarak">
                                <label for="cvc" class="form-label">CVC</label>
                                <input type="text" class="form-control" id="cvc" value="220">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Play Now</button>
                    <p class="pay">
                        Your payment is secure and encrypted.
                    </p>
                </form>
            </div>

        </div>
    </section>
    <!-- End Detail Checkout -->

@endsection