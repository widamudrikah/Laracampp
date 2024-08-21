<?php

namespace App\Http\Controllers\Api;

use App\Charts\WisataChart;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Termwind\Components\Hr;

class AdditionalController extends Controller
{
    public function getDoa()
    {
       $response = Http::get("https://doa-doa-api-ahmadramadhan.fly.dev/api");
    //    dd(json_decode($response));
    $data_doa = json_decode($response);

    return view('additional.doa',[
        'data_doa'  =>$data_doa,
    ]);

    }
    public function surah()
    {
       $response = Http::get("https://api-alquranid.herokuapp.com/surah");
        // dd(json_decode($response));
     $data_surah = json_decode($response)->data;
        //  return $data_surah;
        return view('additional.ayat',[
        'data_surah'  =>$data_surah,
    ]);

    }

    public function login()
    {
        return view('additional.login');
    }

    public function prosesLogin(Request $request)
    {
        $respon = Http::post("https://warungbangkrut14.herokuapp.com/api/login?email={$request->email}&password={$request->password}");
        //  $respon = Http::post("https://warungbangkrut14.herokuapp.com/api/login", $request->all());
        $data = json_decode($respon);

        if($data->status == 0){
            return redirect()->back()->with('error', $data->message);
        }else{
            return view('additional.welcome', [
                'data'  =>$data
            ]);
        }
    }

    public function regis()
    {
        return view('additional.regis');
    }

    public function prosesRegis(Request $request)
    {
        $respon = Http::post("https://warungbangkrut14.herokuapp.com/api/registrasi", $request->all());
            
            $data = json_decode($respon);

            if($data->status == 0){
                return redirect()->back()->with('error', $data->message);
            }else{
                return redirect('/login-warung')->with('ok',$data->pesan);
            }
    }

    public function chart()
    {
        $wisata = collect(Http::get('http://ict-juara.herokuapp.com/api/wisata')->json());

        $nama_wisata = $wisata->flatten(1)->pluck('nama_wisata');
        $harga       = $wisata->flatten(1)->pluck('harga');

        return $nama_wisata;

        $wisata     = Http::get('http://ict-juara.herokuapp.com/api/wisata');
        $data = json_decode($wisata);

        $nama_wisata = Arr::pluck($data->data, 'nama_wisata');
        $harga       = Arr::pluck($data->data, 'harga');


        // Cara convert Array to Object
        // $object = json_decode(json_encode($nama-wisata), FALSE);

        // return =

        // $colors = $nama_wisata->map(function($item) {
        //     return '#' . substr(md5(mt_rand()), 0, 6);
        // });

        $chart       = new WisataChart;
        $chart->labels($nama_wisata);
        // $chart->dataset('Data Wisata', 'doughnut', $harga)->backgroundColor('#' . substr(md5(mt_rand()), 0, 6));
        $chart->dataset('Data Wisata', 'doughnut', $harga);

        return view('additional.grafik-wisata', [
            'chart' => $chart,
        ]);
    }

    public function chart2()
    {
        $wisata     = Http::get('http://ict-juara.herokuapp.com/api/wisata');
        $data = json_decode($wisata);

        $nama_wisata = [];
        $harga       = [];

        foreach($data->data as $row){
            $nama_wisata[] = $row->nama_wisata;
            $harga[] = $row->harga;
        }

        $n = json_encode($nama_wisata);
        $h = json_encode($harga);

        return view('additional.grafik-wisata2', [
            'n' => $n,
            'h' => $h,
        ]);
    }

    public function chart3()
    {
        $user = User::all();
        $data = json_decode($user);

        //Deklarasi variabel : tempat menyimpan data yang akan diolah
        // $tgl = [];
        // $orang = [];

        foreach($data as $row){
            $tgl[] = Carbon::parse($row->created_at)->translatedFormat('d F Y');
            $orang[] = $row->id;
        }

        return view('additional.grafik-user', compact('tgl', 'orang'));

    }
}
