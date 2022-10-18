<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{    
    public function index()
    {
        return view('template.pages.index');
    }
}
