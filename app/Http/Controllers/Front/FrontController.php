<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
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
}
