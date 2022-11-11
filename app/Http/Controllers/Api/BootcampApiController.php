<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use Illuminate\Http\Request;

class BootcampApiController extends Controller
{
    public function index()
    {
        $bootcamp = Bootcamp::get()
                    ->map(function ($bootcamp){
                        return $this->format($bootcamp);
                    });
        return $this->result($bootcamp);
    }

    public function detail($id)
    {
        $bootcamp = Bootcamp::where('id',$id)
                    ->get()
                    ->map(function ($bootcamp){
                        return $this->format($bootcamp);
                    });
        return $this->result($bootcamp);
    }

    public function format($bootcamp)
    {
        return [
            'id'        => $bootcamp->id,
            'kategori'  => $bootcamp->kategori->nama_kategori,
            'bootcamp'  => $bootcamp->nama_bootcamp,
            'mentor'    => $bootcamp->mentor->name,
            'price'     => $bootcamp->harga,
            'desc'      => $bootcamp->deskripsi,
            'image'     => $bootcamp->thumbnail,
            'status'    => $bootcamp->status,
            'kuota'     => $bootcamp->kuota,
        ];
    }

    public function result($bootcamp)
    {
        return response()->json([
            'status'    => true,
            'data'      => $bootcamp,
        ], 200);
    }
}
