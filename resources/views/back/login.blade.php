<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms</title>

    <link href="back/css/bootstrap.min.css" rel="stylesheet">
    <link href="back/css/datepicker3.css" rel="stylesheet">
    <link href="back/css/styles.css" rel="stylesheet">
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Welcome to login</div>
            <div class="panel-body">
                <form role="form" action="/loginaction" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="7">七天内免登录
                            </label>
                        </div>
                        {!! csrf_field() !!}
<!--                        <a href="index.html" class="btn btn-primary">立即登录</a>-->
                        <input type="submit" value="立即登录" class="btn btn-primary">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>



</body>

</html>
