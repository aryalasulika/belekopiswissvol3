<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;

// Route::get('/', function () {
//     return view('index');
// });

// Sekarang halaman utama akan otomatis memanggil Controller dan membawa data $schedules
Route::get('/', [TournamentController::class, 'index']);

// Halaman Utama Web
Route::get('/bele-kopi-swiss-s3', [TournamentController::class, 'index']);

// Halaman CRUD Admin (Bisa kamu amankan nanti)
Route::get('/admin/schedule', [TournamentController::class, 'adminPanel'])->name('admin.schedule');
Route::post('/admin/schedule', [TournamentController::class, 'store'])->name('admin.schedule.store');
Route::put('/admin/schedule/{id}', [TournamentController::class, 'update'])->name('admin.schedule.update');
Route::delete('/admin/schedule/{id}', [TournamentController::class, 'destroy'])->name('admin.schedule.destroy');
