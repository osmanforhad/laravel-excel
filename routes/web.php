<?php

use App\Http\Controllers\ExcelexampleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', [ExcelexampleController::class, 'index'])->name('/');
 Route::get('/export', [ExcelexampleController::class, 'export'])->name('export');
 Route::post('/import', [ExcelexampleController::class, 'import'])->name('import');
