<?php

use App\Http\Controllers\TicketsControler;
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
Route::post('store',[TicketsControler::class,'store'])->name('tickets.store');
Route::get('index',[TicketsControler::class,'index'])->name('tickets.index');
Route::get('showall',[TicketsControler::class,'all'])->name('tickets.all');
Route::get('showticet/{id}',[TicketsControler::class,'show'])->name('tickets.showticet');
