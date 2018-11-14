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
            <li><a href="profile.html"><i class="fa fa-user"></i>个人中心</a></li>
            <li><a href="login.html"><i class="fa fa-sign-out"></i>退出</a></li>
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
<div class="aside">
    <div class="profile">
        <img class="avatar" src="../assets/uploads/avatar.jpg">
        <h3 class="name text-center">yujunzhen</h3>
    </div>
    <ul class="nav">
        <li class="active">
            <a href="index.html"><i class="fa fa-dashboard"></i>仪表盘</a>
        </li>

        <li>
            <a  href="#menu-posts" class="collapsed" data-toggle="collapse">
                <i class="fa fa-thumb-tack"></i>文章<i class="fa fa-angle-right"></i>
            </a>
            <ul id="menu-posts" class="collapse">
                <li><a href="">所有文章</a> </li>
                <li><a href="">写文章</a> </li>
                <li><a href="">分类目录</a> </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-comment"></i>评论</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-user"></i>用户</a>
        </li>
        <li>
            <a  href="#menu-setting" class="collapsed" data-toggle="collapse">
                <i class="fa fa-cog"></i>设置<i class="fa fa-angle-right"></i>

            </a>
            <ul id="menu-setting" class="collapse">
                <li><a href="">导航菜单</a> </li>
                <li><a href="">图片轮播</a> </li>
                <li><a href="">网站设置</a> </li>
            </ul>
        </li>

    </ul>
</div>
<script src="../assets/vendors/jquery/jquery.js"></script>
<script src="../assets/vendors/bootstrap/js/bootstrap.js"></script>
<script>NProgress.done()</script>
</body>
</html>