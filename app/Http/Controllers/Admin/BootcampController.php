<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Bootcamp\BootcampRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BootcampController extends Controller
{

    public function index()
    {
        return view('template.pages.bootcamp');
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('template.pages.bootcamp-create',[
            'kategori'  => $kategori,
        ]);
    }

    public function store(BootcampRequest $request)
    {
        
    }
    
}
