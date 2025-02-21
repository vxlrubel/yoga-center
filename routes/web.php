<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/classes', function () {
    return view('classes');
});
Route::get('/class-details', function () {
    return view('class-details');
});
Route::get('/trainers', function () {
    return view('trainers');
});
Route::get('/trainer-details', function () {
    return view('trainer-details');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/event-details', function () {
    return view('event-details');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/booknow', function () {
    return view('booknow');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/reset-password', function () {
    return view('reset-password');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/enrolled-classes', function () {
    return view('enrolled-classes');
});
