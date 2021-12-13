<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DisciplineController;

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

// ---------- Teachers -------

Route::get('/', function () {

    return redirect()->route('teachers.index');
});


$methods = ['index', 'edit', 'update', 'create', 'store', 'destroy'];

Route::resource('teachers', TeacherController::class)
	->only($methods)
	->names('teachers');


// ---------- Disciplines -------

$methods = ['index', 'edit', 'update', 'create', 'store', 'destroy'];

Route::resource('disciplines', DisciplineController::class)
	->only($methods)
	->names('disciplines');