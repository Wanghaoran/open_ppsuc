<?php if (!defined('THINK_PATH')) exit();?><div class="page">
	<div class="pageContent">
	
	<form method="post" action="__ACTION__/callbackType/closeCurrent/navTabId/course_course" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this, dialogAjaxDone)">
		<div class="pageFormContent" layoutH="58">

		  <div class="unit">
		<label>所属分类</label>
		<select class="combox" name="cid">
		    <?php if(is_array($result_category)): $i = 0; $__LIST__ = $result_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rc): $mod = ($i % 2 );++$i;?><option value="<?php echo ($rc["id"]); ?>"><?php echo ($rc["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		  </select>

	</div>
	      <div class="unit">
		<label>课程名称：</label>
		<input type="text" name="name" class="required" />
	      </div>
	      <div class="unit">
		<label>图片：</label>
		<input type="file" name="pic" />
	      </div>
		<div class="unit">
		<label>课件地址：</label>
		<input type="text" name="file" />
	      </div>
	      <div class="unit">
		<label>课程说明：</label>
		<textarea name="content"  rows="5" cols="57" ></textarea>
	</div>

</div>
		<div class="formBar">
		  <ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
	
	</div>
</div>