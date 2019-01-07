<?php
include "../config.php";
session_start();
$message;

function login(){
global  $loginError;
global  $message;
    $loginErroror = '登录错误3';
    if (empty($_POST['email'])){
        $message = '请填写邮箱';
        return;
    }
    if (empty($_POST['password'])){
        $message = '请填写密码';
        return;
    }
    $email = $_POST['email'];
    echo $email;
    $password = $_POST['password'];

    $conn = mysqli_connect("127.0.0.1","root","Xiu911004","baixiu");
    if (!$conn){
        exit('连接数据库失败');
    }
    $qurey = mysqli_query($conn,"select * from users where email = '$email' limit 1;");
    if (!$qurey){
        $message = '登录失败,请重试';
        return;
    }
    $user = mysqli_fetch_assoc($qurey);
    if (!$user){
        $message = '邮箱与密码不匹配';
        return;
    }
    $_SESSION['current_login_user'] = $user;

    // 一切OK 可以跳转
    $message = '成功了';
    header('Location: ../admin/');


}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $loginError = '登录错误2';

    login();
}

?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/vendors/animat/animate.css">
</head>
<body>
<div class="login">
    <form class="login-wrap <?php echo isset($message) ? 'shake animated' : '' ?>" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off" novalidate>
        <img class="avatar" src="../assets/img/default.png">
        <!-- 有错误信息时展示 -->
        <?php if (isset($message)): ?>
       <div class="alert alert-danger">
          <strong><?php echo $message?></strong>
        </div>
        <?php endif ?>
        <div class="form-group">
            <label for="email" class="sr-only">邮箱</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="邮箱" autofocus>
        </div>
        <div class="form-group">
            <label for="password" class="sr-only">密码</label>
            <input id="password" name='password' type="password" class="form-control" placeholder="密码">
        </div>
        <button class="btn btn-primary btn-block" type="submit">登 录</button>
    </form>
    <div class="loginError">
        <p><?php echo $loginError ?></p>
        <p>这是在逼我吗</p>
        </div>
</div>
</body>
</html>