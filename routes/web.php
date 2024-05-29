<?php

use App\Http\Controllers\UserController;
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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::get('/', function(){
    return view('dashboard');
})->name('dashboard');

Route::post("/register", [UserController::class, "register"]);
Route::post("/login", [UserController::class, "login"]);
Route::get('/logout', [UserController::class, "logout"])->name('logout');

// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/entry', function () {
//         return view('entry', [
//             'route' => 'entry',
//         ]);
//     });

//     Route::post('/entry', [SurveyController::class, "entry"])->name('entry');
//     Route::post('/saveCategory', [SurveyController::class, "saveCategory"])->name('saveCategory');
//     Route::get('/history', [SurveyController::class, "history"])->name('history');
//     Route::get('/export', [SurveyController::class, "export"])->name('export');
// });


