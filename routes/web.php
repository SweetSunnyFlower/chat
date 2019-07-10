<?php
Route::get('/', 'IndexController@index')->name('/');

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

Route::get('/myself', 'IndexController@myself')->name('myself');

Route::group(['prefix'=>'articles'],function(){
    Route::get('/{article}','ArticleController@show')->name('article.show');
});

Route::middleware(["auth:web"])->group(function () {
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

Route::get('test',function(){
    $disk = \Illuminate\Support\Facades\Storage::disk('qiniu');
    $fileContents = file_get_contents('http://cdn.sweetsunnyflower.com/images/user.png');
    // create a file
     dd( $disk->put('avatars/filename.jpg', $fileContents));

    // check if a file exists
    $exists = $disk->has('file.jpg');

    dd($exists);


    $img = file_get_contents('https://source.unsplash.com/random/360x244');
    return file_put_contents(public_path('/test').'.jpg',$img);
    $articles = \App\Models\Article::query()->get();
    foreach ($articles as $article){
        $article->created_at = date('Y-m-d H:i:s',time() - rand(1,856000));
        $article->save();
    }
    return 1;
//   return collect(array_column(\App\User::all('id')->toArray(),'id'))->random();
});


