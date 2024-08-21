<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mentor\MentorReaquest;
use App\Models\Bootcamp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

    public function hapusMentor($id)
    {
        // Debbuging
        // return $id;
        // dd($id);
        // echo $id;

        $kelas_mentor = Bootcamp::where('mentor_id', $id)->get();
        return $kelas_mentor;
        $id_bootcamp = Arr::pluck($kelas_mentor, 'id');
        // return $id_bootcamp;
        $jumlahBootcamp = count($id_bootcamp);

        for($x=0; $x < $jumlahBootcamp; $x++ ){
            // $bootcamp = Bootcamp::findOrFail($id_bootcamp[$x]);
            // Storage::delete($bootcamp->thumbnail);
            // $bootcamp->delete();
            
            echo $id_bootcamp;
            echo "<br>";
            // DB::delete("delete from bootcamps where id='$id_bootcamp[$x]'");
        }

        // $mentor = User::findOrFail($id);
        // Storage::delete($mentor->images);
        // $mentor->delete();

        return redirect()->back();
    }
}
