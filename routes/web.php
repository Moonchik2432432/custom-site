<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;

// Главная и контакты
Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', function () {
    return view('contacts');
});

// Публичные маршруты логина/регистрации
Route::get('/login', function () {
    return view('login');
})->name('login'); // Laravel auth middleware ищет маршрут с именем 'login'

Route::get('/loginn', function () {
    return view('loginn');
})->name('loginn');

// POST маршруты логина/регистрации
Route::post('/loginp', [LoginController::class, 'login']);
Route::post('/register', [LoginController::class, 'register']);

// Logout — лучше POST
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


// 👇👇👇 ЗАЩИЩЕННЫЕ маршруты для авторизованных пользователей
Route::middleware(['auth'])->group(function () {

    Route::get('/data', function () {
        return view('data');
    });

    // Отображение всех
    Route::get('/data/allKlients', [DataController::class, 'showAllKlients']);
    Route::get('/data/allTvertne', [DataController::class, 'showAllTvertne']);
    Route::get('/data/allAmats', [DataController::class, 'showAllAmats']);
    Route::get('/data/allDarbinieks', [DataController::class, 'showAllDarbinieks']);

    // Удаление
    Route::get('/data/all/{id}/deleteTvertne', [DataController::class, 'deleteTvertne']);
    Route::get('/data/all/{id}/deleteKlients', [DataController::class, 'deleteKlients']);
    Route::get('/data/all/{id}/deleteDarbinieks', [DataController::class, 'deleteDarbinieks']);
    Route::get('/data/all/{id}/deleteAmats', [DataController::class, 'deleteAmats']);

    // Детали
    Route::get('/data/all/{id}/showAmatsDetails', [DataController::class, 'showAmatsDetails']);
    Route::get('/data/all/{id}/showDarbinieksDetails', [DataController::class, 'showDarbinieksDetails']);
    Route::get('/data/all/{id}/showKlientsDetails', [DataController::class, 'showKlientsDetails']);
    Route::get('/data/all/{id}/showTvertneDetails', [DataController::class, 'showTvertneDetails']);

    // Создание
    Route::post('/data/newSubmit', [DataController::class, 'newSubmit']);

    Route::get('/data/createAmats', [DataController::class, 'createAmats']);
    Route::post('/data/newSubmitAmats', [DataController::class, 'newSubmitAmats']);

    Route::get('/data/createDarbinieks', [DataController::class, 'createDarbinieks']);
    Route::post('/data/newSubmitDarbinieks', [DataController::class, 'storeDarbinieks']);

    Route::get('/data/createKlients', [DataController::class, 'createKlients']);
    Route::post('/data/newSubmitKlients', [DataController::class, 'newSubmitKlients']);

    Route::get('/data/createTvertne', [DataController::class, 'createTvertne']);
    Route::post('/data/newSubmitTvertne', [DataController::class, 'newSubmitTvertne']);

    // Редактирование
    Route::get('/data/editAmats/{id}', [DataController::class, 'editAmats']);
    Route::put('/data/updateAmats/{id}', [DataController::class, 'updateAmats']);

    Route::get('/data/editDarbinieks/{id}', [DataController::class, 'editDarbinieks']);
    Route::put('/data/updateDarbinieks/{id}', [DataController::class, 'updateDarbinieks']);

    Route::get('/data/editKlients/{id}', [DataController::class, 'editKlients']);
    Route::put('/data/updateKlients/{id}', [DataController::class, 'updateKlients']);

    Route::get('/data/editTvertne/{id}', [DataController::class, 'editTvertne']);
    Route::put('/data/updateTvertne/{id}', [DataController::class, 'updateTvertne']);
});
