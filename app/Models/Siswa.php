<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    // public $timestamps = false;
    protected $primaryKey = 'nis';
    protected $fillable = [
        'nis',
        'nama',
        'tempatlahir',
        'tgllahir' ,
        'alamat',
        'nohp',
        'namaayah',
        'namaibu'
    ]; 
}
