<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    //
    public function index()
    {
        $guru = Guru::paginate(5);
        return \view('admin.guru', \compact('guru'));
    }

    public function input()
    {
        return \view('admin.inputguru');
    }

    public function inputsave(Request $request)
    {
        Guru::create([
            'nip' => $request['nip'],
            'nama' => $request['nama'],
            'tlahir' => $request['tlahir'],
            'tgllahir' => $request['tgllahir'],
            'alamat' => $request['alamat'],
            'bidangstudi' => $request['bidangstudi'],
        ]);

        return \redirect('/admin/guru')->with('pesan', 'Data guru berhasil ditambahkan!');
    }

    public function hapus($nip)
    {
        Guru::where('nip', $nip)->delete();
        return \redirect('/admin/guru')->with('pesan', 'Data guru berhasil dihapus!');
    }

    public function editsave(Request $request)
    {
        Guru::find($request['nip'])
            ->update([
                'nip' => $request['nip'],
                'nama' => $request['nama'],
                'tlahir' => $request['tlahir'],
                'tgllahir' => $request['tgllahir'],
                'alamat' => $request['alamat'],
                'bidangstudi' => $request['bidangstudi'],
            ]);

        return \redirect('/admin/guru')->with('pesan', 'Data guru berhasil diedit!');
    }

    public function edit($nip)
    {
        $guru = Guru::where('nip', $nip)->first();
        return \view('admin.editguru', \compact('guru'));
    }
}
