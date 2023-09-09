<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TeacherController;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $categories = Category::all();
    $books = Book::take(10)->get();
    $students = User::where("role", "student")->get()->count();
    return view('dashboard.pages.index', compact('categories', 'books', 'students'));
})->middleware(['auth'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/', [CategoryController::class, 'store'])->name('store');
        Route::post('/{id}', [CategoryController::class, 'update'])->name('update');
        Route::get('/{id}/delete', [CategoryController::class, 'destroy'])->name('destroy');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    });

    Route::group(['prefix' => 'books', 'as' => 'books.'], function () {
        Route::get('/', [BookController::class, 'index'])->name('index');
        Route::get('/create', [BookController::class, 'create'])->name('create');
        Route::post('/', [BookController::class, 'store'])->name('store');
        Route::post('/{id}', [BookController::class, 'update'])->name('update');
        Route::get('/{id}/delete', [BookController::class, 'destroy'])->name('destroy');
        Route::get('/{id}/edit', [BookController::class, 'edit'])->name('edit');
        // Route::get('/{id}', [BookController::class, 'show'])->name('show');
    });

    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', [AdminController::class, 'users'])->name('users');
        Route::get('/create', [AdminController::class, 'create'])->name('create');
        Route::post('/', [AdminController::class, 'store'])->name('store');
        Route::post('/{id}', [AdminController::class, 'update'])->name('update');
        Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('edit');
        Route::get('/{id}/delete', [AdminController::class, 'destroy'])->name('destroy');
        Route::get('/{id}', [AdminController::class, 'show'])->name('show');
    });

    Route::group(['prefix' => 'teachers', 'as' => 'teachers.'], function () {
        Route::get('/', [TeacherController::class, 'index'])->name('teachers');
        Route::get('/create', [TeacherController::class, 'create'])->name('create');
        Route::post('/', [TeacherController::class, 'store'])->name('store');
        Route::post('/{id}', [TeacherController::class, 'update'])->name('update');
        Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');
        Route::get('/{id}/delete', [TeacherController::class, 'destroy'])->name('destroy');
        Route::get('/{id}', [TeacherController::class, 'show'])->name('show');
    });

    Route::group(['prefix' => 'students', 'as' => 'students.'], function () {
        Route::get('/', [AdminController::class, 'students'])->name('students');
        Route::get('/{id}', [BookController::class, 'display_book'])->name('display_book');
    });
});

require __DIR__ . '/auth.php';
