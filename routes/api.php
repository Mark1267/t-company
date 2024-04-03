<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\Settings\CalculatorController;
use App\Http\Controllers\API\CalculatorController as ApiCalculatorController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/plan/calculate', [CalculatorController::class, 'calculate'])->name('api.calculate');

Route::get('/profit/calculate/{amount}/{plan_id}', [ApiCalculatorController::class, 'calculate'])->name('api.open.calculate');

