<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController; // Import Controller

Route::get('/', function () {
    return redirect()->route('shoes.index'); // Redirect ke daftar sepatu
});

Route::get('/shoes', [ShoeController::class, 'index'])->name('shoes.index');
Route::get('/shoes/{shoe}', [ShoeController::class, 'show'])->name('shoes.show');