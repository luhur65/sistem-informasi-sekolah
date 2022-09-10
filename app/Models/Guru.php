<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    
    // public $timestamps = false;
    protected $primaryKey = 'nip';
    protected $fillable = [
        'nip',
        'nama',
        'tlahir',
        'tgllahir',
        'alamat',
        'bidangstudi'
    ]; 
}
