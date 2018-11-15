<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加文章</title>
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
           <h1>写文章</h1>
       </div>
       <form action="" class="row">
           <div class="col-lg-9">
             <div class="form-group">
               <label for="title">标题</label>
               <input type="text" id="title" class="form-control input-lg" name="title" placeholder="文章标题">
             </div>
             <div class="form-group">
               <label for="content">内容</label>
               <textarea id="content" class="form-control input-lg" name="content" cols="30" rows="10" placeholder="内容"></textarea>
             </div>
           </div>
           <div class="col-lg-3">
               <div class="form-group">
                   <label for="sulg">别名</label>
                   <input type="text" id="sulg" class="form-control input-lg" name="sulg" placeholder="别名">
                   <p class="help-block">https://zce.me/post<strong>slug</strong></p>
               </div>
               <div class="form-group">
                  <label for="feature">图像</label>
                  <img class="">
                   <input type="file" id="feature" class="form-control input-lg" name="feature" placeholder="别名">
                </div>

               <div class="form-group">
                   <label for="category">分类</label>
                   <select name="categpory" id="category" class="form-control">
                      <option value="1">未分类</option>
                       <option value="2">潮生活</option>
                   </select>
               </div>
               <div class="form-group">
                     <label for="created">发布时间</label>
                     <input type="datetime-local" id="created" class="form-control input-lg" name="created" placeholder="发布时间">
               </div>
               <div class="form-group">
                   <label for="status">状态</label>
                   <select name="status" id="status" class="form-control">
                     <option value="drafted">草稿</option>
                       <option value="published">已发布</option>
                   </select>
               </div>
               <div class="form-group">
                   <button class="btn btn-primary" type="submit">保存</button>
               </div>
           </div>
       </form>
   </div>
</div>
<?php include "inc/sidebar.php";?>
<script src="../assets/vendors/jquery/jquery.js"></script>
<script src="../assets/vendors/bootstrap/js/bootstrap.js"></script>
<script>NProgress.done()</script>
</body>
</html>