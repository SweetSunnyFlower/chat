<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class syncArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'syncArticle {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '同步博客园文章';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $article_id = $this->argument('id');
        if(!$article_id){
            $this->error('<error>请传递ID</error>');
            return ;
        }
        $user = \App\User::query()->where('id', 1)->firstOrFail();

        $file = file_get_contents("https://www.cnblogs.com/sweetsunnyflower/p/{$article_id}.html");
        //    $res = file_put_contents('aaa.html',$file);
        //    dd($file);
        $article = \QL\QueryList::html($file);
        $next_prev = $article->find("#post_next_prev")->htmls();
        $contents = $article->find('#cnblogs_post_body')->htmls();
        //    dd($next_prev);
        $title = $article->find('.postTitle')->text();
        //    dd($contents[0]);
        $res = \App\Models\Article::query()->create(
            [
                'type_id'     => 1,
                'comments'    => 0,
                'collections' => 0,
                'labels'      => 0,
                'type'        => 'PHP',
                'cover_big'   => 'https://source.unsplash.com/random/750x420',
                'cover'       => 'https://source.unsplash.com/random/360x263',
                'title'       => $title,
                'contents'    => $contents[0],
                'user_id'     => $user->id,
                'sort'        => rand(1, 200),
                'publish_at'  => now(),
            ]
        );
        dd($res);
    }
}
