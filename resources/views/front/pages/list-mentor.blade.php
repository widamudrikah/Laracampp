@extends('front.base')

@section('title','Mentor Laracamp')

@section('content')

    <!-- Dashboard -->
    <section class="container dashboard">
        <div class="text-center">
            <span>BOOTCAMPS</span>
            <h2>Semua Mentor Bootcamps</h2>
        </div>        

        <!-- List Table My Bootcamp -->
        <div class="table-responsive">
            <table class="table table-borderless">
                <tbody>
                    @forelse($mentor as $row)
                        <tr>

                            <td class="td-img">
                                <img style="width: 180px; height:120px; border-radius:20px;" src="{{ asset('storage/'.$row->images) }}" alt="{{ $row->name }}">
                            </td>

                            <td class="td-bootcamp">
                                <div class="desc">
                                    <p class="name">{{ $row->name }}</p>
                                    {{-- <p class="date">Mentor:{{ $row->mentor->name  }}</p> --}}
                                </div>
                            </td> 

                            <td class="td-invoice">
                                <a href="{{ route('front.kelas.mentor.bootcamp',$row->username) }}" class="btn btn-primary">Kelas</a>
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

@stop