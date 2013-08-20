<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>新闻动态 - 中国人民公安大学网络教育学院</title>
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
            <a class="brand" href="__ROOT__" style="color: white;">中国人民公安大学网络教育学院</a>
            <ul class="nav">
	      <?php if((MODULE_NAME == 'Index') AND (ACTION_NAME == 'index')): ?><li class="active"><a href="__ROOT__">首页</a></li>
		<?php else: ?>
		<li><a href="__ROOT__">首页</a></li><?php endif; ?>
                <li><a href="__ROOT__/member.php/course">课程展示</a></li>
		<?php if(((MODULE_NAME == 'News') AND (ACTION_NAME == 'index')) OR ((MODULE_NAME == 'News') AND (ACTION_NAME == 'info'))): ?><li class="active"><a href="__ROOT__/news">新闻动态</a></li>
		<?php else: ?>
                <li><a href="__ROOT__/news">新闻动态</a></li><?php endif; ?>
                <li><a href="#">关于我们</a></li>
            </ul>
	    <ul class="nav pull-right">
	      <?php if(isset($_SESSION[C('USER_AUTH_KEY')])): ?><li class="dropdown" id="fat-menu">
	      <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop3" href="#">我的学员中心<b class="caret"></b></a>
	      <ul aria-labelledby="drop3" role="menu" class="dropdown-menu">
		<li role="presentation"><img src="__PUBLIC__/member/image/user_default.jpg" width="80" class="img-polaroid" style="margin:3px 34px;"></li>
		<li role="presentation"><h5 class="text-center"><?php echo ((session('member_name'))?(session('member_name')):'您还未设置姓名'); ?></h5></li>
		<li class="divider" role="presentation"></li>
		<li role="presentation"><a href="__ROOT__/member.php" tabindex="-1" role="menuitem"><strong>进入学员中心</strong></a></li>
		<li class="divider" role="presentation"></li>
		<li role="presentation"><a href="" tabindex="-1" role="menuitem">更改资料</a></li>
		<li role="presentation"><a href="" tabindex="-1" role="menuitem">登陆日志</a></li>
		<li role="presentation"><a href="" tabindex="-1" role="menuitem">短消息</a></li>
		<li class="divider" role="presentation"></li>
		<li role="presentation"><a href="" tabindex="-1" role="menuitem">已购买课程</a></li>
		<li class="divider" role="presentation"></li>
		<li role="presentation"><a href="__ROOT__/member.php/public/logout" tabindex="-1" role="menuitem">登出</a></li>
	      </ul>
	      </li>
	      <?php else: ?>
	      <li class="dropdown" id="fat-menu">
		<a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop3" href="#">学员中心<b class="caret"></b></a>
		<ul aria-labelledby="drop3" role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="__ROOT__/member.php/public/register" tabindex="-1" role="menuitem">注册</a></li>
                        <li role="presentation"><a href="__ROOT__/member.php/public/login" tabindex="-1" role="menuitem">登陆</a></li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation"><a href="#" tabindex="-1" role="menuitem">招生简章</a></li>
                      </ul>
                    </li><?php endif; ?>


                    
                  </ul>
        </div>

    </div>
</div>

    <!-- Navbar End -->

<div class="container">
  <h2 class="text-center"><?php echo ($result["title"]); ?></h2>
  <div class="well well-small" style="margin-top:20px;">
    <?php echo (stripslashes($result["content"])); ?>
</div>
</div>

<div id="footer">
    <div class="container">
        <p class="muted credit">
            版权所有：<a href="">中国人民公安大学网络学院</a>
            <span class="pull-right"><button class="btn btn-mini btn-inverse" type="button"  style="margin-left: 10px;"><i class="icon-user icon-white"></i> 诚聘英才</button></span>
            <span class="pull-right"><button class="btn btn-mini btn-success" type="button"><i class="icon-envelope icon-white"></i> 联系我们</button></span>
        </p>
    </div>
</div>


</body>
</html>