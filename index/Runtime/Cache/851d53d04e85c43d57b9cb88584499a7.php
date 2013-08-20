<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>中国人民公安大学网络教育学院</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="__PUBLIC__/index/bootstarp/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet/less" type="text/css" href="__PUBLIC__/index/style/styles.less">
    <script src="__PUBLIC__/index/javascript/less.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__/index/javascript/jquery.min.js"></script>
    <script src="__PUBLIC__/index/bootstarp/js/bootstrap.min.js"></script>
    <style>
        body {
            position: relative;
            padding-top: 40px;
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



<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item">
            <img src="__PUBLIC__/index/image/slide-01.jpg">

        </div>
        <div class="item">
            <img src="__PUBLIC__/index/image/slide-02.jpg">

        </div>
        <div class="item">
            <img src="__PUBLIC__/index/image/slide-03.jpg">

        </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span4">
                <h4>学校简介</h4>
                <embed src="http://player.youku.com/player.php/sid/XNTcwMjA4MTU2/v.swf" allowFullScreen="true" quality="high" width="100%"  height="290" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash">

                </embed>

            </div>
            <div class="span4">
                <h4>学院新闻</h4>
                <div class="well well-small">
                    <ul class="unstyled" id="news">
		      <?php if(is_array($result_news)): $i = 0; $__LIST__ = $result_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rn): $mod = ($i % 2 );++$i;?><li>
			<span class="pull-right text-info"><?php echo (date("Y-m-d", $rn["addtime"])); ?></span> <strong style="color:<?php echo ($rn["color"]); ?>;">【<?php echo ($rn["ncname"]); ?>】</strong>&nbsp;&nbsp;<a style="color:black;" target="_blank" href="__ROOT__/news/info/id/<?php echo ($rn["id"]); ?>"><?php echo ($rn["title"]); ?></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>


            </div>
            <div class="span4">
                <h4>课程更新</h4>

                    <ul class="unstyled" id="class_show">
                        <li><img src="__PUBLIC__/index/image/class_1.png" /></li>
                        <li><img src="__PUBLIC__/index/image/class_2.png" /></li>
                        <li><img src="__PUBLIC__/index/image/class_3.png" /></li>
                        <li><img src="__PUBLIC__/index/image/class_4.png" /></li>
                    </ul>

            </div>

        </div>

        <hr/>
        <div class="row-fluid marketing">
            <div class="span4">
                <div class="thumbnail">
                    <img src="__PUBLIC__/index/image/open_source.png" />
                    <div class="caption">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;目前，中国人民公安大学网络教育学院拥有15门网络公开课，涉及公安指挥、犯罪学、刑事侦查学等多个领域，目前课程总数量达到200余节。由于部分课程涉密，所以不对普通学生开放。从这里您可以了解到最新的课程信息和课程安排</p>
                        <button class="btn btn-large btn-block btn-primary" type="button" style="font-family:Microsoft YaHei,Helvetica,Arial,sans-serif;">开放资源　》</button>
                    </div>
                </div>

            </div>
            <div class="span4">
                <div class="thumbnail">
                    <img src="__PUBLIC__/index/image/famous_teacher.png" />
                    <div class="caption">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;中国人民公安大学现有专任教师600余人，其中，具有高级职称300余人。刑事侦查与刑事技术教学团队被评为首批国家级优秀教学团队。网络教育学院依托中国人民公安大学雄厚的教师资源，提供高质量的优秀网络教育</p>
                        <button class="btn btn-large btn-block btn-primary" type="button" style="font-family:Microsoft YaHei,Helvetica,Arial,sans-serif;">名师名家　》</button>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="thumbnail">
                    <img src="__PUBLIC__/index/image/teamwork_school.png" />
                    <div class="caption">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;“普通高等学校继续教育数字化学习资源开放联盟”是为了促进普通高校数字化学习资源建设，推动普通高校自觉参与推动学习型社会建设基础上，由北京大学牵头，联合国内103所普通高等学校建立起来的协作性组织</p>
			<button class="btn btn-large btn-block btn-primary" type="button" style="font-family:Microsoft YaHei,Helvetica,Arial,sans-serif;">联盟高校　》</button>
                    </div>
                </div>
            </div>
        </div>

        <hr/>


        <div class="row-fluid marketing">
            <div class="span12">
                <div class="tabbable tabs-left">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#lA" style="background-color: #FF8400;color: #ffffff;"><i class="icon-book icon-white"></i> 最新更新</a></li>
                        <li class=""><a data-toggle="tab" href="#lB" style="background-color: #C0B408;color: #ffffff;"><i class="icon-star icon-white"></i> 最热课程</a></li>
                        <li class=""><a data-toggle="tab" href="#lC" style="background-color: #7EB80E;color: #ffffff;"><i class="icon-circle-arrow-down icon-white"></i> 免费课程</a></li>
                        <li class=""><a data-toggle="tab" href="#lD" style="background-color: #298ABD;color: #ffffff;"><i class="icon-thumbs-up icon-white"></i> 精品课程</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="lA" class="tab-pane active">
                            <div class="well well-small">
                                <ul class="unstyled class_list">
                                    <li>
                                        <span class="badge badge-important">1</span>&nbsp;&nbsp;
                                        <span>论非法获取计算机信息系统数据罪的必要性</span>&nbsp;&nbsp;
                                        <span class="label label-success">继续教育学院</span>&nbsp;-&nbsp;
                                        <span class="label label-info">唐平</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:20分钟</span>
                                        <span class="pull-right text-error">2013-05-15</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-important">2</span>&nbsp;&nbsp;
                                        <span>公安人力资源管理在日常公安工作中的应用于应对方法</span>&nbsp;&nbsp;
                                        <span class="label label-success">公安管理系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">王毅虹</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:15分钟</span>
                                        <span class="pull-right text-error">2013-05-15</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-important">3</span>&nbsp;&nbsp;
                                        <span>警察防卫与控制</span>&nbsp;&nbsp;
                                        <span class="label label-success">警务战术系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">尹伟</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:19分钟</span>
                                        <span class="pull-right text-error">2013-05-15</span>
                                    </li>
                                    <li>
                                        <span class="badge">4</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">5</span>&nbsp;&nbsp;
                                        <span>基于web模式的日志管理系统的计算机信息系统的入侵检测与攻击防护实践</span>&nbsp;&nbsp;
                                        <span class="label label-success">网络安全保卫学院</span>&nbsp;-&nbsp;
                                        <span class="label label-info">唐平</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:38分钟</span>
                                        <span class="pull-right">2013-05-11</span>
                                    </li>
                                    <li>
                                        <span class="badge">6</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">7</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">8</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="lB" class="tab-pane">
                            <div class="well well-small">
                                <ul class="unstyled class_list">
                                    <li>
                                        <span class="badge badge-important">1</span>&nbsp;&nbsp;
                                        <span>基于web模式的日志管理系统的计算机信息系统的入侵检测与攻击防护实践</span>&nbsp;&nbsp;
                                        <span class="label label-success">网络安全保卫学院</span>&nbsp;-&nbsp;
                                        <span class="label label-info">唐平</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:38分钟</span>
                                        <span class="pull-right text-error">2013-05-11</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-important">2</span>&nbsp;&nbsp;
                                        <span>警察防卫与控制</span>&nbsp;&nbsp;
                                        <span class="label label-success">警务战术系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">尹伟</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:19分钟</span>
                                        <span class="pull-right text-error">2013-05-15</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-important">3</span>&nbsp;&nbsp;
                                        <span>公安人力资源管理在日常公安工作中的应用于应对方法</span>&nbsp;&nbsp;
                                        <span class="label label-success">公安管理系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">王毅虹</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:15分钟</span>
                                        <span class="pull-right text-error">2013-05-15</span>
                                    </li>
                                    <li>
                                        <span class="badge">4</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">5</span>&nbsp;&nbsp;
                                        <span>论非法获取计算机信息系统数据罪的必要性</span>&nbsp;&nbsp;
                                        <span class="label label-success">继续教育学院</span>&nbsp;-&nbsp;
                                        <span class="label label-info">唐平</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:20分钟</span>
                                        <span class="pull-right">2013-05-15</span>

                                    </li>
                                    <li>
                                        <span class="badge">6</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">7</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">8</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div id="lC" class="tab-pane">
                            <div class="well well-small">
                                <ul class="unstyled class_list">
                                    <li>
                                        <span class="badge badge-important">1</span>&nbsp;&nbsp;
                                        <span>论非法获取计算机信息系统数据罪的必要性</span>&nbsp;&nbsp;
                                        <span class="label label-success">继续教育学院</span>&nbsp;-&nbsp;
                                        <span class="label label-info">唐平</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:20分钟</span>
                                        <span class="pull-right text-error">2013-05-15</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-important">2</span>&nbsp;&nbsp;
                                        <span>公安人力资源管理在日常公安工作中的应用于应对方法</span>&nbsp;&nbsp;
                                        <span class="label label-success">公安管理系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">王毅虹</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:15分钟</span>
                                        <span class="pull-right text-error">2013-05-15</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-important">3</span>&nbsp;&nbsp;
                                        <span>警察防卫与控制</span>&nbsp;&nbsp;
                                        <span class="label label-success">警务战术系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">尹伟</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:19分钟</span>
                                        <span class="pull-right text-error">2013-05-15</span>
                                    </li>
                                    <li>
                                        <span class="badge">4</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">5</span>&nbsp;&nbsp;
                                        <span>基于web模式的日志管理系统的计算机信息系统的入侵检测与攻击防护实践</span>&nbsp;&nbsp;
                                        <span class="label label-success">网络安全保卫学院</span>&nbsp;-&nbsp;
                                        <span class="label label-info">唐平</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:38分钟</span>
                                        <span class="pull-right">2013-05-11</span>
                                    </li>
                                    <li>
                                        <span class="badge">6</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">7</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">8</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div id="lD" class="tab-pane">
                            <div class="well well-small">
                                <ul class="unstyled class_list">
                                    <li>
                                        <span class="badge badge-important">1</span>&nbsp;&nbsp;
                                        <span>基于web模式的日志管理系统的计算机信息系统的入侵检测与攻击防护实践</span>&nbsp;&nbsp;
                                        <span class="label label-success">网络安全保卫学院</span>&nbsp;-&nbsp;
                                        <span class="label label-info">唐平</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:38分钟</span>
                                        <span class="pull-right text-error">2013-05-11</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-important">2</span>&nbsp;&nbsp;
                                        <span>警察防卫与控制</span>&nbsp;&nbsp;
                                        <span class="label label-success">警务战术系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">尹伟</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:19分钟</span>
                                        <span class="pull-right text-error">2013-05-15</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-important">3</span>&nbsp;&nbsp;
                                        <span>公安人力资源管理在日常公安工作中的应用于应对方法</span>&nbsp;&nbsp;
                                        <span class="label label-success">公安管理系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">王毅虹</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:15分钟</span>
                                        <span class="pull-right text-error">2013-05-15</span>
                                    </li>
                                    <li>
                                        <span class="badge">4</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">5</span>&nbsp;&nbsp;
                                        <span>论非法获取计算机信息系统数据罪的必要性</span>&nbsp;&nbsp;
                                        <span class="label label-success">继续教育学院</span>&nbsp;-&nbsp;
                                        <span class="label label-info">唐平</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:20分钟</span>
                                        <span class="pull-right">2013-05-15</span>

                                    </li>
                                    <li>
                                        <span class="badge">6</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">7</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                    <li>
                                        <span class="badge">8</span>&nbsp;&nbsp;
                                        <span>警察在突发性群体事件中所处的地位与处理原则</span>&nbsp;&nbsp;
                                        <span class="label label-success">治安系</span>&nbsp;-&nbsp;
                                        <span class="label label-info">某某</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="label label-important">时长:29分钟</span>
                                        <span class="pull-right">2013-05-12</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
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