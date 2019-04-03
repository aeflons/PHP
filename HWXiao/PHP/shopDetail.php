<?php
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2019/3/19
 * Time: 10:17 AM
 */


require_once "config.php";
header('Content-type:text/json;charset=utf-8');
$detail_id= $_GET["id"];
if(!$detail_id){
    failResponse("信息不存在");
    return;
}
$conn = connectMysql();
$result = mysqli_query($conn,"SELECT * from shop_detail where id = '{$detail_id}'");
if (!$result){
    failResponse("信息不存在");
    return;
}
if ($result->num_rows > 0){
    $shop_detail = mysqli_fetch_assoc($result);

}

successResponse($shop_detail);

