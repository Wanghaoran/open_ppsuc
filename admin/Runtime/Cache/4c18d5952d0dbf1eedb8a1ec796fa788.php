<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中国人民公安大学网络学院后台管理系统</title>

<link href="__PUBLIC__/admin/dwz/themes/default/style.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/admin/dwz/themes/css/core.css" rel="stylesheet" type="text/css" />
<!--[if IE]>
<link href="__PUBLIC__/admin/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script src="__PUBLIC__/admin/dwz/js/speedup.js" type="text/javascript"></script> 
<script src="__PUBLIC__/admin/dwz/js/jquery-1.7.1.min.js" type="text/javascript"></script> 
<script src="__PUBLIC__/admin/dwz/js/jquery.cookie.js" type="text/javascript"></script> 
<script src="__PUBLIC__/admin/dwz/js/jquery.validate.js" type="text/javascript"></script> 
<script src="__PUBLIC__/admin/dwz/js/jquery.bgiframe.js" type="text/javascript"></script> 
<script src="__PUBLIC__/admin/dwz/js/dwz.min.js" type="text/javascript"></script> 
<script src="__PUBLIC__/admin/dwz/js/dwz.regional.zh.js" type="text/javascript"></script>
<script src="__PUBLIC__/admin/dwz/js/dwz.ajax.js" type="text/javascript"></script>  
<script src="__PUBLIC__/admin/dwz/js/dwz.database.js" type="text/javascript"></script>  
<script src="__PUBLIC__/admin/dwz/js/dwz.combox.js" type="text/javascript"></script>  
<script src="__PUBLIC__/kindeditor/kindeditor-min.js" type="text/javascript"></script>  
<script src="__PUBLIC__/kindeditor/zh_CN.js" type="text/javascript"></script>  

<script type="text/javascript">
function fleshVerify(){
	//重载验证码
	$('#verifyImg').attr("src", '__APP__/Public/verify/'+new Date().getTime());
}
function dialogAjaxMenu(json){
	dialogAjaxDone(json);
	if (json.statusCode == DWZ.statusCode.ok){
		$("#sidebar").loadUrl("__APP__/Public/menu");
	}
}
function navTabAjaxMenu(json){
	navTabAjaxDone(json);
	if (json.statusCode == DWZ.statusCode.ok){
		$("#sidebar").loadUrl("__APP__/Public/menu");
	}
}
$(function(){
	DWZ.init("__PUBLIC__/admin/dwz/dwz.frag.xml", {
		loginUrl:"__APP__/Public/login_dialog", loginTitle:"登录",	// 弹出登录对话框
//		loginUrl:"__APP__/Public/login",	//跳到登录页面
		statusCode:{ok:1,error:0},
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"_order", orderDirection:"_sort"}, //【可选】
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"__PUBLIC__/admin/dwz/themes"});
		}
	});
});
</script>
</head>

<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<a class="logo" href="__APP__" style="width:450px;">Logo</a>
				<ul class="nav">
				  <li><a href="__ROOT__" target="_blank">网站首页</a></li>
					<li><a href="__APP__/Public/main" target="dialog" width="580" height="360" rel="sysInfo">系统消息</a></li>
					<li><a href="__APP__/Public/password/" target="dialog" mask="true">修改密码</a></li>
					<li><a href="__APP__/Public/logout/">退出</a></li>
				</ul>
				<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">蓝色</div></li>
					<li theme="green"><div>绿色</div></li>
					<li theme="purple"><div>紫色</div></li>
					<li theme="silver"><div>银色</div></li>
					<li theme="azure"><div>天蓝</div></li>
				</ul>
			</div>
		</div>
		
		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			
			<div id="sidebar">
				<div class="accordion" fillSpace="sideBar">

  <div class="accordionHeader">
    <h2><span>Folder</span>学员管理</h2>
  </div>

  <div class="accordionContent">
    <ul class="tree treeFolder">
      <li><a href="__APP__/member/member" target="navTab" rel="member_member">注册学员管理</a></li>
    </ul>
  </div>

  <div class="accordionHeader">
    <h2><span>Folder</span>课程管理</h2>
  </div>

  <div class="accordionContent">
    <ul class="tree treeFolder">
      <li><a href="__APP__/course/category" target="navTab" rel="course_category">课程分类管理</a></li>
      <li><a href="__APP__/course/course" target="navTab" rel="course_course">课程管理</a></li>
    </ul>
  </div>

  <div class="accordionHeader">
    <h2><span>Folder</span>新闻管理</h2>
  </div>

  <div class="accordionContent">
    <ul class="tree treeFolder">
      <li><a href="__APP__/news/category" target="navTab" rel="news_category">新闻分类管理</a></li>
      <li><a href="__APP__/news/news" target="navTab" rel="news_news">新闻动态管理</a></li>
    </ul>
  </div>


</div>

			</div>
		</div>

		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:void(0)"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:void(0)">我的主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page unitBox">
						<div class="accountInfo">
							<div class="right">
								<p><?php echo (date('Y-m-d g:i a',time())); ?></p>
							</div>
							<p><span>尊敬的 <?php echo (session('name')); ?> 欢迎回来</span></p>
							<p>您已登录本系统 <span><?php echo (session('logincount')); ?></span> 次  &nbsp;&nbsp;&nbsp;&nbsp;本次登录IP为：<span style="color:red"><?php echo get_client_ip();?></span> &nbsp;&nbsp;&nbsp;&nbsp;上次登录IP为：<span style="color:red"><?php echo (session('last_login_ip')); ?></span>  &nbsp;&nbsp;&nbsp;&nbsp;上次登录时间为： <span style="color:red"><?php echo (date("Y-m-d H:i:s",session('last_login_time'))); ?></span> </p> 
						</div>
						<div class="pageFormContent" layoutH="80">
						欢迎光临 中国人民公安大学网络学院 后台管理系统


						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
	
	<div id="footer">Copyright &copy; 2013 <a href="" target="_blank">中国人民公安大学网络学院</a></div>


</body>
</html>