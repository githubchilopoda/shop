<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/vmallshop/index.php/Admin/Login/save/navTabId/listlogin/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($_SESSION['admin_info']['admin_id']); ?>"/>
		<div class="pageFormContent" layoutH="50">
			<dl>
				<dt>密码：</dt>
				<dd><input type="password"  id="w_validation_pwd" class="required alphanumeric" minlength="5" maxlength="20" style="width:60%" name="admin_pwd" value=""/></dd>
			</dl>
			<dl>
				<dt>确认密码：</dt>
				<dd><input type="password" class="required"  style="width:60%" name="name" value="" equalto="#w_validation_pwd"/></dd>
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