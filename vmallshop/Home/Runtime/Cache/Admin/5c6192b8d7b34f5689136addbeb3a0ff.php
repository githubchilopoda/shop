<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/HelpCategory/update/navTabId/listhelp_category/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>ID:</dt>
				<dd><input type="text" class="required"  style="width:100%" name="help_category_id" value="<?php echo ($vo["help_category_id"]); ?>" readonly /></dd>
			</dl>
			
			<dl>
				<dt>问题分类:</dt>
				<dd><input type="text"  style="width:100%" name="help_category_name" value="<?php echo ($vo["help_category_name"]); ?>"/></dd>
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>