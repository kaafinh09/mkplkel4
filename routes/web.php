<?php

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

use App\Http\Controllers\bukuController;


Route::get('/', [bukuController::class, 'root']);
Route::get('/welcome', [bukuController::class, 'show' ]);
Route::get('/create', [bukuController::class, 'create' ]);
Route::get('/delete/{id}', [bukuController::class, 'destroy' ]);
Route::post('/add', [bukuController::class, 'add' ]);
Route::post('/update', [bukuController::class, 'update' ]);
Route::get('/detail/{id}', [bukuController::class, 'detail' ]);