<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExamController;


use App\Http\Controllers\PDFController;

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
//Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('preview', [PDFController::class, 'preview']);
Route::get('download', [PDFController::class, 'download'])->name('download');
Route::get('/', function () {
    return view('welcome');
});
Route::get('change-password', [\App\Http\Controllers\ChangePasswordController::class,'index']);

Route::post('change-password', [\App\Http\Controllers\ChangePasswordController::class,'store'])->name('change.password');
Auth::routes();

Route::resource('update-password',SettingsController::class);
Route::resource('update-password-user',\App\Http\Controllers\SettingsController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('exam/{id}/preview', [ExamController::class, 'showPDF']);
Route::get('download', [ExamController::class, 'download'])->name('download');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('exams', ExamController::class);

});
