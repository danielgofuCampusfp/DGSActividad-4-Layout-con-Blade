<?php

use Illuminate\Support\Facades\Route;


Route::view ('/','layouts._partials.menu')->name('/');

Route::view ('/home','landing.index')->name('home');
Route::view ('/about','landing.about')->name('about');
Route::view ('/services','landing.services')->name('services');
Route::view ('/contact','landing.contact')->name('contact');