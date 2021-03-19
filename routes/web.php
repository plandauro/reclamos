<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReclamoController;

use App\Mail\ReclamosMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', HomeController::class)->name('home');

Route::get('reclamos', [ReclamoController::class, 'index'])->name('reclamos.index');

Route::get('reclamos/create', [ReclamoController::class, 'create'])->name('reclamos.create');

Route::post('reclamos', [ReclamoController::class, 'store'])->name('reclamos.store');

Route::get('reclamos/{reclamo}', [ReclamoController::class, 'show'])->name('reclamos.show');

// CORREO DESDE SHOW
Route::post('reclamos/{reclamo}/envio', [ReclamoController::class, 'envio'])->name('reclamos.envio');


Route::get('reclamos/{reclamo}/edit', [ReclamoController::class, 'edit'])->name('reclamos.edit');

Route::put('reclamos/{reclamo}', [ReclamoController::class, 'update'])->name('reclamos.update');

Route::delete('reclamos/{reclamo}', [ReclamoController::class, 'destroy'])->name('reclamos.destroy');


// CORREO DESDE CONTACTANOS
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');


