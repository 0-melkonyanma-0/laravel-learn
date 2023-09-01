<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
*/

/*
    Route::post('/posts/{post:slug}',[PostController::class,'destroy'])->name('posts.destroy');

    Route::post('/posts',[PostController::class,'store'])->name('posts.store');
    Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');

    Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
    Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');

    Route::get('/posts',[PostController::class,'index'])->name('posts.index');
    Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');

    Route::get('/posts/{post:slug}',[PostController::class,'show'])->name('posts.show');
    Route::get('/categories/{category:slug}',[CategoryController::class,'show'])->name('categories.show');
*/

Route::get('/', HomePageController::class)->name('index');

Route::middleware(['guest'])->group(function () {
    Route::get('register', [RegisterController::class, 'create'])->name('register.create');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('login', [SessionController::class, 'create'])->name('login.create');
    Route::post('login', [SessionController::class, 'store'])->name('login.store');
});

Route::middleware(['auth'])->group(function() {
    Route::post('logout', [SessionController::class, 'destroy'])->name('logout.destroy');
    Route::post('posts/{post:slug}/comments',[PostCommentsController::class, 'store'])->name('comments.store');
});

Route::resource('posts', PostController::class)->except(['create', 'update', 'edit']);
Route::resource('categories', CategoryController::class)->except(['update', 'edit', 'destroy']);
Route::get('admin/posts/create',[PostController::class, 'create'])->middleware('admin');

Route::resources([
    'authors' => UserController::class,
]);
