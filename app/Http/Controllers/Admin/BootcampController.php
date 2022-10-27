<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bootcamp\BootcampRequest;
use App\Models\Bootcamp;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BootcampController extends Controller
{

    public function index()
    {
        // $bootcamp = Bootcamp::with('kategori')->get();
        $bootcamp = Bootcamp::all();
        return view('template.pages.bootcamp',[
            'bootcamp'  => $bootcamp,
        ]);
        // return $bootcamp;
    }

    public function create()
    {
        $kategori = Kategori::all();
        $mentor   = User::where('role',2)->get();
        return view('template.pages.bootcamp-create',[
            'kategori'  => $kategori,
            'mentor'    => $mentor,
        ]);
    }

    public function store(BootcampRequest $request)
    {
        // dd($request->all());

        Bootcamp::create([
            'kategori_id'       => $request->kategori_id,
            'mentor_id'         => $request->mentor_id,
            'nama_bootcamp'     => $request->nama_bootcamp,
            'slug'              => Str::slug($request->nama_bootcamp),
            'harga'             => $request->harga,
            'deskripsi'         => $request->deskripsi,
            'thumbnail'         => $request->file('thumbnail')->store('img-bootcamp'),
            'kuota'             => $request->kuota,
        ]);

        return redirect()->route('bootcamp.index')->with('Ok',"Kelas $request->nama_bootcamp berhasil disimpan");
    }

    public function destroy(Request $request)
    {
        // dd($request->all());
        $bootcamp = Bootcamp::findOrFail($request->id);  // Cari data
        Storage::delete($bootcamp->thumbnail); // Hapus file directory system
        $bootcamp->delete(); // Hapus data di database
        return redirect()->back();
    }
    
}
