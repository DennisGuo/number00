<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo C('WEBSITE_NAME');?>|登录</title>
        <meta name="keywords" content="<?php echo C('WEBSITE_KEYWORDS');?>">
        <meta name="description" content="<?php echo C('WEBSITE_DESCRIPTION');?>">

        <link rel="stylesheet" href="__PUBLIC__/lib/blueprint/screen.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="__PUBLIC__/lib/blueprint/plugin/button/screen.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="__PUBLIC__/lib/blueprint/plugin/fancy-type/screen.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="__PUBLIC__/lib/blueprint/print.css" type="text/css" media="print" />
        <!--[if IE]>
          <link rel="stylesheet" href="__PUBLIC__/lib/blueprint/ie.css" type="text/css" media="screen, projection" />
        <![endif]-->
        <link rel="stylesheet" href="__PUBLIC__/css/admin/login.css" type="text/css" media="screen, projection" />
        <script>
            function confirm()
            {
                var msg = document.getElementById('msg');
                var username = document.getElementsByName("username")[0].value;
                if (username === "") {
                    msg.parentElement.style.display = "block";
                    msg.innerHTML = '请输入用户名.';
                    return false;
                }
                var password = document.getElementsByName("password")[0].value;
                if (password === "") {
                    msg.parentElement.style.display = "block";
                    msg.innerHTML = '请输入登录密码.';
                    return false;
                }
            }
            function changeVerigy()
            {
                var num = Math.random();
                document.getElementById('verify').src = "<?php echo U('verify','','');?>" + "/" + num;
            }
            function checkMsg()
            {
                var msg = document.getElementById('msg');
                if(msg.innerHTML === ""){
                    msg.parentElement.style.display = "none";
                }                    
            }
        </script>
    </head>
    <body onload="checkMsg();">
        <div class="container">
            <div id="header">
                <h1> <?php echo C('WEBSITE_NAME');?> </h1>
                <hr />
                <div class='quiet'>
                    欢迎登录<strong><?php echo C('WEBSITE_NAME');?></strong>，系统管理页。<br />
                    <blockquote>
                        <p><?php echo C('WEBSITE_DESCRIPTION');?></p>
                    </blockquote>
                </div>
                <hr />
            </div>
            <div id="content">
                <div class="span-8 colborder">
                    <form action="<?php echo U('login');?>" method='post'>
                        <div class='lh-30'>
                            <label for="username">用户名:</label>
                            <br />
                            <input type="text" name='username'  id="username" value="" />
                        </div>
                        <div class='lh-30'>
                            <label for="password">密码:</label>
                            <br />
                            <input type="password" name='password'  id="password" value="" />
                        </div>
                        <div class='lh-30'>
                            <label for="verify">验证码:</label>
                            <br />
                            <input type="text" name='verify'  value="" />
                            <br />
                            <img id='verify' src="<?php echo U('verify');?>" alt="验证码" onclick="changeVerigy();"/>			
                        </div>
                        <div class='lh-30'>
                            <input class='button positive' type='submit' value='登录' onclick='return confirm();' />
                        </div>
                    </form>
                </div>
                <div class="span-14 error" >
                    <p id="msg"><?php echo ($msg); ?></p>
                </div>
            </div>
        </div>
    </body>
</html>