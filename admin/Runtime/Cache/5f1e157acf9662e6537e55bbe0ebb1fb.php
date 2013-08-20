<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__ACTION__" method="post">
  <input type="hidden" name="pageNum" value="<?php echo ($currentPage); ?>"/>
  <input type="hidden" name="name" value="<?php echo ($_REQUEST['name']); ?>" />
  <input type="hidden" name="key" value="<?php echo ($_REQUEST['key']); ?>" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="__ACTION__" method="post">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:330px;">
			<label>关键字：</label>
			  <input type="text" name="name" />
				<select class="combox" name="key">
				  <option value="name">会员名称</option>
				  <option value="email">电子邮件</option>
				</select>
				</li>
		</ul>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">查询</button></div></div></li>
			</ul>
		</div>
	</div>
	</form>
</div>

<div class="pageContent">
	<div class="panelBar">
	  <ul class="toolBar">
	    <li class=""><a class="delete" href="__APP__/member/delmember/navTabId/member_member" posttype="string" rel="ids" target="selectedTodo" title="确实要删除这些记录吗?" warn="请选择会员"><span>删除</span></a></li>
	    <li><a class="edit" href="__APP__/member/editmember/id/{sid_role}" target="dialog" mask="true" warn="请选择会员"><span>编辑</span></a></li>

		</ul>
	</div>

	<table class="table" width="100%" layoutH="138">
		<thead>
		  <tr>
		     <th width="5"><div title="" class="gridCol"><input type="checkbox" class="checkboxCtrl" group="ids"></div></th>
			<th width="30">编号</th>
			<th width="100">电子邮件</th>
			<th width="60">真实姓名</th>
			<th width="60">电话</th>
			<th width="60">注册时间</th>
			<th width="50">登陆次数</th>
			

		</tr>
		</thead>
		<tbody>
		<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr target="sid_role" rel="<?php echo ($r["id"]); ?>">
		  <td><input type="checkbox" value="<?php echo ($r["id"]); ?>" name="ids"></td>
			  <td><?php echo ($r["id"]); ?></td>
			  <td><?php echo ($r["email"]); ?></td>
			  <td><?php echo ($r["name"]); ?></td>
			  <td><?php echo ($r["telphone"]); ?></td>			  			  			  
			  <td><?php echo (date("Y-m-d", $r["register_time"])); ?></td>
			  <td><?php echo ($r["login_count"]); ?></td>
			 
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
	  
	  
		<div class="pages">
		  <span>共<?php echo ($count); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($count); ?>" numPerPage="<?php echo ($listRows); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>

</div>