<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManicureController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/list', [ManicureController::class, 'List']);

Route::get('/one/{id}', [ManicureController::class, 'ListById']);
Route::post('/posts',   [ManicureController::class, 'create']);
Route::put('/edit/{id}', [ManicureController::class, 'Edit']);
Route::post('/delete/{id}', [ManicureController::class, 'delete']);
Route::delete('/excluir/{id}', [ManicureController::class, 'Excluir']);


use App\Models\User;

Route::get('/paginate/{page}', function ($page) {
    return $users = User::paginate($page);


    //
});