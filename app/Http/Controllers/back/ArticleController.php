<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataModel = new Article;
        $dataModel->article_title = $request->input('article_title','');
        $dataModel->article_type = $request->input('article_type','');
        $path = $this->uploadImg($request->file("article_cover"),'ueditor/upload/');
        $dataModel->article_cover = $path;
        $dataModel->article_keyword = $request->input('article_keyword','');
        $dataModel->article_introduce = $request->input('article_introduce','');
        $dataModel->article_content = $request->input('article_content','');
        if($dataModel->save()){
            return redirect('/article');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * upload img func.
     *
     * @param   $file
     * @param   $remove
     * @return  $path
     */
    public function uploadImg($file,$path)
    {

        $suffix = $file->getClientOriginalExtension();
        $rename = date("YmdHis").rand(1000, 9999).".".$suffix;
        $file->move($path, $rename);
        return $path = '/'.$path.$rename;
    }
}
