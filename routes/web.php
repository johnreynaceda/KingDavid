<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
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
Route::get('/', function () {
    Auth::logout();
return view('welcome');
})->name('home');

// Route::get('/the-school', 'about.school' )->name('school');
Route::get('/about/the-school', 'App\Http\Controllers\PagesController@school')->name('school');
Route::get('/about/message-of-the-president', 'App\Http\Controllers\PagesController@message')->name('message');
Route::get('/about/vision-and-mission', 'App\Http\Controllers\PagesController@vm')->name('vm');
Route::get('/about/organization-chart', 'App\Http\Controllers\PagesController@organizational')->name('chart');
Route::get('/academic', 'App\Http\Controllers\PagesController@academic')->name('academic');
Route::get('/policy/admission', 'App\Http\Controllers\PagesController@admission')->name('admission');
Route::get('/policy/requirement', 'App\Http\Controllers\PagesController@requirement')->name('requirement');



Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin')->middleware('admin');

Route::get('/admin/carousel', 'App\Http\Controllers\AdminController@carousel')->name('carousel')->middleware('admin');
Route::get('/admin/anouncement', 'App\Http\Controllers\AdminController@announcement')->name('announcement')->middleware('admin');
Route::get('/admin/news', 'App\Http\Controllers\AdminController@news')->name('news')->middleware('admin');


Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
