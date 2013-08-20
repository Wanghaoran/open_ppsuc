<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>学员中心 - 中国人民公安大学网络教育学院</title>
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
		<li role="presentation"><a href="__APP__/index/changeinfo" tabindex="-1" role="menuitem">更改资料</a></li>
		<li role="presentation"><a href="__APP__/index/loginlog" tabindex="-1" role="menuitem">登陆日志</a></li>
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
  <div class="row">
    <div class="span3">
      <div style="max-width: 340px; padding: 8px 0;" class="well">
              <ul class="nav nav-list">
                <li class="nav-header">我的会员中心</li>
		<?php if((MODULE_NAME == 'Index') AND (ACTION_NAME == 'index')): ?><li class="active"><a href="__APP__">首页</a></li>
		<?php else: ?>
		<li><a href="__APP__">首页</a></li><?php endif; ?>
		<?php if((MODULE_NAME == 'Index') AND (ACTION_NAME == 'changeinfo')): ?><li class="active"><a href="__APP__/index/changeinfo">更改资料</a></li>
		<?php else: ?>
                <li><a href="__APP__/index/changeinfo">更改资料</a></li><?php endif; ?>
		<?php if((MODULE_NAME == 'Index') AND (ACTION_NAME == 'loginlog')): ?><li class="active"><a href="__APP__/index/loginlog">登陆日志</a></li>
		<?php else: ?>
                <li><a href="__APP__/index/loginlog">登陆日志</a></li><?php endif; ?>
                <li><a href="#">短消息</a></li>
                <li class="nav-header">课程中心</li>
		<?php if((MODULE_NAME == 'Course') AND (ACTION_NAME == 'index')): ?><li class="active"><a href="__APP__/course">最新课程</a></li>
		<?php else: ?>
                <li><a href="__APP__/course">最新课程</a></li><?php endif; ?>
                <li><a href="#">已购买课程</a></li>
                <li class="divider"></li>
                <li><a href="__ROOT__">返回网站首页</a></li>
                <li><a href="#">帮助中心</a></li>
              </ul>
            </div>

    </div>
    <div class="span9">
      <div class="well">
	<?php if(is_array($result_course)): $i = 0; $__LIST__ = $result_course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rc): $mod = ($i % 2 );++$i;?><ul class="nav nav-tabs">
	  <li class="active"><a href="#"><?php echo ($rc["name"]); ?></a></li>
	  <li class="pull-right"><a href="#"><i class="icon-shopping-cart"></i> 购买此课程>></a></li>
	</ul>
	<div class="row-fluid">
	  <ul class="thumbnails">
	  <?php if(is_array($rc["list"])): $i = 0; $__LIST__ = $rc["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rcl): $mod = ($i % 2 );++$i;?><li class="span3">
	      <div class="thumbnail">
		<img src="__UPLOAD__/<?php echo ($rcl["pic"]); ?>" />
		<div class="caption">
		  <p><?php echo ($rcl["name"]); ?></p>
		</div>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
    </div>
  </div>
</div>
</body>