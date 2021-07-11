<?php

use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->name('workers.')->group(function () {
    Route::get('/', [WorkerController::class, 'all'])->name('all');
    Route::get('dismissed', [WorkerController::class, 'dismissed'])->name('dismissed');
    Route::get('trial', [WorkerController::class, 'trial'])->name('trial');
    Route::get('leader', [WorkerController::class, 'leaders'])->name('leaders');
    Route::get('test', [WorkerController::class, 'test'])->name('test');
});

