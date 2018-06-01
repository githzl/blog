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

@include('blog.footer')