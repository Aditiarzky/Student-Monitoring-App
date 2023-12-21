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

// Route::get('/dashboard', function () {
//     return view('ortu.dashortu');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'edit'])->name('ortu.dashortu');
    Route::post('/dashboard', [ProfileController::class, 'update'])->name('ortu.change');
    Route::delete('/dashboard', [ProfileController::class, 'destroy'])->name('ortu.dashortu');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
