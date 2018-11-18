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

</head>
<body>
<div class="div">
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
            <td><?php echo trim($col); ?></td>
             <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
</body>
</html>