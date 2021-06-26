<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperatorController as OC;
use App\Http\Controllers\KargoController as KC;
use App\Http\Controllers\ContainerController as CC;
use App\Http\Controllers\PelabuhanController as PC;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('admin/operator', [OC::class, 'index'])->name('operator.index');
Route::get('admin/operator/create', [OC::class, 'create'])->name('operator.create');
Route::post('admin/operator/store', [OC::class, 'store'])->name('operator.store');
Route::get('admin/operator/edit/{nip_operator}', [OC::class, 'edit'])->name('operator.edit');
Route::post('admin/operator/update', [OC::class, 'update'])->name('operator.update');
Route::delete('admin/operator/delete/{nip_operator}', [OC::class, 'destroy'])->name('operator.destroy');

Route::get('admin/kapal', [KC::class, 'index'])->name('kapal.index');
Route::get('admin/kapal/create', [KC::class, 'create'])->name('kapal.create');
Route::post('admin/kapal/store', [KC::class, 'store'])->name('kapal.store');
Route::get('admin/kapal/edit/{id_kapal}', [KC::class, 'edit'])->name('kapal.edit');
Route::post('admin/kapal/update', [KC::class, 'update'])->name('kapal.update');
Route::delete('admin/kapal/delete/{id_kapal}', [KC::class, 'destroy'])->name('kapal.destroy');

Route::get('admin/kontainer', [CC::class, 'index'])->name('kontainer.index');
Route::get('admin/kontainer/create', [CC::class, 'create'])->name('kontainer.create');
Route::post('admin/kontainer/store', [CC::class, 'store'])->name('kontainer.store');
Route::get('admin/kontainer/edit/{id_container}', [CC::class, 'edit'])->name('kontainer.edit');
Route::post('admin/kontainer/update', [CC::class, 'update'])->name('kontainer.update');
Route::delete('admin/kontainer/delete/{id_container}', [CC::class, 'destroy'])->name('kontainer.destroy');

Route::get('admin/pelabuhan', [PC::class, 'index'])->name('pelabuhan.index');
Route::get('admin/pelabuhan/create', [PC::class, 'create'])->name('pelabuhan.create');
Route::post('admin/pelabuhan/store', [PC::class, 'store'])->name('pelabuhan.store');
Route::get('admin/pelabuhan/edit/{id_pelabuhan}', [PC::class, 'edit'])->name('pelabuhan.edit');
Route::post('admin/pelabuhan/update', [PC::class, 'update'])->name('pelabuhan.update');
Route::delete('admin/pelabuhan/delete/{id_pelabuhan}', [PC::class, 'destroy'])->name('pelabuhan.destroy');
