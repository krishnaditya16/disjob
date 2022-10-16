<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

// Login & Logout Route

Auth::routes();
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/user', [App\Http\Controllers\frontend\User\UserController::class, 'index'])->name('user')->middleware('user');
Route::get('/employer', [App\Http\Controllers\frontend\Employer\EmployerController::class, 'index'])->name('employer')->middleware('employer');

// Main Pages
Route::get('/', [App\Http\Controllers\MainpageController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\MainpageController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\MainpageController::class, 'sendEmail'])->name('send.email');
Route::get('/about', [App\Http\Controllers\MainpageController::class, 'about'])->name('about');
Route::get('/joblisting', [App\Http\Controllers\MainpageController::class, 'joblisting'])->name('joblisting');
Route::get('/joblisting/{id}', [App\Http\Controllers\MainpageController::class, 'show'])->name('show');

// Admin Dashboard Route

// Route::get('/admin', 'App\Http\Controllers\Admin\AdminController@index');
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/contact', 'App\Http\Controllers\Admin\AdminController@contact')->name('contact');
    Route::resource('/admin/user', 'App\Http\Controllers\Admin\UserController');
    Route::resource('/admin/perusahaan', 'App\Http\Controllers\Admin\PerusahaanController');
    Route::resource('/admin/kategori', 'App\Http\Controllers\Admin\KategoriController');
    Route::resource('/admin/lokasi', 'App\Http\Controllers\Admin\LokasiController');
    Route::resource('/admin/job', 'App\Http\Controllers\Admin\JobController');
    Route::resource('/admin/type', 'App\Http\Controllers\Admin\TypeController');
});

// User Dashboard Route
// Route::get('/my-profile', [App\Http\Controllers\frontend\User\UserController::class, 'profile'])->name('profile')->middleware('user');
// Route::get('/upload-cv', [App\Http\Controllers\frontend\User\UserController::class, 'resume'])->name('resume')->middleware('user');
// Route::get('/my-application', [App\Http\Controllers\frontend\User\UserController::class, 'job_apply'])->name('job_apply')->middleware('user');
Route::group(['middleware' => 'user'], function () {

    Route::get('/profile', 'App\Http\Controllers\frontend\User\ProfileController@edit')->name('profile.edit');
    Route::patch('/profile', 'App\Http\Controllers\frontend\User\ProfileController@update')->name('profile.update');
    Route::get('/resume', 'App\Http\Controllers\frontend\User\ResumeController@index')->name('resume.index');
    Route::post('/resume', 'App\Http\Controllers\frontend\User\ResumeController@upload')->name('resume.upload');
    Route::delete('/resume/{id}', 'App\Http\Controllers\frontend\User\ResumeController@destroy')->name('resume.destroy');
    Route::get('/my-application', 'App\Http\Controllers\frontend\User\JobApplicationController@index')->name('jobapp.index');
    Route::delete('/my-application/{id}', 'App\Http\Controllers\frontend\User\JobApplicationController@destroy')->name('jobapp.destroy');
    Route::get('/joblisting/{id}/apply', 'App\Http\Controllers\frontend\User\JobApplicationController@page_apply')->name('apply.create');
    Route::post('/joblisting/{id}/apply', 'App\Http\Controllers\frontend\User\JobApplicationController@apply')->name('apply.store');
});

// Employer Dashboard Route
Route::group(['middleware' => 'employer'], function () {
    Route::get('/jobs-list', 'App\Http\Controllers\frontend\Employer\JobListController@index')->name('add-jobs.index');
    Route::get('/add-jobs', 'App\Http\Controllers\frontend\Employer\JobListController@create')->name('add-jobs.create');
    Route::post('/add-jobs', 'App\Http\Controllers\frontend\Employer\JobListController@store')->name('add-jobs.store');
    Route::get('/jobs-list/{id}/edit', 'App\Http\Controllers\frontend\Employer\JobListController@edit')->name('add-jobs.edit');
    Route::put('/jobs-list/{id}', 'App\Http\Controllers\frontend\Employer\JobListController@update')->name('add-jobs.update');
    Route::delete('/jobs-list/{id}', 'App\Http\Controllers\frontend\Employer\JobListController@destroy')->name('job-list.destroy');
    Route::get('/applicants', 'App\Http\Controllers\frontend\Employer\ApplicantController@index')->name('applicants.index');
});