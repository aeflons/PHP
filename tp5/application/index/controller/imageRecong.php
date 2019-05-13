<?php
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2019/4/24
 * Time: 17:28
 */
namespace app\index\controller;
use think\Controller;
use think\Config;
use think\Db;
use think\Request;



class Imagerecong extends  Controller
{
    public function index()
    {

        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">ʮ��ĥһ�� - ΪAPI������Ƶĸ����ܿ��</span></p><span style="font-size:22px;">[ V5.0 �汾�� <a href="http://www.qiniu.com" target="qiniu">��ţ��</a> ������������ ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }
    public function flowerReconfig(Request $request){
//        $path = ROOT_PATH . 'public' . DS . 'static'.'/image/'.'498159452_b71afd65ba.jpg';
//        $image = file_get_contents($path);
//         vendor("AipImageClassify");
//          $client = new \ AipImageClassify(APP_ID, API_KEY, SECRET_KEY);
//
//           $options = array();
//            $options["baike_num"] = 5;
//             $data = $client->plantDetect($image, $options);
//          return successResponse($data);
//        successResponse($this->demoDic());
//        return;
        $file = $request->file("image");
         $type = $request->param("type");
        if ($file) {

            $info = $file->rule('md5')->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info) {
            vendor("AipImageClassify");
            $path = "../public/uploads/".$info->getSaveName();
            $image = file_get_contents($path);

            $client = new \ AipImageClassify(APP_ID, API_KEY, SECRET_KEY);

            $options = array();
            $options["baike_num"] = 5;
                if ($type == 1){
                    $data = $client->plantDetect($image, $options);
                }else if($type == 2){
                    $data = $client->animalDetect($image, $options);

                }
                else if($type == 3){
                    $data = $client->dishDetect($image, $options);

                }
                else if($type == 4){
                    $data = $client->logoSearch($image, $options);
                }
            return successResponse($data);
        }else{
                echo  failResponse("文件失败");
            }

        }else {
          echo  failResponse("缺少图片");
        }

    }

    public  function feedback() {
        echo successResponse("反馈成功,感谢您的宝贵意见");
    }
    public function demoDic() {
        $result = array();

        $baike_info = [
            "baike_url"=>"http://baike.baidu.com/item/%E8%8D%B7%E8%8A%B1/158674",
            "description"=>"荷花(Lotus flower)属山龙眼目，莲科，是莲属二种植物的通称。又名莲花、水芙蓉等。是莲属多年生水生草本花卉。地下茎长而肥厚，有长节，叶盾圆形。花期6至9月，单生于花梗顶端，花瓣多数，嵌生在花托穴内，有红、粉红、白、紫等色，或有彩纹、镶边。坚果椭圆形，种子成卵形。荷花种类很多，分观赏和食用两大类。原产亚洲热带和温带地区，中国早在周朝就有栽培记载。荷花全身皆宝，藕和莲子能食用，莲子、根茎、藕节、荷叶、花及种子的胚芽等都可入药。其出污泥而不染之品格恒为世人称颂。“接天莲叶无穷碧，映日荷花别样红”就是对荷花之美的真实写照。荷花“中通外直，不蔓不枝，出淤泥而不染，濯清涟而不妖”的高尚品格，历来为古往今来诗人墨客歌咏绘画的题材之一。1985年5月荷花被评为中国十大名花之一。荷花是印度,越南的国花。",

        ];

        $result[0]= [
            "score"=>0.79123616218567,
            "name"=>"荷花",
            "baike_info"=>$baike_info,
        ];

        $result[1]= [
            "score"=>0.123616218567,
            "name"=>"莲",
            "baike_info"=>$baike_info,
        ];

        $data = [
            "log_id"=>2233046923807801461,
            "result"=>$result,
        ];
        return $data;

    }
}
