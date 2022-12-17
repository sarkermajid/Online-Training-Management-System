<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\EnrollController;
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

// User Route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/training-category/{id}', [HomeController::class, 'categoryTraining'])->name('training.category');
Route::get('/all-training', [HomeController::class, 'allTraining'])->name('training.all');
Route::get('/training-detail/{id}', [HomeController::class, 'trainingDetail'])->name('training.detail');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class, 'LoginRegistration'])->name('login-registration');

//Enroll Route
Route::get('/training-enroll/{id}',[EnrollController::class,'index'])->name('training.enroll');
Route::post('/training-new-enroll/{id}',[EnrollController::class,'newEnroll'])->name('training.new-enroll');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Teacher Route
    Route::get('/teacher/add', [TeacherController::class, 'index'])->name('teachers.add');
    Route::get('/teacher/manage', [TeacherController::class, 'manage'])->name('teachers.manage');
    Route::post('/teacher/create',[TeacherController::class, 'create'])->name('teacher.create');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');

    // Category Route
    Route::get('/category/add',[CategoryController::class, 'index'])->name('category.add');
    Route::get('/category/manage',[CategoryController::class, 'manage'])->name('category.manage');
    Route::post('/category/create',[CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');

    // Course Route
    Route::get('admin/course/manage',[AdminCourseController::class,'index'])->name('admin.course.manage');
    Route::get('admin/course/detail/{id}',[AdminCourseController::class,'detail'])->name('admin.course.detail');
    Route::get('admin/course/status/{id}',[AdminCourseController::class,'status'])->name('admin.course.status');
    Route::get('admin/course/offer-status/{id}',[AdminCourseController::class,'offerStatus'])->name('admin.course.offer-status');
    Route::post('admin/course/offer-create/{id}',[AdminCourseController::class,'offerCreate'])->name('admin.course.offer-create');
    Route::get('admin/course/delete/{id}',[AdminCourseController::class,'delete'])->name('admin.course.delete');
});

// Teacher Dashboard Route
Route::get('/teacher/login',[TeacherAuthController::class, 'index'])->name('teacher.login');
Route::post('/teacher/login',[TeacherAuthController::class, 'login'])->name('teacher.login');
Route::get('/teacher/dashboard',[TeacherAuthController::class, 'dashboard'])->name('teacher.dashboard');

// Teacher Course route
Route::get('course/add',[CourseController::class, 'index'])->name('course.add');
Route::post('course/create',[CourseController::class, 'create'])->name('course.create');
Route::get('course/manage',[CourseController::class, 'manage'])->name('course.manage');
Route::get('course/edit/{id}',[CourseController::class, 'edit'])->name('course.edit');
Route::post('course/update/{id}',[CourseController::class, 'update'])->name('course.update');
Route::get('course/delete/{id}',[CourseController::class, 'delete'])->name('course.delete');
