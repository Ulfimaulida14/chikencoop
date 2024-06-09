<?php

use App\Http\Controllers\AuthControl;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthControl::class, 'index'])->name('login');
Route::post('/auth/login',[AuthControl::class, 'login']);
Route::post('/auth/logout',[AuthControl::class, 'logout']);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });
    Route::get('/config_heater', function () {
        return view('dashboard.config-h');
    });
    Route::get('/config_lamp', function () {
        return view('dashboard.config-L');
    });
    Route::get('/Muser', function () {
        return view('dashboard.Muser');
    });
    Route::get('/Mdevices', function () {
        return view('dashboard.Mdevices');
    });

});
