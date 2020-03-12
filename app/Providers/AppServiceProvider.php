<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Friendlink;
use App\Model\Article;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 通用尾部模版 友情链接
        $friendlinks = Friendlink::where(['is_show' => 1])->get();
        // 通用右侧模版 最热文章
        $articles    = (new Article)->getNewArticle();
        // 发送通用模版变量
        view()->share(['friendlinks' => $friendlinks, 'articles' => $articles]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
