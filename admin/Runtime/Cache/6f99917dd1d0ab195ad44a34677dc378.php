<?php if (!defined('THINK_PATH')) exit();?><div class="page">
	<div class="pageContent">
	
	<form method="post" action="__ACTION__/callbackType/closeCurrent/navTabId/news_category" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
		<div class="pageFormContent" layoutH="58">

	      <div class="unit">
		<label>新闻分类名称：</label>
		<input type="text" name="name" class="required" value="<?php echo ($result["name"]); ?>" />
	      </div>
	      <div class="unit">
		<label>颜色：</label>
		<input type="text" name="color" value="<?php echo ($result["color"]); ?>" />
	      </div>
	      <div class="unit">
		<label>备注：</label>
		<textarea name="remark"  rows="5" cols="57" ><?php echo ($result["remark"]); ?></textarea>
	</div>

</div>
	<input type="hidden" name="id"  value="<?php echo ($_GET['id']); ?>" />
		<div class="formBar">
		  <ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
	
	</div>
</div>