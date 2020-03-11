<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use app\Mail\ContactMail;
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
    return view('index');
});

Route::get('work', function () {
    return view('projects');
});
Route::get('services', function () {
    return view('services');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', function (Request $request) {
    Mail::send(new ContactMail($request));
    return redirect('/contact');
})->name('contact.post');
Route::get('commercial', function () {
    return view('commercial');
});






