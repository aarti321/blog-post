<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController as AdminPostController;;
use App\Http\Controllers\Admin\UserController as AdminUserController;;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;


// Public routes
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//logout

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');


// Admin routes 

    Route::middleware(['auth'])->prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            if (auth()->user()->role === 'admin') {
                return view('admin.dashboard');
            } elseif (auth()->user()->role === 'author') {
                return view('admin.author');
            }
    
            return abort(403, 'Unauthorized');
        })->name('admin.dashboard');
    




// Admin Routes (protected by auth middleware and AdminMiddleware)
// Route::middleware(['auth', 'role:admin,author'])->prefix('admin')->group(function () {
//     Route::get('/dashboard', [AdminPostController::class, 'index'])->name('admin.dashboard');

    Route::middleware('role:admin,author')->group(function () {
        Route::get('posts', [AdminPostController::class, 'index'])->name('admin.posts.index');
        Route::get('posts/create', [AdminPostController::class, 'create'])->name('admin.posts.create');
        Route::post('posts', [AdminPostController::class, 'store'])->name('admin.posts.store');
        Route::get('posts/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.posts.edit');
        Route::put('posts/{post}', [AdminPostController::class, 'update'])->name('admin.posts.update');
        Route::delete('posts/{post}', [AdminPostController::class, 'destroy'])->name('admin.posts.destroy');
    });

    Route::middleware('role:admin')->group(function () {
        Route::get('users', [AdminUserController::class, 'index'])->name('admin.users.index');
        Route::get('users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
        Route::post('users', [AdminUserController::class, 'store'])->name('admin.users.store');
        Route::get('users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
        Route::put('users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
        Route::delete('users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
    });
});


