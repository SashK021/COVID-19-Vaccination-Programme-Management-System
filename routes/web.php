<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\genpopController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\RegisterController;

use App\Http\Controllers\RedirectController;

use App\Http\Controllers\LogoutController;

use App\Http\Controllers\DoseController;

use App\Http\Controllers\RedirectController2;

use App\Http\Controllers\ProgController;

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



Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Post
Route::post('/editDose/{id}',[AdminController::class, 'editDose']);

Route::post('/editDose2/{id}',[AdminController::class, 'editDose2']);

Route::post('/editDose3/{id}',[AdminController::class, 'editDose3']);

Route::post('/editDose4/{id}',[AdminController::class, 'editDose4']);

Route::post('/upload_user',[RegisterController::class, 'upload']);

Route::post('/update_user/{id}',[AdminController::class, 'updateUser']);




//Get
Route::get('/genpop_view',[genpopController::class, 'addview']);

Route::get('/add_genpop_view',[AdminController::class, 'addview']);

Route::get('/register_view',[RegisterController::class, 'addview']);

Route::get('/add_genpop2_view',[AdminController::class, 'addview']);

Route::get('/to_vaccinate_view',[AdminController::class, 'to_vaccinate_view']);

Route::get('/report_view',[AdminController::class, 'report_view']);

Route::get('/total_regi_view',[AdminController::class, 'total_regi_view']);

Route::get('/dose_view/{id}',[AdminController::class, 'doseUpdate']);

Route::get('/update_view/{id}',[AdminController::class, 'updateDetails']);

Route::get('/dose_view',[DoseController::class, 'addview']);

Route::get('/home_view',[RedirectController::class, 'redirect']);

Route::get('/home2_view',[RedirectController2::class, 'redirect']);

Route::get('/Logout_view',[LogoutController::class, 'redirect']);


//PDF Generation
Route::get('/total_regi_pdf_view',[AdminController::class, 'total_regi_pdf_view']);

Route::get('/vaccine_pdf_view',[AdminController::class, 'vaccine_pdf_view']);

Route::get('/moderna_pdf_view',[AdminController::class, 'moderna_pdf_view']);

Route::get('/sinopharm_pdf_view',[AdminController::class, 'sinopharm_pdf_view']);

Route::get('/phizer_pdf_view',[AdminController::class, 'phizer_pdf_view']);

//Vaccination Programme
Route::get('/add_program_view',[AdminController::class, 'add_program_view']);
Route::get('/add_viewprogram_view',[AdminController::class, 'program_view']);
Route::post('/upload_program',[AdminController::class, 'upload_program']);
Route::get('/user_program_view',[AdminController::class, 'user_program_view']);





