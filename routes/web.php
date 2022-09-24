<?php

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

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/', function(){
    return redirect()->route('login');
});

Route::group(['prefix'=>'console','as'=>'console.','middleware' => 'auth'], function () {
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    
    //User Management
    Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('user/add', [App\Http\Controllers\UserController::class, 'add'])->name('user.add');
    Route::post('user/add', [App\Http\Controllers\UserController::class, 'add_save']);
    Route::get('user/profile/{id}', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::post('user/profile/{id}', [App\Http\Controllers\UserController::class, 'profile_save']);
    Route::get('user/changepassword/{id}', [App\Http\Controllers\UserController::class, 'changepassword'])->name('user.changepassword');
    Route::post('user/changepassword/{id}', [App\Http\Controllers\UserController::class, 'changepassword_save']);
    Route::get('user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);

    //Setting
    Route::get('setting', [App\Http\Controllers\SettingController::class, 'index'])->name('setting.index');
    Route::post('setting', [App\Http\Controllers\SettingController::class, 'index_save']);

    //Patient
    Route::get('patient', [App\Http\Controllers\PatientController::class, 'index'])->name('patient.index');
    Route::get('patient/add', [App\Http\Controllers\PatientController::class, 'add'])->name('patient.add');
    Route::post('patient/add', [App\Http\Controllers\PatientController::class, 'add_save']);
    Route::get('patient/profile/{id}', [App\Http\Controllers\PatientController::class, 'profile'])->name('patient.profile');
    Route::post('patient/profile/{id}', [App\Http\Controllers\PatientController::class, 'profile_save']);
    Route::get('patient/delete/{id}', [App\Http\Controllers\PatientController::class, 'delete']);
});
