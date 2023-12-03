<?php

use App\Http\Controllers\Api\ActivityController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ParticipantController;
use App\Http\Controllers\Api\SubscriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/subscriptions', SubscriptionController::class);

Route::apiResource('/participants', ParticipantController::class);
Route::get('/participants/{participantId}/accredit/', [ParticipantController::class, 'accredit']);

Route::group(['prefix'=> '/activities'], function () {
    Route::get('{activityId}/has-vacancies', [ActivityController::class, 'hasVacancies']);
    Route::get('/workshops', [ActivityController::class, 'workshops']);
});

Route::group(['prefix' => '/events'], function () {
    Route::get('/unique', [EventController::class, 'unique']);
});
