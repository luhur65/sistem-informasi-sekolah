<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $guru = Guru::paginate(3);
        return \view('frontend.index', [
            "active" => "home",
            "guru" => $guru
        ]);
    }

    public function about()
    {
        return \view('frontend.about',[
            "active" => "about"
        ]);
    }

    public function kelas()
    {
        return \view('frontend.kelas',[
            "active" => "kelas"
        ]);
    }

    public function guru()
    {
        $guru = Guru::paginate(3);
        return \view('frontend.guru', [
            "active" => "guru",
            "guru" => $guru
        ]);
    }

    public function siswa()
    {
        $siswa = Siswa::paginate(4);
        return \view('frontend.siswa',[
            "active" => "siswa",
            "siswa" => $siswa
        ]);
    }
}