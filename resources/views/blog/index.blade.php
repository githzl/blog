@include('blog.header')

<nav class="center">
    <div class="split"></div>
    <div class='articlebox'>

        @foreach($data as $article)
        <div class='articleone'>
            <a href='/article/{{ $article->article_id }}' class="articletitle">{{ $article->article_title }}</a>
            <small class="articledate">作者:  <a class='auther' href="">何忠利</a> • 发表于 {{ date('Y-m-d',strtotime($article->created_at)) }} </small>
            <img class='articleimg' src="{{ $article->article_cover or '' }}">
            <span class="articleprefix">
			{{ $article->article_introduce }}
			</span>
            <div class="articlekeyword">文章关键词：
                @foreach(explode(',',$article->article_keyword) as $key)
                    <diy class="ihover"># {{ $key }}</diy>
                @endforeach
            </div>
            <div class="lookarticle"><a id="seebook" href="/article/{{ $article->article_id }}">点击查看</a></div>

        </div>
        <div class='articlefooter'></div>
        @endforeach

        <div class='articlefooter'></div>
        <!-- 一篇文章结束-->
        <!-- pack -->
        <div class='articlefooter'>
            <div class="packbtn">
                <div class='packbtn leftpack'><</div>
                <div class='packbtn packcontent'>第 1 页／共 8 页</div>
                <div class="packbtn rightpack">></div>


            </div>
        </div>
    </div>

@include('blog.footer')