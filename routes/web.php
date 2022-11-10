<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/test', 'template.default');
Route::view('/user', 'user');

Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::get('students/edit', [StudentController::class, 'edit']);
Route::get('students/create', [StudentController::class, 'create']);
Route::post('students', [StudentController::class, 'store']);
Route::delete('students/{id}',[StudentController::class, 'delete'])->name('students.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
