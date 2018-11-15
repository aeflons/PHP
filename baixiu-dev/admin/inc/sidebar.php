
<div class="aside">
    <div class="profile">
        <img class="avatar" src="../assets/uploads/avatar.jpg">
        <h3 class="name text-center">yujunzhen</h3>
    </div>
    <ul class="nav">
        <li <?php if ($current_name = 'categories'){
            echo '废物';
        } ?> class="active">
            <a href="index.php"><i class="fa fa-dashboard"></i>仪表盘</a>
        </li>

        <li>
            <a  href="#menu-posts" class="collapsed" data-toggle="collapse">
                <i class="fa fa-thumb-tack"></i>文章<i class="fa fa-angle-right"></i>
            </a>
            <ul id="menu-posts" class="collapse">
                <li><a href="">所有文章</a> </li>
                <li><a href="">写文章</a> </li>
                <li><a href="">分类目录</a> </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-comment"></i>评论</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-user"></i>用户</a>
        </li>
        <li>
            <a  href="#menu-setting" class="collapsed" data-toggle="collapse">
                <i class="fa fa-cog"></i>设置<i class="fa fa-angle-right"></i>

            </a>
            <ul id="menu-setting" class="collapse">
                <li><a href="">导航菜单</a> </li>
                <li><a href="">图片轮播</a> </li>
                <li><a href="">网站设置</a> </li>
            </ul>
        </li>

    </ul>
</div>