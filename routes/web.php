<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\dashboardController;
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

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/manageEmployee', [EmployeeController::class, 'index'])->name('manageEmp.index');
    Route::get('/manageEmployee/add', [EmployeeController::class, 'add'])->name('manageEmp.add');
    Route::post('/manageEmployee', [EmployeeController::class, 'store'])->name('manageEmp.store');
    Route::get('/manageEmployee/{employee}/edit', [EmployeeController::class, 'edit'])->name('manageEmp.edit');
    Route::put('/manageEmployee/{employee}/update', [EmployeeController::class, 'update'])->name('manageEmp.update');
    Route::delete('/manageEmployee/{employee}/delete', [EmployeeController::class, 'delete'])->name('manageEmp.delete');
});

require __DIR__.'/auth.php';
