<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\VisimisiController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

// frontend
Route::get('/visimisi', [VisimisiController::class, 'frontendIndex'])->name('visimisi');
Route::get('/staff', [StaffController::class, 'frontendIndex'])->name('staff');
Route::get('/risetdankajian', [PostsController::class, 'frontendRisetdankajian'])->name('risetdankajian');
Route::get('/livelihood', [PostsController::class, 'frontendLivelihood'])->name('livelihood');
Route::get('/foto', [MediaController::class, 'frontendFoto'])->name('foto');
Route::get('/video', [MediaController::class, 'frontendVideo'])->name('video');
Route::get('/contact', [InboxController::class, 'contact'])->name('contact');
Route::get('/livelihood/{id}/{slug}', [PostsController::class, 'detail']);


//backend
Route::group(['middleware' => 'checkSession'], function () {
    Route::get('/cms/dashboard', [DashboardController::class, 'index']);
    Route::get('/cms/settings', [SettingsController::class, 'index']);
    Route::get('/cms/visimisi', [VisimisiController::class, 'index']);
    Route::get('/cms/staff', [StaffController::class, 'index']);
    Route::get('/cms/addstaff', [StaffController::class, 'addstaff']);
    Route::get('/cms/staff/{id}', [StaffController::class, 'editstaff']);
    Route::get('/cms/cover', [SettingsController::class, 'cover']);
    Route::get('/cms/footer', [SettingsController::class, 'footer']);
    Route::get('/cms/posts', [PostsController::class, 'index']);
    Route::get('/cms/addposts', [PostsController::class, 'addposts']);
    Route::get('/cms/posts/{id}', [PostsController::class, 'editposts']);
    Route::get('/cms/foto', [MediaController::class, 'foto']);
    Route::get('/cms/addfoto', [MediaController::class, 'addfoto']);
    Route::get('/cms/foto/{id}', [MediaController::class, 'editfoto']);
    Route::get('/cms/video', [MediaController::class, 'video']);
    Route::get('/cms/addvideo', [MediaController::class, 'addvideo']);
    Route::get('/cms/video/{id}', [MediaController::class, 'editvideo']);
    Route::get('/cms/inbox', [InboxController::class, 'inbox']);

    Route::group(['prefix' => '/cms/mnukwar-filemanager', 'middleware' => 'checkSession'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});


//if there is no session , redirect to login page
Route::group(['middleware' => 'hasSession'], function () {
    Route::get('cms/login', [LoginController::class, 'index'])->name('login');
});

//route logout
Route::get('/cms/page/logout', function () {
    session()->flush();
    return redirect('/cms/login');
});
