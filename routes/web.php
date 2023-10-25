<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/sidebar/index', 'sidebar.index');
Route::view('/sidebar/about', 'sidebar.about');
Route::view('/sidebar/contact', 'sidebar.contact');
Route::view('/sidebar/paket', 'sidebar.paket');
Route::view('/sidebar/aboutus', 'sidebar.aboutus');
Route::post('/contact_mail', [HomeController::class, 'contact_mail_send']);

