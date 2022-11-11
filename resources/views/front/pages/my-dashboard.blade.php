@extends('front.base')

@section('title','My Dashboard')

@section('content')

 <!-- Dashboard -->
    <section class="container dashboard">
        <span>DASHBOARD</span>
        <h2>My Bootcamps</h2>

        <!-- List Table My Bootcamp -->
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>

                    @forelse($trx as $row)
                        <tr>
                            <td class="td-img">
                                <img style="width: 180px; height:120px; border-radius:20px;" src="{{ asset('storage/'.$row->bootcamp->thumbnail) }}" alt="{{ $row->nama_bootcamp }}">
                            </td>
                            <td class="td-bootcamp">
                                <div class="desc">
                                    <p class="name">{{ $row->bootcamp->nama_bootcamp }}</p>
                                    <!-- <p class="date">September 24, 2021</p> -->
                                    <p class="date">Mentor: {{ $row->bootcamp->mentor->name }}</p>
                                </div>
                            </td> 
                            <td class="td-price">Rp <?php echo number_format($row->bootcamp->harga) ?></td>

                            <td class="td-status">
                                @if($row->status == 1)
                                    Success
                                @elseif($row->status == 2)
                                    Waiting for Payment
                                @elseif($row->status == 3)
                                    Canceled
                                @endif
                            </td>

                            @if(Auth::user()->role == 3)
                            <td class="td-invoice">
                                <a href="#" class="btn btn-primary">View Invoice</a>
                            </td>
                            @endif
                        </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            Data bootcamp belum tersedia !
                        </td>
                    </tr>
                    @endforelse 

                </tbody>
            </table>
        </div>
        <!-- End List Table My Bootcamp -->

    </section>
    <!-- End Dashboard -->

@stop