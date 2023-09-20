<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formAddBook', [LibrosController::class, 'showFormAddBook']);

Route::post('/addBook', [LibrosController::class, 'addBookForm'])->name('addBook');
Route::get('/showBooks', [LibrosController::class, 'showAllBooks']);

Route::get('/deleteBook/{id}', [LibrosController::class, 'deleteBook'])->name('deleteBook');
Route::get('/updateBookForm/{id}', [LibrosController::class, 'updateBookForm'])->name('updateBookForm');
Route::post('/updateBook', [LibrosController::class, 'updateBook'])->name('updateBook');

Route::get('/showFormAddPrestamo', [PrestamosController::class, 'showFormAddPrestamo'])->name('showFormAddPrestamo');

Route::post('/addPrestamo', [PrestamosController::class, 'addPrestamoForm'])->name('addPrestamo');
Route::get('/showPrestamos', [PrestamosController::class, 'showAllPrestamos']);

Route::get('/updatePrestamoForm/{id}', [PrestamosController::class, 'updatePrestamoForm'])->name('updatePrestamoForm');
Route::post('/updatePrestamo', [PrestamosController::class, 'updatePrestamo'])->name('updatePrestamo');
Route::get('/updateDevolucionForm/{id}', [PrestamosController::class, 'updateDevolucionForm'])->name('updateDevolucionForm');

Route::post('/addDevolucion', [PrestamosController::class, 'addDevolucion'])->name('addDevolucion');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
