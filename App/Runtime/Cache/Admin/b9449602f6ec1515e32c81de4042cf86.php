<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>登录</title>
<link rel="stylesheet" href="__PUBLIC__/lib/bootstrap/css/bootstrap.min.css" />
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
</script>
</head>
<body>
	<div class='login-form-div'>
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
				<label class="control-label"></label>
				<div class="controls">
					<input class='btn btn-primary' type='submit' value='登录' onclick='return confirm();' />
				</div>
			</div>
		</form>
	</div>
</body>
</html>