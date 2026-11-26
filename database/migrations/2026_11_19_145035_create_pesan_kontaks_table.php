
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;
use App\Http\Controllers\PesanKontakController;

Route::get('/', [CVController::class, 'index']);

Route::post('/kontak', [PesanKontakController::class, 'store'])
    ->name('kontak.store');
