<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;

Route::get('/', function () {return view('pages.home');})->name('home');

Route::get('/registration',[RegistrationController::class,'registration'])->name('signup');
Route::post('/registration',[RegistrationController::class,'validateRegistration'])->name('signup');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginCheck'])->name('login');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'validateContact'])->name('contact');

Route::get('/logout',[LogoutController::class,'logout'])->name('logout');

Route::get('/admin/dash',[AdminController::class,'dashboard'])->name('dashboardAdmin')->middleware('UserValidAuth');
Route::get('/manager/dash',[ManagerController::class,'dashboard'])->name('dashboardManager')->middleware('ManagerValidAuth');
Route::get('/admin/edit',[AdminController::class,'editAdminInfo'])->name('editAdminInfo')->middleware('UserValidAuth');
Route::post('/admin/edit',[AdminController::class,'adminInfoUpdate'])->name('adminInfoUpdate')->middleware('UserValidAuth');
Route::get('/manager/edit',[ManagerController::class,'editManagerInfo'])->name('editManagerInfo')->middleware('ManagerValidAuth');
Route::post('/manager/edit',[ManagerController::class,'managerInfoUpdate'])->name('managerInfoUpdate')->middleware('ManagerValidAuth');