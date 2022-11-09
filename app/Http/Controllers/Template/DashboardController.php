<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{    
    public function index()
    {
        $bootcamp = Bootcamp::count();
        $sukses = Transaksi::where('status',1)->count();
        $pending = Transaksi::where('status',2)->count();
        $batal = Transaksi::where('status',3)->count();
        return view('template.pages.index',[
            'bootcamp'  => $bootcamp,
            'sukses'    => $sukses,
            'pending'   => $pending,
            'batal'     => $batal,
        ]);
    }

    public function list_admin()
    {
        $admin = User::where('role',1)->get();
        return view('template.pages.admin',[
            'admin' => $admin,
        ]);
    }

    public function list_peserta()
    {
        $peserta = User::where('role',3)->get();
        return view('template.pages.peserta',[
            'peserta' => $peserta,
        ]);
    }
}
