<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
<!--<div class="login">-->
    <!--<form action="" class="login-wrap">-->
        <!--<img src="../assets/img/default.png" alt="" class="avatar">-->
        <!--<div class="form-group">-->
            <!--<input type="email" id="email" class="form-control" placeholder="邮箱" autofocus>-->
        <!--</div>-->
        <!--<div class="form-group">-->
            <!--<input type="password" id="password" class="form-control" placeholder="密码">-->
        <!--</div>-->
        <!--<a class="btn btn-primary btn-block" href="index.php">登 录</a>-->
    <!--</form>-->
<!--</div>-->
<div class="login">
    <form class="login-wrap">
        <img class="avatar" src="../assets/img/default.png">
        <!-- 有错误信息时展示 -->
        <!-- <div class="alert alert-danger">
          <strong>错误！</strong> 用户名或密码错误！
        </div> -->
        <div class="form-group">
            <!--         <label for="email" class="sr-only">邮箱</label> -->
            <input id="email" type="email" class="form-control" placeholder="邮箱" autofocus>
        </div>
        <div class="form-group">
            <!--         <label for="password" class="sr-only">密码</label> -->
            <input id="password" type="password" class="form-control" placeholder="密码">
        </div>
        <a class="btn btn-primary btn-block" href="index.php">登 录</a>
    </form>
</div>
</body>
</html>