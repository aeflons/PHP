<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分类</title>
    <meta charset="UTF-8">
    <title>评论</title>
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
            <h1>分类目录</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
              <form action="" class="row">
                   <h2>添加新分类目录</h2>

                   <div class="form-group">
                    <label for="title">名称</label>
                    <input type="text" id="title" class="form-control " name="title" placeholder="分类名称">
                  </div>
                   <div class="form-group">
                    <label for="content">别名</label>
                    <input id="content" class="form-control " name="content"  placeholder="sulg">
                    <p>https://zce.me/category/<strong>slug</strong></p>

                  </div>
                  <div class="form-group">
                  <a class="btn btn-primary">添加</a>
                  </div>
                  <div class="col-md-8">
                      <div class="page-action">
                    <table class="table  table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center" width="40"><input type="checkbox"></th>
                            <th>名称</th>
                            <th>sulg</th>
                            <th class="text-center" width="100">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center" width="40"><input type="checkbox"></td>
                            <td>分类名</td>
                            <td>sulg</td>
                            <td class="text-center">
                                <a class="btn btn-info btn-xs">操作</a>
                                <a class="btn btn-danger btn-xs">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" width="40"><input type="checkbox"></td>
                            <td>分类名</td>
                            <td>sulg</td>
                            <td class="text-center">
                                <a class="btn btn-info btn-xs">操作</a>
                                <a class="btn btn-danger btn-xs">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" width="40"><input type="checkbox"></td>
                            <td>分类名</td>
                            <td>sulg</td>
                            <td class="text-center">
                                <a class="btn btn-info btn-xs">操作</a>
                                <a class="btn btn-danger btn-xs">删除</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                      </div>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>
<?php include "inc/comment.php"?>
<?php $current_page = php_self() ;
echo $current_page;
$current_name = str_replace(".php",'',$current_page );
echo $current_name;
?>
<?php include "inc/sidebar.php";?>
<script src="../assets/vendors/jquery/jquery.js"></script>
<script src="../assets/vendors/bootstrap/js/bootstrap.js"></script>
<script>NProgress.done()</script>
</body>
</html>