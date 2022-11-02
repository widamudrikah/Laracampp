<?php

namespace App\Http\Controllers\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesertaController extends Controller
{
    public function index()
    {
        $sukses = Transaksi::where('peserta_id', Auth::user()->peserta->id)->where('status',1)->count();
        $pending = Transaksi::where('peserta_id', Auth::user()->peserta->id)->where('status',2)->count();
        $batal = Transaksi::where('peserta_id', Auth::user()->peserta->id)->where('status',3)->count();
        return view('template.pages.peserta.index',[
            'sukses'    => $sukses,
            'pending'   => $pending,
            'batal'     => $batal,
        ]);
    }

    public function success_checkout()
    {
        return view('template.pages.peserta.success-checkout');
    }
}
