<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.pages.index');
    }

    public function bootcamps()
    {
        $bootcamp = Bootcamp::all();
        return view('front.pages.bootcamps',[
            'bootcamp' => $bootcamp,
        ]);
    }

    public function detail_bootcamp($slug)
    {
        $bootcamp = Bootcamp::where('slug', $slug)->first();
        return view('front.pages.detail-bootcamp',[
            'bootcamp' => $bootcamp,
        ]);
    }

    public function kategori_bootcamp($slug)
    {
        $kategori = Kategori::where('slug', $slug)->first();
        $bootcamp = Bootcamp::where('kategori_id', $kategori->id)->get();
        return view('front.pages.per-kategori',[
            'bootcamp' => $bootcamp,
            'kategori' => $kategori,
        ]);
    }

    public function daftar_bootcamp(Request $request)
    {
        $brand = 'LRCM';
        $karakter_code = '0123456789';
        $acak = str_shuffle($karakter_code);
        $kode_trx = substr($acak,0,12);
        $kode_fix = $brand.'-'.$kode_trx;

        $transaksi              = new Transaksi();
        $transaksi->peserta_id  = $request->peserta_id;
        $transaksi->bootcamp_id = $request->bootcamp_id;
        $transaksi->kode_trx    = $kode_fix;
        $transaksi->email       = $request->email;
        $transaksi->nama        = $request->nama;
        $transaksi->pekerjaan   = $request->pekerjaan;
        $transaksi->rekening    = $request->rekening;
        $transaksi->expired     = $request->expired;
        $transaksi->cvc         = $request->cvc;
        $transaksi->total_harga = $request->harga;
        $transaksi->kode_unik   = mt_rand(100,999);
        $transaksi->save();

        return redirect()->route('peserta.success');
    }
}
