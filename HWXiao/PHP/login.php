<?php
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2019/3/14
 * Time: 11:46 AM
 */
require_once "config.php";
header('Content-type:text/json;charset=utf-8');




$conn = connectMysql();

$file = fopen('2.txt','r') or exit("无法打开文件");





$content = "";
$title = "";

while(!feof($file)) {
    $con = fgetc($file);
    if (preg_match("/第([一二三四五六七八九十]{1,18})(回|章|节){1}[^ -~]/",$con)){
        $con = stringRemoveSpace($con);
//        $sql = "INSERT INTO chapter (title,content,book_id) VALUES ($title,$content,1)";
//        $conn->query($sql);
        $title = $con;
        $content = "";
        echo  $sql;
    }else {
        $content = $content.$con;
    }

}

fclose($file);






function detect_encoding($file_path, $filesize = '1000') {
    $list = array('GBK', 'UTF-8', 'UTF-16LE', 'UTF-16BE', 'ISO-8859-1');
    $str = fileToSrting($file_path, $filesize);
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
        die('文件路径错误！');
    }
}
 function stringRemoveSpace($str){
     $str = mb_ereg_replace('^(　| )+', '', $str);
     $str = mb_ereg_replace('(　| )+$', '', $str);
     return $str;
 }

?>

