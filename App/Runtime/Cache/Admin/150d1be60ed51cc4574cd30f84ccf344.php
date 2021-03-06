<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo C('WEBSITE_NAME');?>|后台管理</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="<?php echo C('WEBSITE_KEYWORDS');?>">
        <meta name="description" content="<?php echo C('WEBSITE_DESCRIPTION');?>">
        <link rel="stylesheet" href="__PUBLIC__/lib/tinybox2/style.css" />
        <link rel="stylesheet" href="__PUBLIC__/css/public.css" />
        <link rel="stylesheet" href="__PUBLIC__/css/admin/index.css" />
    </head>
    <body>
        <div class="container">
            <div id="header" class='header'>
                <h1>
                    <span class="brand"><?php echo C('WEBSITE_NAME');?></span>
                    <span class="right">
                        <?php echo ($user["username"]); ?>
                        [<a href="<?php echo U('Login/logout');?>">退出</a>]
                    </span>
                </h1>
            </div>
            <div id="content" class='content'>
                <div class="slidbar">
                    <ul class='menu text-right'>
                        <li><a href="#">网站管理</a></li>
                        <li><a href="#">推广商品管理</a></li>
                        <li><a href="#">人员管理</a></li>
                        <li><a href="#">统计</a></li>
                    </ul>
                </div>
                <div class="main-content">
                    <div id="website" class="content-wrapper active">
                        <p><span class="th">网站名称:</span><?php echo C('WEBSITE_NAME');?></p>
                        <p><span class="th">网站关键字:</span><?php echo C('WEBSITE_KEYWORDS');?></p>
                        <p><span class="th">网站描述:</span><?php echo C('WEBSITE_DESCRIPTION');?></p>
                        <p>
                            <span class="th"></span>
                            <input onclick="showDialog('url','<?php echo U('updateWebsite');?>',500,200);" type="button" class="btn gray" value='修改'/>
                        </p>
                    </div>
                    <div id="products" class="content-wrapper">
                        推广商品管理
                    </div>
                    <div id="users" class="content-wrapper">
                        人员管理
                    </div>
                    <div id="number" class="content-wrapper">
                        统计数据
                    </div>
                </div>

            </div>
            <div id="footer" class='footer'>

            </div>
        </div>
    </body>
    <script src="__PUBLIC__/lib/jquery/jquery-1.8.2.min.js"></script>
    <script src="__PUBLIC__/lib/tinybox2/packed.js"></script>
    <script src="__PUBLIC__/js/admin/index.js"></script>
</html>