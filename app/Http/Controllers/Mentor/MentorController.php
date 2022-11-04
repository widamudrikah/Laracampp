<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
    public function index()
    {
        return view('template.pages.mentor.index');
    }

    public function my_bootcamp()
    {
        $bootcamp = Bootcamp::where('mentor_id', Auth::user()->id)->get();
        return view('template.pages.mentor.my-bootcamp',[
            'bootcamp' => $bootcamp,
        ]);
    }

    public function peserta_bootcamp($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        $peserta = Transaksi::where('bootcamp_id', $id)->get();
        return view('template.pages.mentor.peserta-bootcamp',[
            'peserta' => $peserta,
            'bootcamp' => $bootcamp,
        ]);
    }
}
