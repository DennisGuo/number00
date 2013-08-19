<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo C('WEBSITE_NAME');?>|登录</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="<?php echo C('WEBSITE_KEYWORDS');?>">
<meta name="description" content="<?php echo C('WEBSITE_DESCRIPTION');?>">
<link rel="stylesheet" href="__PUBLIC__/lib/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="__PUBLIC__/css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/css/admin/login.css" />
<script>
function confirm()
{
	var msg = document.getElementById('msg');
	var username = document.getElementsByName("username")[0].value;
	if(username=="") {msg.innerHTML = '请输入用户名.';return false;}
	var password = document.getElementsByName("password")[0].value;
	if(password=="") {msg.innerHTML = '请输入登录密码.';return false;}
}
function changeVerigy()
{
	var num = Math.random();
	document.getElementById('verify').src = "<?php echo U('verify','','');?>"+"/"+num;
}
</script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <a class="brand" href="<?php echo U('Index/Index/index');?>"><?php echo C('WEBSITE_NAME');?></a>
	        </div>
	      </div>
	</div>

	<div class='login-form-div'>
		<h1><?php echo C('WEBSITE_NAME');?>|登录</h1>
		<form action="<?php echo U('login');?>" method='post' class='form-horizontal'>
			<p id="msg"><?php echo ($msg); ?></p>
			<div class="control-group">
				<label class="control-label">用户名：</label>
				<div class="controls">
					<input class='input-medium' name='username' type='text' />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">密码：</label>
				<div class="controls">
					<input  class='input-medium' name='password' type='password' />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">验证码：</label>
				<div class="controls">
					<input  class='input-small' name='verify' type='text' />
					<img id='verify' src="<?php echo U('verify');?>" alt="验证码" onclick="changeVerigy();"/>
					<a href="#" class="btn btn-mini" onclick="changeVerigy();">看不清</a>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<input class='btn btn-primary' type='submit' value='登录' onclick='return confirm();' />
				</div>
			</div>
		</form>
	</div>
</body>
</html>