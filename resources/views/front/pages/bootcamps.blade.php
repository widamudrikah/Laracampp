@extends('front.base')

@section('title','Semua Bootcamps Di Laracamp')

@section('content')

 <!-- Dashboard -->
    <section class="container dashboard">
        <div class="text-center">
            <span>BOOTCAMPS</span>
            <h2>Semua Kelas Bootcamps</h2>
        </div>        

        <!-- List Table My Bootcamp -->
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="td-img">
                            <img src="{{ asset('laracamp/images/cover.png') }}" alt="Image Bootcamp">
                        </td>
                        <td class="td-bootcamp">
                            <div class="desc">
                                <p class="name">Gila Belajar</p>
                                <p class="date">September 24, 2021</p>
                            </div>
                        </td> 
                        <td class="td-price">$280,000</td>
                        <td class="td-status">Waiting for Payment</td>
                        <td class="td-invoice">
                            <a href="#" class="btn btn-primary">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End List Table My Bootcamp -->

    </section>
    <!-- End Dashboard -->

@stop