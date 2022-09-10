<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // 
    public function index()
    {
        $siswa = Siswa::paginate(5);
        return \view('admin.siswa', compact('siswa'));
    }

    public function input()
    {
        return \view('admin.inputsiswa');
    }

    public function edit($nis) 
    {
        $siswa = Siswa::where('nis', $nis)->first();
        return \view('admin.editsiswa', \compact('siswa'));
    }

    public function inputsave(Request $request)
    {
        Siswa::create([
            'nis' => $request['nis'],
            'nama' => $request['name'],
            'tempatlahir' => $request['tempatlahir'],
            'tgllahir' => $request['tgllahir'],
            'alamat' => $request['alamat'],
            'nohp' => $request['nohp'],
            'namaayah' => $request['ayah'],
            'namaibu' => $request['ibu']
        ]);

        return \redirect('/admin/siswa')->with('pesan', 'Data siswa berhasil ditambah!');
    }

    public function editsave(Request $request)
    {
        Siswa::find($request['nis'])
            ->update([
            'nama' => $request['name'],
            'tempatlahir' => $request['tempatlahir'],
            'tgllahir' => $request['tgllahir'],
            'alamat' => $request['alamat'],
            'nohp' => $request['nohp'],
            'namaayah' => $request['ayah'],
            'namaibu' => $request['ibu']
        ]);

        return \redirect('/admin/siswa')->with('pesan', 'Data siswa berhasil diubah!');
    }

    public function hapus($nis)
    {
        Siswa::where('nis', $nis)->delete();
        return \redirect('/admin/siswa')->with('pesan', 'Data siswa berhasil dihapus!');
    }
}
