<?php
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2019/3/19
 * Time: 2:48 PM
 */

require_once "config.php";
header('Content-type:text/json;charset=utf-8');
$number= 10;
$page=$_GET["page"] ? $_GET["page"] : 0;
$series_id=$_GET["series_id"] ? $_GET["series_id"] : 1;
$sql="SELECT  COUNT(*) num FROM WHXiao.shop_detail WHERE series_id = $series_id";

$count=allNews($sql);
if ($page * $number >$count ) {
failResponse('页数不对');
}else{
    $page=$page*10;
    $sqlDetail ="SELECT  * FROM WHXiao.shop_detail WHERE series_id = $series_id LIMIT $page,$number;";
    $data=array(
      'total_num'=>$count,
        'pageNum'=>$number,
        'shop_list'=>news($sqlDetail),

    );
    successResponse($data);
}




function allNews($sql)
{
    $conn = connectMysql();
    $r = mysqli_query($conn, $sql);
    if (!$r) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $obj = mysqli_fetch_object($r);
    mysqli_close($conn);
    return $obj->num;
}

function news($sql)
{
    $array = array();
    // limit为约束显示多少条信息，后面有两个参数，第一个为从第几个开始，第二个为长度
    $conn = connectMysql();

    $r = mysqli_query($conn, $sql);
    if (!$r) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    while ($obj = mysqli_fetch_object($r)) {
        $array[] = $obj;
    }
    mysqli_close($conn);
    return $array;
}