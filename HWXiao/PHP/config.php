<?php
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2018/10/15
 * Time: 下午8:29
 */
/*
 * 我们项目中用到的配置信息
 */
/*
 * 数据库主机
 *
 */
define('DB_HOST', '127.0.0.1');

/*
 * 数据库用户名
 */

define('DB_USER', 'root');

/*
 * 数据库密码
 */
define('DB_PASS', 'Xiu911004');

/*
 * 数据库名字
 */
define('DB_NAME','XiuXiu');
/*
 * 数据库端口
 */
define('DB_PORT','3306');


function connectMysql() {
        $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);
    if (!$conn){
        echo "服务器发生错误";
        $loginError = '服务器发生错误';
        exit();
    }
    return $conn;
}

function successResponse($data){

    $info =array(
        'msg'=>'success',
        'ret'=>0,
        'data'=>$data
    );

    echo json_encode($info);
}

function failResponse($msg) {
    $info =array(
        'msg'=>$msg,
        'ret'=>-1,
    );

    echo json_encode($info);
}
function addBookChaperInfo($sql) {
    $conn = connectMysql();
//    mysqli_query(#conn ,$sql,MYSQLI_STORE_RESULT);
    mysql_query($sql);

}
