<?php

use App\Http\Controllers\Web\FrequencyController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ParticipantsController;
use App\Http\Controllers\Web\RegistryParticipantController;
use App\Http\Controllers\Web\RegistryMonitorController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/registry', [RegistryParticipantController::class, 'index']);
Route::get('/registry/monitor', [RegistryMonitorController::class, 'index']);
Route::get('/participants', [ParticipantsController::class, 'index']);
Route::get('/frequency/{activityId}', [FrequencyController::class, 'index']);
