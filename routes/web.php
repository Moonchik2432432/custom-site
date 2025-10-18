<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/data/allKlients', [DataController::class, 'showAllKlients']);
Route::get('/data/allTvertne', [DataController::class, 'showAllTvertne']);
Route::get('/data/allAmats', [DataController::class, 'showAllAmats']);
Route::get('/data/allDarbinieks', [DataController::class, 'showAllDarbinieks']);

Route::get('/data/all/{id}/deleteTvertne', [DataController::class, 'deleteTvertne']);
Route::get('/data/all/{id}/deleteKlients', [DataController::class, 'deleteKlients']);
Route::get('/data/all/{id}/deleteDarbinieks', [DataController::class, 'deleteDarbinieks']);
Route::get('/data/all/{id}/deleteAmats', [DataController::class, 'deleteAmats']);

Route::get('/data/all/{id}/showAmatsDetails', [DataController::class, 'showAmatsDetails']);
Route::get('/data/all/{id}/showDarbinieksDetails', [DataController::class, 'showDarbinieksDetails']);
Route::get('/data/all/{id}/showKlientsDetails', [DataController::class, 'showKlientsDetails']);
Route::get('/data/all/{id}/showTvertneDetails', [DataController::class, 'showTvertneDetails']);


//Создания
Route::post('/data/newSubmit', [DataController::class, 'newSubmit']);

Route::get('/data/createAmats', [DataController::class, 'createAmats']);
Route::post('/data/newSubmitAmats', [DataController::class, 'newSubmitAmats']);

Route::get('/data/createDarbinieks', [DataController::class, 'createDarbinieks']);
Route::post('/data/newSubmitDarbinieks', [DataController::class, 'storeDarbinieks']);

Route::get('/data/createKlients', [DataController::class, 'createKlients']);
Route::post('/data/newSubmitKlients', [DataController::class, 'newSubmitKlients']);


//Редактирования
Route::get('/data/editAmats/{id}', [DataController::class, 'editAmats']);
Route::put('/data/updateAmats/{id}', [DataController::class, 'updateAmats']);

Route::get('/data/editDarbinieks/{id}', [DataController::class, 'editDarbinieks']);
Route::put('/data/updateDarbinieks/{id}', [DataController::class, 'updateDarbinieks']);

Route::get('/data/editKlients/{id}', [DataController::class, 'editKlients']);
Route::put('/data/updateKlients/{id}', [DataController::class, 'updateKlients']);

// Route::post('/data/newSubmit', function(){
//     return dd(Request->all());
// });
