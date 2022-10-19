<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bootcamp\BootcampRequest;
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

    public function store(BootcampRequest $request)
    {
        
    }

}
