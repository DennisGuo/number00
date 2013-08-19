<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo C('WEBSITE_NAME');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="<?php echo C('WEBSITE_KEYWORDS');?>">
<meta name="description" content="<?php echo C('WEBSITE_DESCRIPTION');?>">
<link rel="stylesheet" href="__PUBLIC__/lib/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="__PUBLIC__/css/public.css" />
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
           		<span class="icon-bar"></span>
	          </button>
	          <a class="brand" href="#"><?php echo C('WEBSITE_NAME');?></a>
	          <div class="nav-collapse collapse">
	            <ul class="nav">
	              <li class="active"><a href="#">Home</a></li>
	              <li><a href="#about">About</a></li>
	              <li><a href="#contact">Contact</a></li>
	            </ul>
	          </div><!--/.nav-collapse -->
	        </div>
	      </div>
	</div>
</body>
<script src="__PUBLIC__/lib/jquery/jquery-1.8.2.min.js"></script>
<script src="__PUBLIC__/lib/bootstrap/js/bootstrap.min.js"></script>
</html>