<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    public function index()
    {
        return view('template.pages.bootcamp');
    }

    public function create()
    {
        return view('template.pages.bootcamp-create');
    }

}
