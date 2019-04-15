<?php
namespace app\index\controller;
use think\controller;
use think\config;
use think\Db;
use think\Request;
class Index extends  controller
{
    public function index()
    {

        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }
    public function hello()
    {
        echo 'hello';
    }
    public  function upload(){
        return $this->fetch();
    }
    public function uploadbook(Request $request)
    {
        $file = $request->file('bookfile');
        $name = $request->param("bookname");
        $author = $request->param("bookauthor");
        $intro = $request->param("bookIntro");
        $date  = time();
        $icon = $request->param("bookIcon");
        $type = $request->param("booktype");
        if (empty($file) || empty($name)
//            || empty($author) || empty($intro) || empty($icon) || empty($type)
        )
        {
            failResponse("缺少必要参数");
            return;
        }

        if($file) {
            $info = $file->validate(["ext" => "txt,equb"])->rule('md5')->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info) {
                // 成功上传后 获取上传信息
                // 输出 jpg
                $bookPath = $info->getSaveName();
                $bookPath = "../public/uploads/".$bookPath;

              if ($this->detect_encoding($bookPath)!='UTF-8'){
                    failResponse('请上传utf-8编码文件');

                    return;
                }


                $handle = fopen("../public/uploads/".$bookPath, 'r') or die('打开<b>'."../public/uploads/".$bookPath.'</b>文件失败!!');

                $data = ['name' => $name, 'author' => $author, 'intro' => $intro, 'type' => $type, 'date' => $date, 'icon' => $icon, 'book_path' => $bookPath];

                $book_id = Db::table("book")->insertGetId($data);
                $content = "";
                $title = "";
                successResponse($book_id);
                while(!feof($handle)) {
                    $con = fgets($handle);
                    if (preg_match("/第([零一二三四五六七八九十百千]{1,18})(回|章|节|集){1}[^\x{4e00}-\x{9fa5}]+/u/",$con)){
                        $con = $this->stringRemoveSpace($con);
                        if (empty($title)){
                            $title = $con;
                            continue;
                        }else{
                            if (empty($content)){

                                continue;
                            }
                            $chapterDate = time();
                            $chapterData = [
                                'title'=>$title,
                                'content'=>$content,
                                'book_id'=>$book_id,
                                'chapter_date'=>$chapterDate
                            ];
                            $title = $con;
                            $content = "";
                            //$sql = "INSERT INTO chapter (title,content,book_id,chapter_date) VALUES ('$title','$content',$book_id,$chapterDate)";
                            //Db::query($sql);
                          $chapter_id = Db::insertGetId($chapterData);
                        }
                    }else {

                        if (preg_match("/\S{1,}/",$con)){
                            $content = $content.$con;
                        }
                    }

                }


            } else {
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }

    }
   public  function  test(){
       $con = "夭夭魂飞魄散很快就在痛楚与酥麻中掉出了第二回花精";
       if (preg_match("/第([零一二三四五六七八九十百千]{1,18})(回|章|节|集){1}[^\x{4e00}-\x{9fa5}]+/u",$con)) {
       echo "匹配成功";
       }else{
           echo "匹配失败";
       }


   }

   public  function  editbook(Request $request){
       $name = $request->param("bookname");
       $author = $request->param("bookauthor");
       $intro = $request->param("bookIntro");
       $icon = $request->param("bookIcon");
       $type = $request->param("booktype");
       $bookid = $request->param("bookid");
       $bookData=[];
       if (preg_match("/\S{1,}/",$name)){
        $bookData['name']=$name;
       }
       if (preg_match("/\S{1,}/",$author)){
           $bookData['author']=$author;
       }
       if (preg_match("/\S{1,}/",$intro)){
           $bookData['intro']=$intro;
       }
       if (preg_match("/\S{1,}/",$type)){
           $bookData['type']=$type;
       }
       if (preg_match("/\S{1,}/",$icon)){
           $bookData['icon']=$icon;
       }

       if (preg_match("/\S{1,}/",$bookid)){
           $this->error("缺少必要参数");
           return;
       }
       if ($bookData.count()>0){
           
       }

   }

    public function readbook(){
        $fileName = "../public/uploads/book/1.txt";
        $handle = fopen($fileName, 'w') or die('打开<b>'.$fileName.'</b>文件失败!!');

        //循环10次写入10行数据到文件中
        for($row=0; $row<10; $row++) {
            //写入文件
            fwrite($handle, $row.": www.baidu.com\n");
        }
        //关闭由fopen()打开的文件指针资源
        fclose($handle);
    }

    public function login()
    {
     dump(Db::query("SELECT *FROM book"));

    }
    public function booklist(Request $request){
        $page = 1;
        $paginate=10;
        $type = 1;

        $page = $request->param("page");
        $type = $request->param("type");

        $data = Db::table("chapter")->where("book_id",1)->paginate(10);

        return json_encode($data,JSON_UNESCAPED_SLASHES);
    }


    function detect_encoding($file_path, $filesize = '1000') {
        $list = array('GBK', 'UTF-8', 'UTF-16LE', 'UTF-16BE', 'ISO-8859-1');
        $str = $this->fileToSrting($file_path, $filesize);
        foreach ($list as $item) {
            $tmp = mb_convert_encoding($str, $item, $item);
            if (md5($tmp) == md5($str)) {
                return $item;
            }
        }
        return '遇到识别不出来的编码！';
    }
    function fileToSrting($file_path, $filesize = '') {
        //判断文件路径中是否含有中文，如果有，那就对路径进行转码，如此才能识别
        if (preg_match("/[\x7f-\xff]/", $file_path)) {
            $file_path = iconv('UTF-8', 'GBK', $file_path);
        }
        if (file_exists($file_path)) {
            $fp = fopen($file_path, "r");
            if ($filesize === '') {
                $filesize = filesize($file_path);
            }
            $str = fread($fp, $filesize); //指定读取大小，这里默认把整个文件内容读取出来
            return $str = str_replace("\r\n", "<br />", $str);
        } else {
            echo $file_path;
            die('文件路径错误！');
        }
    }
    function  stringIsUTF8($string){

}
    function stringRemoveSpace($str){
        $str = mb_ereg_replace('^(　| )+', '', $str);
        $str = mb_ereg_replace('(　| )+$', '', $str);
        return $str;
    }
   /*
   * 小说的章节列表
   * */
    function bookDetail(Request $request){
        $bookid = $request->param('id');
        if (empty($bookid))
        {
            failResponse("缺少必要参数");
//            $this->error("缺少必要参数");
            return;
        }
       $bookinfo = Db::table("book")->where("id",$bookid)->select();
        $bookChapters = Db::table("chapter")->where("book_id",$bookid)->field("content",true)->select();
        $this->assign('bookinfo', $bookinfo);
        $this->assign("bookChapters",$bookChapters);
        return $this->fetch();


     }
     /*小说的章节*/
     function  bookchapter(Request $request){
         $bookid = $request->param('id');
         if (empty($bookid))
         {
             failResponse("缺少必要参数");
//            $this->error("缺少必要参数");
             return;
         }
         $bookChapter = Db::table("chapter")->where("id",$bookid)->select();

         $this->assign("bookchapter",$bookChapter[0]);
         return $this->fetch();
     }
     /*添加小说分类,1添加,2编辑,*/
     function add_book_type(Request $request){
         $type = $request->param('type');
          $name = $request->param('name');
         $typeid = $request->param('typeid');
         if (empty($type) || !preg_match("/\S{1,}/",$type)){
             failResponse("缺少必要参数");
             return;
         }
         if (empty($name) || !preg_match("/\S{1,}/",$name)){
             failResponse("缺少必要参数");
             return;
         }
         $typeData = [
             'name'=>$name,
         ];
         if ($type==1){
             Db::table("type")->insert($typeData);
             successResponse("添加成功");
         }else if ($type==2){
             if (empty($typeid) || !preg_match("/\S{1,}/",$typeid)){
                 failResponse("缺少必要参数");
                 return;
             }
             Db::table("type")->where("id",$typeid)->update($typeData);
             successResponse("修改成功");


         }else{
             $this->error("发生错误");
         }

     }

    /*添加小说分类,1添加,2编辑,*/
    function delete_book_type(Request $request){
        $typeid = $request->param('typeid');

        if (empty($typeid) || !preg_match("/\S{1,}/",$typeid)){
                failResponse("缺少必要参数");
                return;
            }
            Db::table("type")->where("id",$typeid)->delete();
            successResponse("删除成功");




    }

}
