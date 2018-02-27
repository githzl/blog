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
                <div class="col-md-6">
                    <form role="form">

                        <div class="form-group">
                            <label>文章标题</label>
                            <input class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label>文章归类</label>
                            <input type="" class="form-control">
                        </div>

<!--                        <div class="form-group checkbox">-->
<!--                            <label>-->
<!--                                <input type="checkbox">Remember me</label>-->
<!--                        </div>-->

                        <div class="form-group">
                            <label>文章封面图</label>
                            <input type="file">
                            <p class="help-block"></p>
                        </div>

                        <div class="form-group">
                            <label>文章引导语</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>文章关键词</label>
                            <input type="" class="form-control">
                        </div>

                        <label>Validation</label>
                        <div class="form-group has-success">
                            <input class="form-control" placeholder="Success">
                        </div>
                        <div class="form-group has-warning">
                            <input class="form-control" placeholder="Warning">
                        </div>
                        <div class="form-group has-error">
                            <input class="form-control" placeholder="Error">
                        </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label>Checkboxes</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">Checkbox 1
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">Checkbox 2
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">Checkbox 3
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">Checkbox 4
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Radio Buttons</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio Button 1
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio Button 2
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio Button 3
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio Button 4
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Selects</label>
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Multiple Selects</label>
                        <select multiple class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>
                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
@endsection