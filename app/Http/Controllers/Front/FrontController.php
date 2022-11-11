<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use App\Models\Kategori;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.pages.index');
    }

    public function bootcamps()
    {
        $bootcamp = Bootcamp::all();
        $title = "Semua Kelas Bootcamps";
        return view('front.pages.bootcamps',[
            'bootcamp'  => $bootcamp,
            'title'     => $title,
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
        $transaksi->peserta_id  = Auth::user()->peserta->id;
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

    public function mentor_bootcamp()
    {
        $mentor = User::where('role',2)->get();
        return view('front.pages.list-mentor',[
            'mentor' => $mentor,
        ]);
    }

    public function kelas_mentor_bootcamp($username)
    {
        $user = User::where('username',$username)->first();
        $bootcamp = Bootcamp::where('mentor_id', $user->id)->get();
        $title = "Kelas Bootcamps: $user->name";
        return view('front.pages.bootcamps',[
            'bootcamp'  => $bootcamp,
            'title'     => $title,
        ]);
    }

    public function my_dashboard()
    {
        $trx = Transaksi::where('peserta_id', Auth::user()->peserta->id)->get();
        return view('front.pages.my-dashboard',[
            'trx'  => $trx,
        ]);
    }
}
