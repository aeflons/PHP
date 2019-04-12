<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/*
 *请求成功的返回
 */
function successResponse($data){

    $info =array(
        'msg'=>'success',
        'ret'=>0,
        'data'=>$data
    );

    echo json_encode($info);
}
/*
 *请求失败的返回
 */
function failResponse($msg) {
    $info =array(
        'msg'=>$msg,
        'ret'=>-1,
    );

    echo json_encode($info);
}
/*
 * 判断是否缺少参数
 * */
function paramIsEmpty($param,$msg='缺少必要参数'){
    if (empty($param)){
        failResponse($msg);
    }else{
        return $param;
    }

}
