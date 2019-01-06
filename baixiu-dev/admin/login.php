<?php
include "../config.php";
session_start();
$loginError = '登录错误1';

function login(){

    $loginError = '登录错误3';

    if (empty($_POST['email'])){
        $globals['meessage'] = '请填写邮箱';
        return;
    }
    if (empty($_POST['password'])){
        $globals['meessage'] = '请填写密码';
        return;
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect("127.0.0.1","root","Xiu911004","baixiu");
    if (!$conn){
        exit('连接数据库失败');
    }
    $qurey = mysqli_query($conn,"selcet * form users where email ='{$email}' limit 1;");
    if (!$qurey){
        $globals['meessage'] = '登录失败,请重试';
        return;
    }
    $user = mysqli_fetch_assoc($qurey);
    if (!$user){
        $globals['meessage'] = '邮箱与密码不匹配';
        return;
    }
    $_SESSION['current_login_user'] = $user;

    // 一切OK 可以跳转
   // header('Location: /admin/');


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
    <?php echo $loginError?>
    <form class="login-wrap <?php echo isset($message) ? 'shake animated' : 'shake animated' ?>" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off" novalidate>
        <img class="avatar" src="../assets/img/default.png">
        <!-- 有错误信息时展示 -->
       <div class="alert alert-danger">
          <strong><?php echo $globals['meessage']?></strong>
        </div>
        <div class="form-group">
            <label for="email" class="sr-only">邮箱</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="邮箱" autofocus>
        </div>
        <div class="form-group">
            <label for="password" class="sr-only">密码</label>
            <input id="password" name='password' type="password" class="form-control" placeholder="密码">
        </div>
        <button class="btn btn-primary btn-block">登 录</button>
    </form>
    <div class="loginError">
        <p><?php echo $loginError ?></p>
        <p>这是在逼我吗</p>
        </div>
</div>
</body>
</html>