<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Siswa::factory(50)->create();
        Guru::factory(50)->create();
        
    }
} 
