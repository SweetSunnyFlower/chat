<?php
Route::get('/', function () {
return view('index');
})->name('/');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::middleware(["auth:web"])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/send','Api\Messages\ReceivedController@received');
    Route::get('/bind','Api\Messages\UserController@bind');
});

Route::get('broadcast',function(){
    event(new \App\Events\LoginEvent());
});

Route::get('workman',function(){
    return view('welcome');
});

Route::get('sendmessage/{word}',function(\Illuminate\Http\Request $request,$word){
    \GatewayWorker\Lib\Gateway::$registerAddress = '127.0.0.1:1236';
    \GatewayWorker\Lib\Gateway::sendToAll($word);
});


