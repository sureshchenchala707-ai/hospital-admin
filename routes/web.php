<?php

use App\Http\Controllers\OpController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\PatientController;

// OP registration
Route::get('/', [OpController::class, 'create']);
Route::post('/op/store', [OpController::class, 'store']);

// Patients list
Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');

// OP list
Route::get('/ops', [OpController::class, 'index'])->name('ops.index');

// Bill routes
Route::get('/bill/{id}', [BillController::class, 'create']);
Route::post('/bill/store', [BillController::class, 'store']);
Route::get('/bill/print/{id}', [BillController::class, 'print']);

use App\Http\Controllers\ChatController;

Route::post('/chat', [ChatController::class, 'chat']);
// Route::post('/chat', function () {
//     return response()->json(['reply' => 'working']);
// });

Route::get('/chat-ui', function () {
    return view('chat');
});