<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('template.pages.transaksi',[
            'transaksi' => $transaksi,
        ]);
    }

    public function status_update(Request $request)
    {
        $trx = Transaksi::findOrFail($request->id_trx);
        $trx->status = $request->status;
        $trx->update();
        return redirect()->back()->with('Ok', 'Berhasil update status transaksi !');
    }
}
