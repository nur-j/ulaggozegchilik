<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RssFeedController;
use App\Http\Controllers\Auth\UserController;

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



/* +++++++++++++++++  ADMIN ROUTES   +++++++++++++++++++++++++ */

Route::group(['prefix' => '/backend/admin', 'middleware' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin_panel');

    Route::get('/news', [NewsController::class, 'admin_news'])->name('admin_news');
    Route::get('/add-news', [NewsController::class, 'add_news'])->name('add_news');
    Route::post('/save-post', [NewsController::class, 'store'])->name('save_post');
    Route::get('/edit-post/{id}', [NewsController::class, 'edit'])->name('edit_post');
    Route::put('/update-post/{id}', [NewsController::class, 'update'])->name('update_post');
    Route::delete('delete-post/{id}', [NewsController::class, 'destroy'])->name('delete_post');

    Route::get('/requests', [RequestController::class, 'index'])->name('requests.index');
    Route::get('/requests/export', [RequestController::class, 'export'])->name('requests.export');
    Route::get('/requests/{id}', [RequestController::class, 'show'])->name('requests_single');
    Route::put('/request/{id}/accept', [RequestController::class, 'accept'])->name('accept.request');
    Route::put('/request/{id}/reject', [RequestController::class, 'reject'])->name('reject.request');
    Route::get('/notifications', function() { 
        return response()->view('pusher'); 
    });

    Route::get('/permissions', [PermissionController::class, 'adminIndex'])->name('admin.permissions');
    Route::get('/permission/{id}', [PermissionController::class, 'adminShow'])->name('admin.permission.single');
    Route::delete('/permission/{id}', [PermissionController::class, 'destroy'])->name('admin.permission.delete');

    Route::resource('category', CategoryController::class);

    /* Users */
    Route::get('/users', [UserController::class, 'index'])->name('admin.userlist');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('admin.user_single');
});


/* admin login page */
Route::get('/backend/admin/login', [AuthController::class, 'loginAdmin'])->name('admin.login');
Route::post('/backend/admin/login', [AuthController::class, 'postLoginAdmin'])->name('admin.login.post');
Route::get('/backend/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');





Route::get('/', [PageController::class, 'home_page'])->name('home.page')->middleware('visitor');
Route::middleware(['visitor'])->group(function () {
    Route::get('/about', [PageController::class, 'about_page'])->name('about.page');
    Route::get('/contact', [PageController::class, 'contact_page'])->name('contact.page');
    Route::get('/services', [PageController::class, 'services_page'])->name('services.page');
    Route::get('/request', [PageController::class, 'request_page'])->name('request.page');
    Route::get('/news', [NewsController::class, 'index'])->name('news.page');
});





Route::get('/lang-change', [LanguageController::class, 'langChange'])->name('lang.change');




/* Ýüz tutma routes */
Route::post('/save-request', [RequestController::class, 'save_request'])->name('save.request');

/* NEWS ROUTES */
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.single');
Route::get('/news/category/{id}', [NewsController::class, 'by_category'])->name('news.by.category');



/* Rugsatnama routes */
Route::get('/rugsatnama', [PermissionController::class, 'index'])->name('permission.form');
Route::post('/create-rugsatnama', [PermissionController::class, 'create'])->name('permission.create');
Route::get('/rugsatnama/export', [PermissionController::class, 'export'])->name('permissions.export');


/* AUTHENTICATION ROUTES */

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

/* EMAIL ROUTES */
Route::get('sendbasicemail', [MailController::class, 'basic_email']);
Route::get('viewmail', function() {
    return view('request_mail');
});

/* RSS */
Route::get('/rss', [RssFeedController::class,'generate_rss_feed'])->name('feed');

