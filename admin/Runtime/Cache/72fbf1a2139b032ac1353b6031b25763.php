<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__ACTION__" method="post">
  <input type="hidden" name="pageNum" value="<?php echo ($currentPage); ?>"/>
  <input type="hidden" name="name" value="<?php echo ($_REQUEST['name']); ?>" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="__ACTION__" method="post">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:330px;">
			<label>分类名称：</label>
			  <input type="text" name="name" />
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
	    <li><a class="add" href="__APP__/course/addcategory" target="dialog" mask="true"><span>新增</span></a></li>
	    <li class=""><a class="delete" href="__APP__/course/delcategory/navTabId/course_category" posttype="string" rel="ids" target="selectedTodo" title="确实要删除这些记录吗?" warn="请选择分类"><span>删除</span></a></li>
	    <li><a class="edit" href="__APP__/course/editcategory/id/{sid_role}" target="dialog" mask="true" warn="请选择分类"><span>编辑</span></a></li>

		</ul>
	</div>

	<table class="table" width="100%" layoutH="138">
		<thead>
		  <tr>
		     <th width="5"><div title="" class="gridCol"><input type="checkbox" class="checkboxCtrl" group="ids"></div></th>
			<th width="10">编号</th>
			<th width="50">分类名称</th>
			<th width="50">售价</th>
			<th width="60">添加时间</th>
			<th width="100">备注</th>			
		</tr>
		</thead>
		<tbody>
		<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr target="sid_role" rel="<?php echo ($r["id"]); ?>">
		  <td><input type="checkbox" value="<?php echo ($r["id"]); ?>" name="ids"></td>
			  <td><?php echo ($r["id"]); ?></td>
			  <td><?php echo ($r["name"]); ?></td>
			  <td><?php echo ($r["price"]); ?></td>
			  <td><?php echo (date("Y-m-d H:i:s", $r["addtime"])); ?></td>
			  <td><?php echo ($r["remark"]); ?></td>
			 
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