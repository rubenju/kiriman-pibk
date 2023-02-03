<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\entryController;
use App\Http\Controllers\browseController;

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

Route::get('/login', function () {
    return view('layout.login');
});

Route::get('/', function () {
    return view('section.entry', ["title" => "Entry Data"]);
});

//Entry
Route::get('/entry', [entryController::class, 'show']);
Route::post('/save-object', [entryController::class, 'saveObject'])->name('saveObject');

//Browse
Route::get('/browse', [browseController::class, 'show']);
Route::post('/get-data', [browseController::class, 'getData'])->name('getData');
Route::get('/detail/{id}', [browseController::class, 'showDetail'])->name('showDetail');
Route::get('/detail2/{id}', [browseController::class, 'showDetail2'])->name('showDetail2');
Route::get('/edit/{id}', [browseController::class, 'editData'])->name('editData');
Route::get('/send/{id}', [browseController::class, 'sendData'])->name('sendData');
Route::get('/save/{id}', [browseController::class, 'saveData'])->name('saveData');
Route::get('/status/{id}', [browseController::class, 'getStatus'])->name('getStatus');


