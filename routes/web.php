<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminAkademik', function () {
    return view('adminAkademik');
})->middleware(['auth', 'verified'])->name('adminAkademik');

Route::get('/userAkademik', function () {
    return view('userAkademik');
})->middleware(['auth', 'verified'])->name('userAkademik');

Route::get('/mapel', function () {
    return view('mapel');
})->middleware(['auth', 'verified'])->name('mapel');

Route::get('/adminNilai', function () {
    return view('adminNilai');
})->middleware(['auth', 'verified'])->name('adminNilai');

Route::get('/userNilai', function () {
    return view('userNilai');
})->middleware(['auth', 'verified'])->name('userNilai');

Route::get('/formAdmin', function () {
    return view('formAdmin');
})->middleware(['auth', 'verified'])->name('formAdmin');

Route::get('/formUser', function () {
    return view('formUser');
})->middleware(['auth', 'verified'])->name('formUser');

Route::get('/userPendaftaran', function () {
    return view('userPendaftaran');
})->middleware(['auth', 'verified'])->name('userPendaftaran');

Route::get('/dashboard', function () {
    return Auth::user()->roles()->first()->name == 'admin' ? view('formAdmin') : view('formUser');
})->middleware(['auth', 'verified'])->name('dashboard');

route::get('/artikel', function () {
    return view('artikel');
})->middleware(['auth', 'verified'])->name('artikel');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\StudentController::class)->group(function () {
    
    Route::get('/adminNilai', 'index');
    Route::get('/userNilai', 'user');
    Route::get('/add-student', 'create');
    Route::post('/add-student', 'store');
    Route::get('/edit-student/{student_id}', 'edit');
    Route::put('/update-student/{student_id}', 'update');
    Route::delete('/delete-student/{student_id}', 'destroy');
});

Route::controller(App\Http\Controllers\PendaftaranController::class)->group(function () {
    
    Route::get('/pendaftarans', 'index');
    Route::get('/pendaftaran-siswa', 'create');
    Route::post('/pendaftaran-siswa', 'store');
    Route::get('/edit-pendaftaran/{pendaftaran_id}', 'edit');
    Route::put('/update-pendaftaran/{pendaftaran_id}', 'update');
    Route::delete('/delete-pendaftaran/{pendaftaran_id}', 'destroy');
});
