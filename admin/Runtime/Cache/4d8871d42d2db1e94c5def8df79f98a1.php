<?php if (!defined('THINK_PATH')) exit();?><div class="panel">
  <h1>添加文章</h1>
  <div class="pageFormContent" layoutH="56">
    <form method="post" action="__ACTION__/callbackType/closeCurrent/navTabId/news_news" class="pageForm required-validate" onsubmit="return iframeCallback(this, navTabAjaxDone)">
      <p style="width:200px;">
      <label>所属栏目：</label>
      <select name="cid">
	<?php if(is_array($result_category)): $i = 0; $__LIST__ = $result_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rc): $mod = ($i % 2 );++$i; if(($result["cid"]) == $rc["id"]): ?><option value="<?php echo ($rc["id"]); ?>" selected="selected"><?php echo ($rc["name"]); ?></option>
	<?php else: ?>
	<option value="<?php echo ($rc["id"]); ?>"><?php echo ($rc["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </select>
      </p>

      <p style="width:600px;"><label>文章标题：</label>
      <input style="margin-left:10px;" type="text" class="textInput required" name="title" size="50" value="<?php echo ($result["title"]); ?>">
      </p>  
      
      <div class="divider"></div>
      <p style="width:100%;height:400px;">
      <textarea class="editor" name="content" style="width:96%;" rows="20"><?php echo (stripslashes($result["content"])); ?></textarea>

	</p>
<input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>">
      <div class="formBar">
	<ul>
	  <li><div class="buttonActive"><div class="buttonContent"><button type="submit">提交</button></div></div></li>
	  <li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
	</ul>
      </div>
    </form>

  </div>
</div>