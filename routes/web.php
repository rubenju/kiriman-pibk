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
Route::get('/entry2', [entryController::class, 'show2']);

Route::post('/add-new-transaction', [entryController::class, 'addNewTransaction'])->name('addNewTransaction');
Route::post('/save-object', [entryController::class, 'saveObject'])->name('saveObject');
// Route::get('/entry3', [entryController::class, 'show3'])->name('showForm');
Route::get('/entry/{id}', [entryController::class, 'entry'])->name('showForm');
Route::get('/profil', [entryController::class, 'getProfilPemberitahu'])->name('getProfil');

//Detail
Route::post('/send', [browseController::class, 'sendData'])->name('sendData');
Route::post('/save', [browseController::class, 'saveData'])->name('saveData');
Route::get('/detail/{id}', [browseController::class, 'showDetail'])->name('showDetail');
Route::get('/detail2/{id}', [browseController::class, 'showDetail2'])->name('showDetail2');
Route::get('/status/{id}', [browseController::class, 'getStatus'])->name('getStatus');

//Browse
Route::get('/browse', [browseController::class, 'show']);
Route::post('/get-data-by-date', [browseController::class, 'getData'])->name('getData');
Route::get('/edit/{id}', [browseController::class, 'editData'])->name('editData');


