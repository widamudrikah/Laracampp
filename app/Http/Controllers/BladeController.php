<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function home()
    {
        return view('blade.pages.home');
    }

    public function detail()
    {
        return view('blade.pages.detail');
    }
}
