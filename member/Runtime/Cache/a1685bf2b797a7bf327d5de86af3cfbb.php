<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>错误跳转 - 中国人民公安大学网络教育学院</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="__PUBLIC__/index/bootstarp/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet/less" type="text/css" href="__PUBLIC__/index/style/styles.less">
    <script src="__PUBLIC__/index/javascript/less.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/index/javascript/jquery.min.js"></script>
    <script src="__PUBLIC__/index/bootstarp/js/bootstrap.min.js"></script>
    <style>
        body {
            position: relative;
            padding-top: 60px;
        }
    </style>
</head>
<body>
    <!-- Navbar Start -->
<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="__APP__" style="color: white;">学员中心 - 中国人民公安大学网络教育学院</a>
            <ul class="nav">
                <li class="active"><a href="__APP__">学员中心首页</a></li>
                <li><a href="#">我的课程</a></li>
                <li><a href="#">学员消息</a></li>
            </ul>
	    <ul class="nav pull-right">
	      <?php if(isset($_SESSION[C('USER_AUTH_KEY')])): ?><li class="dropdown" id="fat-menu">
	      <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop3" href="#">我的学员中心<b class="caret"></b></a>
	      <ul aria-labelledby="drop3" role="menu" class="dropdown-menu">
		<li role="presentation"><img src="__PUBLIC__/member/image/user_default.jpg" width="80" class="img-polaroid" style="margin:3px 34px;"></li>
		<li role="presentation"><h5 class="text-center"><?php echo ((session('member_name'))?(session('member_name')):'您还未设置姓名'); ?></h5></li>
		<li class="divider" role="presentation"></li>
		<li role="presentation"><a href="" tabindex="-1" role="menuitem">更改资料</a></li>
		<li role="presentation"><a href="" tabindex="-1" role="menuitem">登陆日志</a></li>
		<li role="presentation"><a href="" tabindex="-1" role="menuitem">短消息</a></li>
		<li class="divider" role="presentation"></li>
		<li role="presentation"><a href="" tabindex="-1" role="menuitem">已购买课程</a></li>
		<li class="divider" role="presentation"></li>
		<li role="presentation"><a href="__ROOT__" tabindex="-1" role="menuitem">返回网站主页</a></li>
		<li role="presentation"><a href="__APP__/public/logout" tabindex="-1" role="menuitem">登出</a></li>
	      </ul>
	      </li>
	      <?php else: ?>
	      <li><a href="__ROOT__">返回主页>></a></li><?php endif; ?>
	    </ul>
        </div>

    </div>
</div>

    <!-- Navbar End -->

<div class="container">
  <div class="hero-unit" style="margin-top:100px;">
    <div class="alert alert-error">
      <strong><?php echo ($msgTitle); ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($error); ?>
    </div>
    <small class="pull-right">页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b></small>
  </div>  
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time == 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>