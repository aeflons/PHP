<?php echo $current_name;?>
    <div class="aside">
    <div class="profile">
        <img class="avatar" src="../assets/uploads/avatar.jpg">
        <h3 class="name text-center">yujunzhen</h3>
    </div>
    <ul class="nav">
        <li <?php echo $current_name == 'index' ? ' class="active"' : '';?> >
            <a href="index.php"><i class="fa fa-dashboard"></i>仪表盘</a>
        </li>
          <?php $menu_posts = array('posts','post_add','categories'); ?>
        <li <?php echo in_array($current_name, $menu_posts) ? 'class="active"' : '';?> >
            <a  href="#menu-posts" class="collapsed" data-toggle="collapse">
                <i class="fa fa-thumb-tack"></i>文章<i class="fa fa-angle-right"></i>
            </a>
            <ul id="menu-posts" class="collapse">
                <li <?php echo $current_name == 'posts' ? ' class="active"' : '';?>><a href="">所有文章</a> </li>
                <li <?php echo $current_name == 'post_add' ? ' class="active"' : '';?>><a href="">写文章</a> </li>
                <li <?php echo $current_name == 'categories' ? ' class="active"' : '';?>><a href="">分类目录</a> </li>
            </ul>
        </li>
        <li <?php echo $current_name == 'comments' ? 'class="active" ' : '' ?> >
            <a href="#"><i class="fa fa-comment"></i>评论</a>
        </li>
        <li<?php echo $current_name == 'users' ? 'class="active" ' : '' ?>>
            <a href="#"><i class="fa fa-user"></i>用户</a>
        </li>
        <?php  $menu_setting = array('nav-menus','slides','settings'); ?>
        <li <?php echo in_array($current_name,$menu_setting) ? 'class="active" ' : '' ?>>

            <a  href="#menu-setting" class="collapsed" data-toggle="collapse">
                <i class="fa fa-cog"></i>设置<i class="fa fa-angle-right"></i>

            </a>
            <ul id="menu-setting" class="collapse <?php echo in_array($current_name,$menu_setting) ? ' in ' : '' ?>">
                <li <?php echo $current_name == 'nav-menus' ? ' class="active"' : '';?> ><a href="">导航菜单</a> </li>
                <li <?php echo $current_name == 'slides' ? ' class="active"' : '';?>><a href="">图片轮播</a> </li>
                <li <?php echo $current_name == 'settings' ? ' class="active"' : '';?>><a href="">网站设置</a> </li>
            </ul>
        </li>

    </ul>
</div>