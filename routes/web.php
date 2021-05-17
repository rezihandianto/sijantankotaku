<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JalanController;
use App\Http\Controllers\WilayahController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::resource('jalan', JalanController::class);
Route::get('jalan', [JalanController::class, 'index'])->name('jalan.index');
Route::post('jalan/store', [JalanController::class, 'store'])->name('jalan.store');
Route::get('jalan/create', [JalanController::class, 'create'])->name('jalan.create');
Route::get('wilayah', [WilayahController::class, 'index'])->name('wilayah.index');
Route::get('wilayah/create', [WilayahController::class, 'create'])->name('wilayah.create');
Route::post('wilayah/store', [WilayahController::class, 'store'])->name('wilayah.store');
Route::get('sta/create/{id}', [JalanController::class, 'getstaId'])->name('sta.create');


// Route::group(['middleware' => ['auth']], function () {
//     // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     // // Route::resource('jalan', JalanController::class);
//     // Route::get('jalan', [JalanController::class, 'index'])->name('jalan.index');
//     // Route::post('jalan/store', [JalanController::class, 'store'])->name('jalan.store');
//     // Route::get('jalan/create', [JalanController::class, 'create'])->name('jalan.create');
//     // Route::get('wilayah', [WilayahController::class, 'index'])->name('wilayah.index');
// });



require __DIR__ . '/auth.php';
