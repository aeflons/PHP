<?php
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2019/3/14
 * Time: 11:46 AM
 */
require_once "config.php";
header('Content-type:text/json;charset=utf-8');

$username=$_POST['username'];

$password=$_POST['password'];


//$conn = connectMysql();


$data =array(
    'msg'=>'cuowu',
    'ret'=>0,
    'info'=>array(
        'username'=>1,
        'password'=>2
    )
);


echo json_encode($data);//输出json数据
//require_once 'config.php';
//session_start();
//$loginError = '';
//
//function login(){
//    $loginError = '登录错误3';
//
//    if (empty($_POST['email'])){
//        $loginError   = '请填写邮箱';
//        return;
//    }
//    if (empty($_POST['password'])){
//        $loginError = '请填写密码';
//        return;
//    }
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//    if ($email=='admin' && $password=="123456"){
//        printf("登录成功");
//    }
//

////    $qurey = mysqli_query($conn,"selcet * form users where email ='{$email}' limit 1;");
////    if (!$qurey){
////        $loginError = '账号不存在';
////        return;
////    }
////    $user = mysqli_fetch_assoc($qurey);
////    if (!$user){
////        $loginError = '邮箱与密码不匹配';
////        return;
////    }
////    $_SESSION['current_login_user'] = $user;
//
//
//
//}
//if ($_SERVER['REQUEST_METHOD'] === 'GET'){
//    login();
//}
?>

