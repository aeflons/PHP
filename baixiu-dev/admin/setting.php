<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>网站设置</title>
    <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/vendors/nprogress/nprogress.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <script src="../assets/vendors/nprogress/nprogress.js"></script>
</head>
<body>
<div class="main">
    <nav class="navbar">
        <button class="btn btn-default navbar-btn fa fa-bars"></button>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="profile.php"><i class="fa fa-user"></i>个人中心</a></li>
            <li><a href="login.php"><i class="fa fa-sign-out"></i>退出</a></li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="panel-title">
            <h1>网站设置</h1>
        </div>
        <div class="row">
            <form action="" class="form-horizontal">
                <div class="form-group">
                    <label for="site_logo" class="col-sm-2 control-label ">网站图标</label>
                    <div class="col-sm-6">
                        <input type="hidden" id="site_logo" name="site_logo">
                        <label class="form-image">
                            <input id="logo" type="file" hidden="hidden">
                            <img src="../assets/img/logo.png">
                            <i class="mask fa fa-upload"></i>
                        </label>
                    </div>


                </div>
                <div class="form-group">
                    <label for="site_name" class="col-md-2 control-label" >站点名称</label>
                    <div class="col-md-8">
                        <input id="site_name" class="form-control" name="site_name" type="text">
                    </div>

                </div>
                <div class="form-group">
                    <label for="site_description" class="col-md-2 control-label" >站点描述</label>
                    <div class="col-md-8">
                        <textarea id="site_description" class="form-control" name="site_description" type="text" rows="6" cols="50"></textarea>
                    </div>

                </div>
                <div class="form-group">
                    <label for="site_keyword" class="col-md-2 control-label" >站点关键词</label>
                    <div class="col-md-8">
                        <input id="site_keyword" class="form-control" name="site_name" type="text">
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" >评论</label>
                    <div class="col-md-8">
                        <div class="checkbox">
                            <label class="col-md-8 "><input type="checkbox">开启评论功能</label>
                            <label class="col-md-8 "><input type="checkbox">评论必须经人工批准</label>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8">
                      <button type="submit" class="btn-primary">保存设置</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<?php include "inc/comment.php"?>
<?php $current_page = php_self() ;
echo $current_page;
$current_name = str_replace(".php",'',$current_page );
echo  $current_name;
?>
<?php include "inc/sidebar.php";?>
<script src="../assets/vendors/jquery/jquery.js"></script>
<script src="../assets/vendors/bootstrap/js/bootstrap.js"></script>
<script>NProgress.done()</script>
</body>
</html>