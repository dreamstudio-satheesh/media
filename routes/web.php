<?php

use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
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






Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('home');

Auth::routes([

    'register' => false, // Register Routes...
  
    'reset' => false, // Reset Password Routes...
  
    'verify' => false, // Email Verification Routes...
  
  ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/createbill', [App\Http\Controllers\BillController::class, 'index'])->name('createbill');
Route::put('/updatebill', [App\Http\Controllers\BillController::class, 'update'])->name('updatebill');
Route::get('/billstatus', [App\Http\Controllers\BillController::class, 'status'])->name('billstatus');
Route::get('/billstatus/{bill}', [App\Http\Controllers\BillController::class, 'viewbill']);


Route::get('/managebill', [App\Http\Controllers\BillController::class, 'manage'])->name('managebill');
Route::get('/managebill/{bill}', [App\Http\Controllers\BillController::class, 'managebill']);




Route::group([
    'middleware' => 'auth'
], function () {
    // Admin Routes
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => ['auth']
    ], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('users', UserController::class);

        Route::resource('blogs', AdminBlogController::class);
    });
    // User routes

    // Common routes
    Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/{user}/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
});
