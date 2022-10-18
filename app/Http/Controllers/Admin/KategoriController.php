<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
        return view('template.pages.kategori',[
            'kategori' => $kategori,
        ]);
    }

    public function store(Request $request)
    {
        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug'          => Str::slug($request->nama_kategori),
        ]);

        return redirect()->back()->with('Ok','Berhasil Tambah Data !');
    }

    public function update(Request $request)
    {        
        $kategori                   = Kategori::findOrFail($request->id);

        $kategori->nama_kategori    = $request->nama_kategori;
        $kategori->slug             = Str::slug($request->nama_kategori);

        $kategori->update();

        return redirect()->back()->with('Ok','Berhasil Update Data !');
    }

    public function destroy(Request $request)
    {
        $kategori = Kategori::findOrFail($request->id);
        $kategori->delete();
        return redirect()->back()->with('Ok','Berhasil Delete Data !');
    }
}
