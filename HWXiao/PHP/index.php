<?php
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2019/3/18
 * Time: 5:05 PM
 */
require_once "config.php";
header('Content-type:text/json;charset=utf-8');

$conn = connectMysql();
$result = mysqli_query($conn,"SELECT * from shop_detail where series_id = 5 limit 6");
$shop_comment = array();
while ($rows=mysqli_fetch_array($result,MYSQLI_BOTH)){
    $count=count($rows);//不能在循环语句中，由于每次删除 row数组长度都减小
    for($i=0;$i<$count;$i++){
        unset($rows[$i]);//删除冗余数据
    }
    array_push($shop_comment,$rows);
}
$result = mysqli_query($conn,"SELECT * from shop_detail where series_id = 4 limit 6");
$new_comment = array();

while ($rows=mysqli_fetch_array($result,MYSQLI_BOTH)){
    $count=count($rows);//不能在循环语句中，由于每次删除 row数组长度都减小
    for($i=0;$i<$count;$i++){
        unset($rows[$i]);//删除冗余数据
    }
    array_push($new_comment,$rows);
}

$data =array(
    'shop_comment'=>$shop_comment,
    'new_comment'=>$new_comment,
);

successResponse($data);