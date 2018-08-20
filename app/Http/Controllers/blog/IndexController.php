<?php

namespace App\Http\Controllers\blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Article;
use Illuminate\Support\Facades\Redis;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 多少条算一页
        $count = config('selfdefine.index.showpage');

        // 一共多少篇文章
        $article_count = Article::where('article_isshow',1)->count();

        // 总共能有多少页
        $article_count = ceil($article_count / $count);

        // 文章数据
        $data = Article::where('article_isshow',1)->orderBy('created_at', 'desc')->paginate($count);

        return view('blog.index',['data' => $data,'article_count' => $article_count]);
    }

    /**
     * Show the esource is page.
     *
     * @return \Illuminate\Http\Response
     */
    public function page($page)
    {
        // 多少条算一页
        $count = config('selfdefine.index.showpage');

        // 一共多少篇文章
        $article_count = Article::where('article_isshow',1)->count();

        // 总共能有多少页
        $article_count = ceil($article_count / $count);

        // 文章数据
        $data = Article::where('article_isshow',1)->orderBy('created_at', 'desc')->skip(($page -1) * 5)->take(5)->get();

        return view('blog.index',['data' => $data,'article_count' => $article_count,'page' =>$page]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Article::where('article_id',$id)->first();
        $prev = Article::where('article_id','>',$id)->where('article_isshow',1)->first();
        $next = Article::where('article_id','<',$id)->where('article_isshow',1)->first();
        return view('blog.article',['data' => $data,'prev' => $prev,'next' => $next]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
