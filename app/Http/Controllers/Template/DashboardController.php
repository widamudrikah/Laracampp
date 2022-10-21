<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use Illuminate\Http\Request;

class DashboardController extends Controller
{    
    public function index()
    {
        $bootcamp = Bootcamp::count();
        return view('template.pages.index',[
            'bootcamp' => $bootcamp,
        ]);
    }
}
