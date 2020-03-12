@extends('back.basic')
@section('content')

<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">Forms</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">发表文章</h3>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Form Elements</div>
            <div class="panel-body">
                <div class="col-md-10">
                    <form action="/article" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>文章标题</label>
                            <input name='article_title'class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label>文章归类</label>
                            <input name="article_type" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>文章封面图</label>
                            <input type="file" name="article_cover">
                            <p class="help-block"></p>
                        </div>

                        <div class="form-group">
                            <label>文章引导语</label>
                            <textarea class="form-control" name='article_introduce' rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>文章关键词(多个请用,隔开)</label>
                            <input name="article_keyword" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>文章内容</label>
                            <script id="container" name="article_content" type="text/plain" style="width: 100%"></script>
                        </div>
                        {!! csrf_field() !!}
                        <input type="submit" class="btn btn-primary btn-md" value="确认添加"></inpt>

                </div>
                </form>
                            <script type="text/javascript" src="/ueditor/ueditor.config.js"></script>
                            <!-- 编辑器源码文件 -->
                            <script type="text/javascript" src="/ueditor/ueditor.all.js"></script>
                            <!-- 实例化编辑器 -->
                            <script type="text/javascript">
                                var editor = UE.getEditor('container');
                            </script>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
@endsection