@extends('front.base')

@section('title','Semua Bootcamps Di Laracamp')

@section('content')

    <!-- Dashboard -->
    <section class="container dashboard">
        <div class="text-center">
            <span>BOOTCAMPS</span>
            <h2>{{ $title }}</h2>
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

                            <td class="td-status" @if($row->kuota == 0) style="color: #f75151;" @else style="color: #31B380;" @endif>
                                <!-- @if($row->status == 1)
                                 Tersedia
                                @else
                                 Penuh
                                @endif -->
                                @if($row->kuota == 0)
                                Tersedia ({{ $row->kuota }})
                                @else
                                 Tersedia ({{ $row->kuota }})
                                @endif
                            </td>

                            <td class="td-invoice">
                                @if($row->kuota == 0)
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Detail</a>
                                @else
                                <a href="{{ route('front.detail.bootcamp',$row->slug) }}" class="btn btn-primary">Detail</a>
                                @endif
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

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Kuota Sudah Terpenuhi
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@stop