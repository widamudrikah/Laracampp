<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mentor\MentorReaquest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CrudMentorController extends Controller
{
    public function index()
    {
        $mentor = User::where('role',2)->get();
        return view('template.pages.mentor',[
            'mentor' =>$mentor,
        ]);
    }

    public function create()
    {
        return view('template.pages.mentor-create');
    }

    public function store(MentorReaquest $request)
    {
        $mentor             = new User();
        $mentor->name       = $request->name;
        $mentor->username   = $request->username;
        $mentor->role       = 2;
        $mentor->email      = $request->email;
        $mentor->password   = Hash::make($request->password);
        $mentor->images     = $request->file('images')->store('img-mentor');
        $mentor->save();
        return redirect()->route('crud.mentor.index')->with('Ok',"Berhasil Menyimpan Data Mentor");
    }
}
