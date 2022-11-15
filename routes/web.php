<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
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

Route::middleware('admin:admin')->group(function (){
    Route::get('/admin/login', [AdminController::class, 'loginForm']);
    Route::post('/admin/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/admin/dashboard', function(){
        return view('admin.index');
    })->name('admin.dashboard');
});

//Admin All Route
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile', [AdminProfileController ::class, 'AdminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit',[AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');






Route::middleware(['auth:sanctum',config('jetstream.auth_session'),
'verified'])->group(function () {
    Route::get('/dashboard', function(){ return view('dashboard');})->name('dashboard');
});
