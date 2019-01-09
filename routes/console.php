<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('cnblogs-download', function () {
    $user = \App\User::query()->where('id',4)->firstOrFail();
    auth()->login($user);

    $ql = \QL\QueryList::use(PhantomJs::class,'/usr/local/bin/phantomjs');


    $file = file_get_contents("https://www.cnblogs.com/sweetsunnyflower/p/9780781.html");
    $res = file_put_contents('aaa.html',$file);
    dd($res);
    $article = \QL\QueryList::html($file);
    $next_prev = $article->find("#post_next_prev")->htmls();
    $contents = $article->find('#cnblogs_post_body')->htmls();
    dd($next_prev);
    $title = $article->find('.postTitle')->text();
//    \App\Models\Article::query()->create([
//        'type_id' => 1,
//        'comments' => 0,
//        'collections' => 0,
//        'labels' => 0,
//        'type' => 'PHP',
//        'cover_big' => 'https://source.unsplash.com/random/750x420',
//        'cover' => 'https://source.unsplash.com/random/360x263',
//        'title' => $title,
//        'contents' => $contents,
//        'user_id' => auth()->id(),
//        'sort' => rand(1,200),
//        'publish_at' => now()
//    ]);
});
