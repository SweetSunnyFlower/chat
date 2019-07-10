<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use QL\QueryList;
use QL\Ext\Chrome;
use Spatie\Browsershot\Browsershot;

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
        $newsUrl = 'https://m.toutiao.com/i6546884151050502660/';

        $html = Browsershot::url($newsUrl)
            ->windowSize(480, 800)
            ->userAgent('Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Mobile Safari/537.36')
            ->mobile()
            ->touch()
            ->bodyHtml();

        \Log::info($html);
        $ql = QueryList::getInstance();
        // 注册插件，默认注册的方法名为: chrome
        $ql->use(Chrome::class);
        // 或者自定义注册的方法名
        $ql->use(Chrome::class,'chrome');
        $article = $ql->chrome("https://www.cnblogs.com/sweetsunnyflower/p/{$article_id}.html");


        $user = \App\User::query()->where('id', 1)->firstOrFail();

//        $file = file_get_contents("https://www.cnblogs.com/sweetsunnyflower/p/{$article_id}.html");
        //    $res = file_put_contents('aaa.html',$file);
        //    dd($file);
//        $article = \QL\QueryList::html($text);
        $next_prev = $article->find("#post_next_prev")->htmls();
        $contents = $article->find('#cnblogs_post_body')->htmls();
            dd($next_prev);
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
