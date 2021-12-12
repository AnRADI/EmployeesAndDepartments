<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

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

// ---------- teachers -------

Route::get('/', function () {

    return redirect()->route('teachers.index');
});


$methods = ['index', 'edit', 'update', 'create', 'store', 'destroy'];

Route::resource('teachers', TeacherController::class)
	->only($methods)
	->names('teachers');