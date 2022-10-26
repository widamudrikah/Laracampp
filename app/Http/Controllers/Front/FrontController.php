<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.pages.index');
    }

    public function bootcamps()
    {
        return view('front.pages.bootcamps');
    }
}
