<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientGroupController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Rekari!';
});

Route::get('/clients/export', [ClientController::class, 'export'])->name('clients.export');
Route::post('/clients/import', [ClientController::class, 'import'])->name('clients.import');

Route::resource('client-groups', ClientGroupController::class);

Route::resource('clients', ClientController::class);
