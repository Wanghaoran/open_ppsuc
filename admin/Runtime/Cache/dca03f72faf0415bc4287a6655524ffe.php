<?php if (!defined('THINK_PATH')) exit();?><div class="page">
	<div class="pageContent">
	
	<form method="post" action="__ACTION__/callbackType/closeCurrent/navTabId/member_member" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
		<div class="pageFormContent" layoutH="58">
		


	
	      <div class="unit">
		<label>邮箱：</label>
		<input type="text" class="required" name="email" size="30" value="<?php echo ($result["email"]); ?>" />
	      </div>
	      <div class="unit">
		<label>联系电话：</label>
		<input type="text" class="required digits" name="telphone" value="<?php echo ($result["telphone"]); ?>" />
	</div>
	 <div class="unit">
		<label>密码：</label>
		<input type="password" name="password"  /><label>(留空为不更改)</label>
	</div>

	      <div class="unit">
		<label>真实姓名：</label>
		<input type="text" name="name" value="<?php echo ($result["name"]); ?>" />
	      </div>
	      <input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>" />

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