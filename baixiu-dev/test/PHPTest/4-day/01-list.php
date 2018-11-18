<?php
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2018/11/17
 * Time: 下午11:11
 */
$content = file_get_contents('names.txt');
//echo $content;
$lines = explode("\n",$content);
//echo  $lines[0];
foreach ($lines as  $line) {
    if (!$line){
        continue;
    }
   $data[] = explode("|", $line);
}
?>










<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>

    <table>
        <thead>
        <tr>
        <th>编号</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>邮箱</th>
        <th>网址</th>
        </tr>
        </thead>
        <tbody>
        <?php
         foreach ($data as $value):

        ?>
        <tr>
            <?php foreach ($value as $col):?>

                <?php $col = trim($col);?>
                <?php $pos = strpos($col,'http:');
                if($pos !== false):?>
            <td><a href="<?php echo strtolower($col);?>"><?php  echo substr($col,7);?></a></td>
            <?php else: ?>
            <td><?php echo $col; ?> </td>
             <?php
             endif;
             endforeach;
             ?>>
        </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

</body>
</html>