<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LandingController;

use App\Http\Middleware\UserMiddleware;

use App\Mail\NewUserWelcomeMail;
use App\Models\User;

// Home Route
Route::get('/', [LandingController::class, 'landing'])->name(name: 'landing');

// Authentication Routes
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Post Routes
Route::prefix('posts')->group(function () {
    Route::get('/', [PostsController::class, 'index'])->name('posts.index');
    Route::get('/create', [PostsController::class, 'create'])->name('posts.create');
    Route::post('/', [PostsController::class, 'store'])->name('posts.store');
    Route::get('/{post}', [PostsController::class, 'show'])->name('posts.show');
    Route::get('/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
    Route::patch('/{post}', [PostsController::class, 'update'])->name('posts.update');
    Route::delete('/{post}', [PostsController::class, 'destroy'])->name('posts.destroy');
    Route::post('/{post}/like', [PostLikeController::class, 'toggleLike'])->name('posts.like');
})->middleware('auth');

// Profile Routes
Route::prefix('profile')->group(function () {
   Route::get('/{user}/edit', [ProfilesController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/{user}', [ProfilesController::class, 'update'])
        ->name('profile.update');
    Route::get('/{user}', [ProfilesController::class, 'index'])
        ->name('profile.show');
})->middleware('auth');

// Follow/Unfollow Routes
Route::middleware('auth')->group(function () {
    Route::post('/follow/{user}', [FollowerController::class, 'follow'])->name('follow');
    Route::delete('/unfollow/{user}', [FollowerController::class, 'unfollow'])->name('unfollow');
});

// Change Password Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/password/change', [PasswordController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/password/change', [PasswordController::class, 'updatePassword'])->name('password.update');
});

// Search Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/search', [SearchController::class, 'index'])->name('search');

});

