<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\AboutController;

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

Route::get('/', [FrontController::class, 'index']);
// Route::get('/indexback', [BackController::class, 'index']);


// Route::get('/indexback', [BackController::class, 'index'])->middleware(['auth', 'verified'])->name('indexback');

Route::middleware('auth')->group(function () {

    Route::get('/indexback', [BackController::class, 'index'])->name('indexback.index');

    Route::get('/indexback', [BackController::class, 'index'])->name('backend.partials.indexback');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    ///////////////////////   ABOUT    ///////////////////////////////////
    Route::get('/indexabout', [AboutController::class, 'index'])->name('indexabout');
    Route::get('/show/{id}', [AboutController::class, 'show'])->name('about.show');
    Route::post('/indexabout', [AboutController::class, 'store']);
    Route::get('/create', [AboutController::class, 'create'])->name('create');


});

require __DIR__.'/auth.php';
