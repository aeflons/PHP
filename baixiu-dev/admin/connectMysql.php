<?php
include "../config.php";
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2019/1/6
 * Time: 下午1:38
 */
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if (!$conn)
{
    echo("连接错误: " .mysqli_connect_error());
}else{
    echo "连接成功";
}