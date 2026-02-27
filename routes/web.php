<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ArticleFrontController;
use App\Http\Controllers\Frontend\ContactController;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Frontend Articles
Route::get('/articles', [ArticleFrontController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleFrontController::class, 'show'])->name('articles.show');

// Admin Auth
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/forgot-password', [AdminAuthController::class, 'showForgotPassword'])->name('admin.forgot-password');
Route::post('/admin/forgot-password', [AdminAuthController::class, 'forgotPassword'])->name('admin.forgot-password.post');
Route::get('/admin/reset-password', [AdminAuthController::class, 'showResetPassword'])->name('admin.reset-password');
Route::post('/admin/reset-password', [AdminAuthController::class, 'resetPassword'])->name('admin.reset-password.post');

// Admin Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// Admin Articles
Route::get('/admin/articles', [ArticleController::class, 'index'])->name('admin.articles.index');
Route::get('/admin/articles/create', [ArticleController::class, 'create'])->name('admin.articles.create');
Route::post('/admin/articles', [ArticleController::class, 'store'])->name('admin.articles.store');
Route::get('/admin/articles/{id}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');
Route::put('/admin/articles/{id}', [ArticleController::class, 'update'])->name('admin.articles.update');
Route::delete('/admin/articles/{id}', [ArticleController::class, 'destroy'])->name('admin.articles.destroy');