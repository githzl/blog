<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    const NEW_COUNT = 4; //  最新文章显示4条
    const HOT_COUNT = 3; //  热门文章显示3条
    protected $table = 'article';

    public function getNewArticle(){
        $data = $this->where('article_isshow',1)->orderBy('created_at', 'desc')->paginate(static::NEW_COUNT);
        return $data;
    }
}
