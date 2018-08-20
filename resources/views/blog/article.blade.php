@include('blog.header')

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
            <div class="articlekeyword">阅读量：

                <diy class="ihover"> {{ 999 }}</diy>

            </div>

            <a href="http://blog.totmp.com" style="text-decoration: none;"><div class="lookarticle">返回主页</div></a>

        </div>

        <div class='articlefooter'></div>

        <div class='articlefooter'>

<!--            <div class="packbtn">-->
                @if(isset($prev))

                <a href="/article/{{ $prev->article_id }}" style="text-decoration: none;">
                    <div class='packbtn rightpack' >Prev：{{ $prev->article_title }}</div>
                </a>
                @endif
                @if(isset($next))

                <a href="/article/{{ $next->article_id }}" style="text-decoration: none;">
                    <div class="packbtn leftpack">Next：{{ $next->article_title }}</div>
                </a>
                @endif

        </div>
    </div>

@include('blog.footer')