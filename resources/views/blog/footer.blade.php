<!-- 右边-->
<div class="articletag">
    <p style='font-size: 17px;'><b class="info">丨</b>热门文章</p>
    <div class='articletaglist'>使用Swoole编写简单的Webscoket服务器</div>
    <div class='articletaglist'>PHP全文检索篇－ElasticSearch</div>
    <div class='articletaglist'>Redis在数据统计中的实际作用</div>
    <div style="background-color: #ebebeb;margin:20px -30px 10px -30px;height: 30px;"></div>

    <p style='font-size: 17px;'><b class="info">丨</b>最新文章</p>
<!--    <div class='articletaglist'>MySQL搭建立高可用数据集群</div>-->
    @foreach($articles as $item)
    <a href="/article/{{ $item->article_id }}"><div class='articletaglist'>{{ $item->article_title }}</div></a>

    @endforeach
    <div style=""></div>



</div>



</nav>
<!-- 尾部 -->
<!--<div class="footer"><span>友情链接&nbsp;&nbsp;&nbsp;</span><a class="link">陈帅同学</a></div>-->
<div class="footer">
    <div style="padding-bottom: 8px;"><span>友情链接:</span>
<!--         @inject('friendlink','App\Model\Friendlink') -->
        @foreach($friendlinks as $item)
        <abbr ><a style="color:#d5d5d5;margin-right:2px;" href="{{$item->website_link}}" target="_blank">{{$item->name}}</a></>
        @endforeach
    </div>
    Copyright © 2016 - {{ date('Y')}} All Rights Reserved  | 粤ICP备 16058872号
</div>

</body>
</html>