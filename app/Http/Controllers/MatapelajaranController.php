<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatapelajaranController extends Controller
{
    //
    public function index()
    {
        return \view('admin.matapelajaran');
    }
}
