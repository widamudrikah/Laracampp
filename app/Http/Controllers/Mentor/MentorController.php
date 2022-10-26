<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index()
    {
        return view('template.pages.mentor.index');
    }
}
