<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengumumanController;
/*
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/about', function () {
    return view('about');
});

Route::get('/biaya', function () {
    return view('biaya');
});

Route::get('/pending', function () {
    return view('pending');
});

Route::get('/nonaktif', function () {
    return view('nonaktif');
});

Route::controller(UserController::class)->prefix('/user')->name('user.')->group(function () {
    Route::get('/register','register')->name('register');
    Route::post('/store','store')->name('store');
});

// Route::get('/', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

Route::middleware(['auth','isActivate'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(UserController::class)->prefix('/user')->name('user.')->group(function () {
        Route::get('/index','index')->name('index');
        Route::get('/detail/{id}','detail')->name('detail');
        // Route::get('/register','register')->name('register');
        // Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::patch('/update/{id}','update')->name('update');
        Route::delete('/destroy/{id}','destroy')->name('destroy');
    });
    
    Route::controller(MahasiswaController::class)->prefix('/mahasiswa')->name('mahasiswa.')->group(function () {
        Route::get('/index','index')->name('index');
        Route::get('/detail/{id}','detail')->name('detail');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::patch('/update/{id}','update')->name('update');
        Route::delete('/destroy/{id}','destroy')->name('destroy');
    });
    
       
    Route::controller(PengumumanController::class)->prefix('/pengumuman')->name('pengumuman.')->group(function () {
        Route::get('/index','index')->name('index');
        Route::get('/detail/{id}','detail')->name('detail');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::patch('/update/{id}','update')->name('update');
        Route::delete('/destroy/{id}','destroy')->name('destroy');
    });

    Route::get('/informasi-profile', function () {
        return view('informasi-profile');
    });
    

    
    Route::patch('/user/detail/{id}/admin', [UserController::class, 'validationAdmin'])->name('user.validate_admin');

    Route::patch('/mahasiswa/detail/{id}/admin', [MahasiswaController::class, 'validationAdmin'])->name('mahasiswa.validate_admin');

    Route::patch('/mahasiswa/detail/{id}/update_role', [UserController::class, 'updateRole'])->name('user.update_role');


});

require __DIR__.'/auth.php';
