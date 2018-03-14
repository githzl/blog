<!DOCTYPE html>
<html>
<head>
    <title>{{$data->article_title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href='/blog/common/bootstrap/bootstrap.min.css'>
    <link rel=stylesheet href='/blog/css/iconfont.css'>
    <link rel=stylesheet href='/blog/css/reset.css'>
    <link rel=stylesheet href='/blog/css/response.css'>
</head>
<body>
<div class="head">
    <img class='headimg' src="/blog/image/favicon.png">
    <h1 class='head-title'>简洁 优雅 具有艺术气息。</h1>
    <div>
        <a class='tagbtn' href="">PHP</a>
        <a class='tagbtn' href="">MySQL</a>
        <a class='tagbtn' href="">Linux</a>
        <a class='tagbtn' href="">Node.js</a>
        <a class='tagbtn' href="">Nginx</a>
        <a class='tagbtn' href="">Swoole</a>
        <a class='tagbtn' href="">Golang</a>
        <a class='tagbtn' href="">Shell</a>

    </div>
    <div>
        <a class='alimamaicon' href="http://www.totmp.com"><i class="iconfont icon-diqiu"></i></a>
        <a class='alimamaicon' href="http://www.github.com/githzl"><i class="iconfont icon-github"></i></a>
        <a class='alimamaicon' href="mailto:newhzl@163.com"><i class="iconfont icon-mail"></i></a>
    </div>
</div>
<!--  头部分结束-->
<!--  开始中心部分 -->
<nav class="center">
    <div class="split"></div>
    <!-- 中心-->
    <div class='articlebox'>

        <!-- 1篇文章 -->
        <div class='articleone'>
            <a href='' class="articletitle">{{$data->article_title}}</a>
            <small class="articledate">作者:  <a class='auther' href="">何忠利</a> • 发表于 {{ date('Y-m-d',strtotime($data->created_at)) }} </small>
            <img class='articleimg' src="{{$data->article_cover or ''}}">
            <span class="">
			{!!$data->article_content!!}
			</span>
            <div class="articlekeyword">文章关键词：
                @foreach(explode(',',$data->article_keyword) as $key)
                <diy class="ihover"># {{ $key }}</diy>
                @endforeach
            </div>
            <div class="lookarticle">点击查看</div>

        </div>
        <div class='articlefooter'></div>

        <div class='articlefooter'>
            <div class="packbtn">
                <div class='packbtn leftpack'><</div>
                <div class='packbtn packcontent'>第 1 页／共 8 页</div>
                <div class="packbtn rightpack">></div>


            </div>
        </div>
    </div>

    <!-- 右边-->
    <div class="articletag">
        <p style='font-size: 17px;'><b class="info">丨</b>热门文章</p>
        <div class='articletaglist'>使用Swoole编写简单的Webscoket服务器</div>
        <div class='articletaglist'>PHP全文检索篇－ElasticSearch</div>
        <div class='articletaglist'>Redis在数据统计中的实际作用</div>
        <div style="background-color: #ebebeb;margin:20px -30px 10px -30px;height: 30px;"></div>

        <p style='font-size: 17px;'><b class="info">丨</b>最新文章</p>
        <div class='articletaglist'>MySQL搭建立高可用数据集群</div>
        <div class='articletaglist'>PHP 与 Laravel的完美结合</div>
        <div class='articletaglist'>使用Swoole编写轻量级的HTTP服务器</div>
        <div class='articletaglist'>XunSearch实现搜索权重、分词</div>

        <div style=""></div>



    </div>



</nav>
<!-- 尾部 -->
<div class="footer">Copyright © 2016 - 2018 All Rights Reserved  | 粤ICP备 16058872号
</div>

</body>
</html>