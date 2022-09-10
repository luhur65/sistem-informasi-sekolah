<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UasController extends Controller
{
    //
    public function index()
    {
        return \view('admin.uas');
    }

    public function simpan(Request $request)
    {
        $data = $request['dharmasitumorang'];
        return \view('admin.new', \compact('data'));
    }
}
