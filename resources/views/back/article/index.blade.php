@extends('back.basic')
@section('content')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">Tables</li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">文章管理</h3>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">文章列表 <a href="/article/create" class="btn btn-primary btn-md">点击发表</a></div>
            <div class="panel-body">
                <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr>
                        <th data-field="" data-checkbox="true" >Item ID</th>
                        <th data-field="id" data-sortable="true">Item ID</th>
                        <th data-field="name"  data-sortable="true">Item Name</th>
                        <th data-field="price" data-sortable="true">Item Price</th>
                        <th data-field="price" data-sortable="true">Item Price</th>

                    </tr>

                    </thead>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->
<div class="row">
<!--    <div class="col-md-6">-->
<!--        <div class="panel panel-default">-->
<!--            <div class="panel-heading">Basic Table</div>-->
<!--            <div class="panel-body">-->
<!--                <table data-toggle="table" data-url="tables/data2.json" >-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th data-field="id" data-align="right">Item ID</th>-->
<!--                        <th data-field="name">Item Name</th>-->
<!--                        <th data-field="price">Item Price</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

</div><!--/.row-->
@endsection