<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\SubjectController;
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

Route::get('/user', [UserController::class, 'getListUser']);
Route::get('/courseRequest', [UserController::class, 'getCourseRequest']);

Route::post('/admin', [UserController::class, 'addUserAdmin']);
Route::put('/admin/{id}', [UserController::class, 'updateAdmin']);
Route::delete('/admin/{id}', [UserController::class, 'deleteAdmin']);


Route::get('/class', [ClassesController::class, 'getListClass']);
Route::get('/manager-class-for-user/{userId}', [ClassesController::class, 'getClassManagerForUser']);
Route::post('/add_class', [ClassesController::class, 'addClass']);

Route::get('/subject', [SubjectController::class, 'getListSubject']);
Route::post('/add_subject', [SubjectController::class, 'addSubject']);

Route::get('/test', function () {
    return view('layout');
});
