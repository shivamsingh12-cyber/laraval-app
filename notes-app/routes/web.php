<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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
//     return view('welcome');
// });

Route::controller(NoteController::class)->group(function(){
    Route::get('/','showHome')->name('home');
    Route::post('/add','addData');
    Route::get('/note/{id}','showData')->name('note');
    Route::post('/update/{id}','updateData')->name('update');
    Route::get('/update/{id}','updatepage')->name('updatepage');
    Route::get('/delete/{id}','deleteData')->name('delete');
});

