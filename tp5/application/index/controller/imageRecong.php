<?php
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2019/4/24
 * Time: 17:28
 */
namespace app\index\controller;
use think\controller;
use think\config;
use think\Db;
use think\Request;



class imageRecong extends  controller
{
    public function index()
    {

        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">ʮ��ĥһ�� - ΪAPI������Ƶĸ����ܿ��</span></p><span style="font-size:22px;">[ V5.0 �汾�� <a href="http://www.qiniu.com" target="qiniu">��ţ��</a> ������������ ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }
    public function flowerReconfig(Request $request){
        $path = ROOT_PATH . 'public' . DS . 'static'.'/image/'.'498159452_b71afd65ba.jpg';
        vendor("AipImageClassify");


        $image= file_get_contents($path);

       $client = new \ AipImageClassify(APP_ID, API_KEY, SECRET_KEY);

        $options = array();
        $options["baike_num"] = 5;
      $data = $client->plantDetect($image,$options);
      return json_encode($data);





    }
}
