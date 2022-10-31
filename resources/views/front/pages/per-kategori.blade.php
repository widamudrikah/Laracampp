@extends('front.base')

@section('title','Kategori Bootcamps')

@section('content')

    <!-- Dashboard -->
    <section class="container dashboard">
        <div class="text-center">
            <span>BOOTCAMPS</span>
            <h2>Bootcamp Kategori: {{ $kategori->nama_kategori }}</h2>
        </div>

        <!-- List Table My Bootcamp -->
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    @forelse($bootcamp as $row)
                        <tr>
                            <td class="td-img">
                                <img style="width: 180px; height:120px; border-radius:20px;" src="{{ asset('storage/'.$row->thumbnail) }}" alt="{{ $row->nama_bootcamp }}">
                            </td>
                            <td class="td-bootcamp">
                                <div class="desc">
                                    <p class="name">{{ $row->nama_bootcamp }}</p>
                                    <!-- <p class="date">September 24, 2021</p> -->
                                    <p class="date">Mentor: {{ $row->mentor->name }}</p>
                                </div>
                            </td> 
                            <td class="td-price">Rp <?php echo number_format($row->harga) ?></td>

                            <td class="td-status" @if($row->status == 1) style="color: #31B380;" @else style="color: #f75151;" @endif>
                                @if($row->status == 1)
                                 Tersedia
                                @else
                                 Penuh
                                @endif
                            </td>

                            <td class="td-invoice">
                                <a href="{{ route('front.detail.bootcamp',$row->slug) }}" class="btn btn-primary">Detail</a>
                            </td>
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

@endsection