<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>学员注册 - 中国人民公安大学网络教育学院</title>
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
    <script>	
	var checkRePassword = function(){
	  if($('#inputRePassword').val() != $('#inputPassword').val() || $('#inputPassword').val() == ''){
	    $('#checkpassword').removeClass('label-info');
	    $('#checkpassword').removeClass('label-success');
	    $('#checkpassword').addClass('label-important');
	    $('#checkpassword').html('两次密码输入不一致！');
	  }else{
	    $('#checkpassword').removeClass('label-info');
	    $('#checkpassword').removeClass('label-important');
	    $('#checkpassword').addClass('label-success');
	    $('#checkpassword').html('两次密码输入相同！');
	  }	  
	}
	
	var checkEmail = function() {
	  var patten = new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
	  if(patten.test($('#inputEmail').val())){
	    $('#checkEmail').removeClass('label-info');
	    $('#checkEmail').removeClass('label-important');
	    $('#checkEmail').addClass('label-success');
	    $('#checkEmail').html('电子邮件输入正确');
	  }else{
	    $('#checkEmail').removeClass('label-info');
	    $('#checkEmail').removeClass('label-success');
	    $('#checkEmail').addClass('label-important');
	    $('#checkEmail').html('电子邮件格式错误！');
	  }
	  ajaxEmail($('#inputEmail').val());
	}

	var checkTelphone = function(){
	  var reg=/^[0-9]{11}$/i;
          if(reg.test($("#inputTelphone").val())){   
	    $('#checkTelphone').removeClass('label-info');
	    $('#checkTelphone').removeClass('label-important');
	    $('#checkTelphone').addClass('label-success');
	    $('#checkTelphone').html('手机号输入正确');
	  }else{
	    $('#checkTelphone').removeClass('label-info');
	    $('#checkTelphone').removeClass('label-success');
	    $('#checkTelphone').addClass('label-important');
	    $('#checkTelphone').html('手机号格式错误！');
           }
	}

	var checkSubmit = function(){
	  if($('#checkEmail').hasClass("label-important") || $('#checkEmail').hasClass("label-info")){
	    $('#inputEmail').focus();
	    $('#inputEmail').blur();
	    $('#inputEmail').focus();
	    return false;
	  }
	  if($('#checkpassword').hasClass("label-important") || $('#checkpassword').hasClass("label-info")){
	    $('#inputRePassword').focus();
	    $('#inputRePassword').blur();
	    $('#inputRePassword').focus();
	    return false;
	  }
	  if($('#checkTelphone').hasClass("label-important") || $('#checkTelphone').hasClass("label-info")){
	    $('#inputTelphone').focus();
	    $('#inputTelphone').blur();
	    $('#inputTelphone').focus();
	    return false;
	  }
	  return true;
	}

	var ajaxEmail = function(email){
	  $.ajax({
	    url:'__APP__/ajax/ajaxrepetaemail?email=' + email,
	    success: function(ress){
	      if(ress == 1){
	        $('#checkEmail').removeClass('label-info');
		$('#checkEmail').removeClass('label-success');
		$('#checkEmail').addClass('label-important');
		$('#checkEmail').html('此电子邮件已注册！');
	      }
	    }
	  });
	}
    </script>
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
  <h2 class="info-section-title">学员注册</h2>
  <div class="well">
    <form class="form-horizontal" onSubmit="return checkSubmit();" method="post" action="__URL__/checkregister">

      <legend>基本信息</legend>
      <div class="control-group">
	<label class="control-label" for="inputEmail">电子邮箱:</label>
	<div class="controls">
	  <input type="text" id="inputEmail" name="email" placeholder="请输入电子邮箱" onblur="checkEmail();"><span id="checkEmail" class="label label-info" style="margin-left:20px;">电子邮箱是您登陆系统进行学习的唯一凭证，请正确填写</span>
	</div>
      </div>
      <div class="control-group">
	<label class="control-label" for="inputPassword">登陆密码:</label>
	<div class="controls">
	  <input type="password" id="inputPassword" name="password" placeholder="请输入登陆密码" onblur="checkRePassword();">
	</div>
      </div>
      <div class="control-group">
	<label class="control-label" for="inputRePassword">重复登陆密码:</label>
	<div class="controls">
	  <input type="password" id="inputRePassword" name="repassword" placeholder="请再输入登陆密码" onblur="checkRePassword();"><span class="label label-info" style="margin-left:20px;" id="checkpassword">请输入两次相同的密码</span>
	</div>
      </div>
      <div class="control-group">
	<label class="control-label" for="inputTelphone">手机号码:</label>
	<div class="controls">
	  <input type="text" id="inputTelphone" name="telphone" placeholder="手机号码" onblur="checkTelphone();"><span class="label label-info" id="checkTelphone" style="margin-left:20px;">绑定安全手机(手机号为安全信息，不作登录使用)</span>
	</div>
      </div>
      <legend>其他信息</legend>
      <div class="control-group">
	<label class="control-label" for="inputName">真实姓名:</label>
	<div class="controls">
	  <input type="text" id="inputName" name="name" placeholder="您的真实姓名">
	</div>
      </div>
      <div class="form-actions">
	<button type="submit" class="btn btn-primary">注册</button>
	<button type="button" class="btn" style="margin-left:10px;" onclick="history.go(-1);">返回</button>
      </div>
  </form>
  </div>

  
</div>
</body>