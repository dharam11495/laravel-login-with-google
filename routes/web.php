<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('shares', 'ShareController');
Route::resource('dashboard', 'DashboardController');
Auth::routes();

Route::get('/redirect/{google}', 'SocialAuthGoogleController@redirect');
Route::get('/callback/{google}', 'SocialAuthGoogleController@callback');
// Route::get('/callback', 'SocialAuthGoogleController@callback');

Route::get('/home', 'HomeController@index')->name('home');
