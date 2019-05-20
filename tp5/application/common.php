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
//require_once 'common/aip-php-sdk-2.2.10/AipImageClassify.php';
//
// 你的 APPID AK SK 百度识别
const APP_ID = '16083753';
const API_KEY = 'EYQW69zB2UnBQEpdGox55jZs';
const SECRET_KEY = 'wC7OKkFhMQFU8eBd0fHw0HXRZ8w7k94R';

//云片
const yunpin_apikey = '';

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


//获得账户
function get_user($ch,$apikey){
    curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v2/user/get.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('apikey' => $apikey)));
    $result = curl_exec($ch);
    $error = curl_error($ch);
    checkErr($result,$error);
    return $result;
}
function send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v2/sms/single_send.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $result = curl_exec($ch);
    $error = curl_error($ch);
    checkErr($result,$error);
    return $result;
}
function tpl_send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL,
        'https://sms.yunpian.com/v2/sms/tpl_single_send.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $result = curl_exec($ch);
    $error = curl_error($ch);
    checkErr($result,$error);
    return $result;
}
function voice_send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'http://voice.yunpian.com/v2/voice/send.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $result = curl_exec($ch);
    $error = curl_error($ch);
    checkErr($result,$error);
    return $result;
}
function notify_send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'https://voice.yunpian.com/v2/voice/tpl_notify.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $result = curl_exec($ch);
    $error = curl_error($ch);
    checkErr($result,$error);
    return $result;
}

function checkErr($result,$error) {
    if($result === false)
    {
        echo 'Curl error: ' . $error;
    }
    else
    {
        //echo '操作完成没有任何错误';
    }
}
function print_json($ret=0, $msg='ok', $data=array())
{

    $output_params = array('ret'=>$ret, 'msg'=>$msg, 'data'=>$data);
    $output_json_text = json_encode($output_params,JSON_NUMERIC_CHECK);
    header('Content-type: application/json;charset=utf-8');
    echo $output_json_text;
    exit(0);
}
