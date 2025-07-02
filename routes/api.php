<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\GameScoreController;
use App\Http\Controllers\TokenCreateController;
use App\Http\Controllers\WithdrawController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PredictionController;


Route::post('get/token', [TokenCreateController::class, 'getToken'])->name('get.token');

Route::middleware([
    'auth:sanctum',
])->group(function () {
    Route::post('/predict', [PredictionController::class, 'predict']);
    Route::post('/save-diagnosis', [DiagnosisController::class, 'saveDiagnosis']);
    Route::get('/diagnoses', [DiagnosisController::class, 'getDiagnoses']);
    Route::delete('/diagnoses/{id}', [DiagnosisController::class, 'deleteDiagnosis']);
    Route::post('/save-score', [GameScoreController::class, 'saveScore']);
    Route::get('/leaderboard', [GameScoreController::class, 'getLeaderboard']);

    Route::get('/doctors', [DoctorController::class, 'index']);
    Route::resource('/consultations', ConsultationController::class)->only(['index', 'store']);
    Route::post('participant/withdraw', WithdrawController::class);
});
