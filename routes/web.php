<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MatapelajaranController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UasController;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });

// frontend controller
Route::get('/', [FrontendController::class, 'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/kelas', [FrontendController::class, 'kelas']);
Route::get('/guru', [FrontendController::class, 'guru']);
Route::get('/siswa', [FrontendController::class, 'siswa']);   

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

/*
/  My App Routes P
*/

Route::get('/admin/index', function () {
    return view('admin.index');
});

// middleware
Route::group(['prefix' =>'/admin/', 'middleware' => 'administrator'], function() {

    // routes siswa 
    Route::get('siswa', [SiswaController::class, 'index']);
    Route::get('inputsiswa', [SiswaController::class, 'input']);
    Route::post('siswa/input/save', [SiswaController::class, 'inputsave']);
    Route::get('editsiswa/{nis}', [SiswaController::class, 'edit']);
    Route::post('siswa/edit/save', [SiswaController::class, 'editsave']);
    Route::get('hapussiswa/{nis}', [SiswaController::class, 'hapus']);

    // routes guru 
    Route::get('guru', [GuruController::class, 'index']);
    Route::get('inputguru', [GuruController::class, 'input']);
    Route::post('guru/input/save', [GuruController::class, 'inputsave']);
    Route::get('editguru/{nip}', [GuruController::class, 'edit']);
    Route::post('guru/edit/save', [GuruController::class, 'editsave']);
    Route::get('hapusguru/{nip}', [GuruController::class, 'hapus']);

    Route::get('jadwal', [JadwalController::class, 'index']);
    Route::get('nilai', [NilaiController::class, 'index']);
    Route::get('matapelajaran', [MatapelajaranController::class, 'index']);

    Route::get('uas', [UasController::class, 'index']);
    Route::post('uas/save', [UasController::class, 'simpan']);

});