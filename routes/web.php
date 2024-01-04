<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/ortu', function () {
    return view('ortu.dashortu');
});


Route::get('/registersiswa', function () {
    return view('registersiswa');
});

//Admin
Route::get('/admin', function () {
    return view('admin.pendaftar');
});
Route::get('/admin/akunuser', function () {
    return view('admin.akunuser');
});
Route::get('/admin/pengumuman', function () {
    return view('admin.pengumuman');
});
Route::get('/admin/registerdetail', function () {
    return view('admin.pendaftar.detailregister');
});
Route::get('/admin/buatakun', function () {
    return view('admin.pendaftar.buatakun');
});
Route::get('/admin/buatbiodata', function () {
    return view('admin.pendaftar.addbiodata');
});

// Route::get('/dashboard', function () {
//     return view('ortu.dashortu');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'edit'])->name('ortu.dashortu');
    Route::post('/dashboard', [ProfileController::class, 'update'])->name('ortu.change');
    Route::delete('/dashboard', [ProfileController::class, 'destroy'])->name('ortu.dashortu');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
