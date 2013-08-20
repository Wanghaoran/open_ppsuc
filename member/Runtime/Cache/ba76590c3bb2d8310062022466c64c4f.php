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
                <li><a href="#">登陆日志</a></li>
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
	<div class="alert">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>新短消息！</strong>&nbsp;&nbsp;&nbsp;您有 <strong>7</strong> 条新短消息，请进入 <strong><a>收件箱</a></strong> 查看
	</div>
	<div class="alert alert-info">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>课程更新！</strong>&nbsp;&nbsp;&nbsp;您所购买的课程已更新 <strong>3</strong> 课时，请进入 <strong><a>已购买课程</a></strong> 查看
	</div>
	<div class="row">
	  <div class="span2"><img src="__PUBLIC__/member/image/user_default.jpg" class="img-polaroid"></div>
	  <div class="span6" style="margin-left:-10px;">
	    <span class="label"><i class="icon-user"></i> <?php echo ((session('member_name'))?(session('member_name')):$_SESSION['member_email']); ?></span>
	    <h3>欢迎回到 学员中心</h3>
	    <span>您已经登陆本系统 <strong class="text-success"><?php echo ($member_info["login_count"]); ?></strong>  次&nbsp;&nbsp;&nbsp;上次登陆时间: <strong class="text-info"><?php echo (date("Y-m-d H:i:s", $member_info["login_time"])); ?></strong>&nbsp;&nbsp;IP: <strong class="text-info"><?php echo ($member_info["login_ip"]); ?></strong></span>
	  </div>
	</div>
	<hr />
	<div class="tabbable">
	  <ul class="nav nav-tabs">
	    <li class="active"><a href="#tab1" data-toggle="tab">登陆记录</a></li>
	    <li><a href="#tab2" data-toggle="tab">我的课程</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane active" id="tab1">
	      <table class="table table-striped">
		<thead>
		  <tr>
                    <th>#</th>
                    <th>登陆时间</th>
                    <th>登陆IP</th>
                  </tr>
		</thead>
                <tbody>
		<?php if(is_array($login_info)): $i = 0; $__LIST__ = $login_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr>
		  <td><?php echo ($li["id"]); ?></td>
                  <td><?php echo (date("Y-m-d H:i:s", $li["login_time"])); ?></td>
		  <td><?php echo ($li["login_ip"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
	      </table>
	    </div>
	    <div class="tab-pane" id="tab2">
	      <table class="table table-striped">
		<thead>
		  <tr>
                    <th>#</th>
                    <th>课程名称</th>
                    <th>课时数</th>
                    <th>购买时间</th>
                    <th>操作</th>
                  </tr>
		</thead>
                <tbody>
                <tr>
		  <td>1</td>
		  <td>论非法获取计算机信息系统数据罪的必要性</td>
		  <td>15 课时</td>
                  <td>2013-08-20</td>
		  <td><a>观看</a> / <a>删除</a></td>
                </tr>
		 <tr>
		  <td>2</td>
		  <td>警察防卫与控制</td>
		  <td>8 课时</td>
                  <td>2013-07-20</td>
		  <td><a>观看</a> / <a>删除</a></td>
                </tr>
                </tbody>
	      </table>
	    </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>