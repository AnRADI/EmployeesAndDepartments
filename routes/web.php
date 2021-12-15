<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

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

// ---------- Employees -------

Route::get('/', function () {

    return redirect()->route('employees');
});


Route::get('/employees', [EmployeeController::class, 'employees'])
	->name('employees');


// ---------- Department -------

Route::get('/employees/{department}', [DepartmentController::class, 'employeesDepartment'])
	->name('employees.department');