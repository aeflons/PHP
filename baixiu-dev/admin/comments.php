<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>评论</title>
    <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/vendors/nprogress/nprogress.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <script src="../assets/vendors/nprogress/nprogress.js"></script>
</head>
<body>
<script>Nprogress.start()</script>
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
            <h1>所有评论</h1>
        </div>
        <div class="pages">
            <ul class=" pagination-sm pagination pull-right  ">
                <li><a href="#">上一页</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">上一页</a></li>


            </ul>
        </div>
        <div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center" width="40"><input type="checkbox"></th>
                    <th>作者</th>
                    <th>评论</th>
                    <th>评论在</th>
                    <th>提交于</th>
                    <th>状态</th>
                    <th class="text-center">
                        <a href="" class="btn btn-info btn-xs">批准</a>
                        <a href="" class="btn btn-danger btn-xs">删除</a>
                    </th>

                </tr>
                </thead>
                <tbody>
                <tr class="danger">
                    <td class="text-center"><input type="checkbox"></td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td class="text-center">
                    <a href="" class="btn btn-info btn-xs">批准</a>
                    <a href="" class="btn btn-danger btn-xs">删除</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td class="text-center">
                        <a href="" class="btn btn-info btn-xs">批准</a>
                        <a href="" class="btn btn-danger btn-xs">删除</a>
                    </td>
                </tr>
                <tr >
                    <td class="text-center"><input type="checkbox"></td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td>呵呵</td>
                    <td class="text-center">
                        <a href="" class="btn btn-info btn-xs">批准</a>
                        <a href="" class="btn btn-danger btn-xs">删除</a>
                    </td>
                </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?php include "inc/conmon.php" ?>
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