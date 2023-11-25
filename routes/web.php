<?php

use App\Http\Controllers\BookshelfController;
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
// Route::middleware('auth')->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     })->middleware(['role:admin']);
// });

Route::get('/', function(){
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::get('/role', function(){
        return view('role');
    })->name('role')->middleware(['role:mahasiswa']);

    Route::get('/bookshelf', [BookshelfController::class, 'index'])
    ->name('bookshelf')->middleware(['role:admin']);
});
// Route::middleware('auth')->group(function () {
//     Route::view('/roles', 'role')->name('role')->middleware(['role:pustakawan']);
// });
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
